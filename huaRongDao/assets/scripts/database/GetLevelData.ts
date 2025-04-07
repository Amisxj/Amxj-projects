import { _decorator, Component, Node, Label, Sprite, resources, SpriteFrame, UITransform } from 'cc';
import { LevelButton } from '../hurdles/LevelButton';
const { ccclass, property } = _decorator;

@ccclass('GetLevelData')
export class GetLevelData extends Component {
    @property({ type: Node })
    difficultyNode: Node = null!; // 关卡难度显示节点

    @property({ type: Node })
    bestStepsNode: Node = null!; // 最佳步数显示节点

    @property({ type: Node })
    userPlayTimeNode: Node = null!; // 用户关卡所用时间显示节点

    @property({ type: Node })
    userStepsNode: Node = null!; // 用户关卡步数显示节点

    @property
    levelId: number = 1; // 当前关卡编号

    @property
    userId: string = '12345'; // 用户ID，可以从登录系统中获z取

    @property({ type: String })
    starSpritePath: string = "image/icon/hurldes/start/spriteFrame"; // 星星图标的路径

    private static _instance: GetLevelData = null;
    public static get Instance(): GetLevelData {
        if (!this._instance) {
            this._instance = new GetLevelData();
        }
        return this._instance;
    }
    start() {
        this.fetchGameData();
    }

    // 获取游戏数据
    public fetchGameData() {
        // 判断是否在微信小程序环境中
        if (typeof wx !== 'undefined' && wx.request) {
            wx.request({
                url: 'https://www.wumingjie.online/huarongdao/levelGet.php', // 替换为你的PHP接口地址
                method: 'GET',
                data: {
                    levelId: this.levelId,
                    userId: this.userId
                },
                success: (res) => {
                    if (res.data.code === 200) {
                        console.log('获取游戏数据成功:', res.data.data);
                        const gameData = res.data.data;
                        this.updateGameUI(gameData);
                    } else {
                        console.error('获取游戏数据失败:', res.data.message);
                    }
                },
                fail: (err) => {
                    console.error('请求失败:', err);
                }
            });
        } else {
            // 编辑器环境或非微信环境，使用fetch API
            console.log('非微信环境，使用fetch获取数据');
            const url = new URL('https://www.wumingjie.online/huarongdao/levelGet.php');
            url.search = new URLSearchParams({
                levelId: this.levelId.toString(),
                userId: this.userId
            }).toString();

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    // console.log('获取游戏数据成功:', data);
                    this.updateGameUI(data.data);
                })
                .catch(error => {
                    console.error('获取游戏数据失败:', error);
                    // 使用模拟数据作为备用
                    const mockData = {
                        difficulty: 1,
                        bestSteps: 30,
                        userPlayTime: '120分钟',
                        userSteps: 45,
                        unlockedLevels: 5
                    };
                    this.updateGameUI(mockData);
                });
        }
    }

    // 更新游戏界面
    updateGameUI(data: {
        difficulty: number;
        bestSteps: number;
        userPlayTime: string;
        userSteps: number;
        unlockedLevels: number;
    }) {
        const bestStepsLabel = this.bestStepsNode.getComponent(Label);
        const userPlayTimeLabel = this.userPlayTimeNode.getComponent(Label);
        const userStepsLabel = this.userStepsNode.getComponent(Label);

        // 设置星星数量
        this.setStarCount(data.difficulty);

        const getLevelData = this.getComponent('LevelButton');
        if (getLevelData) {
            getLevelData.unlockedLevels = data.unlockedLevels;
            getLevelData.setUnlockedLevels(Number(data.unlockedLevels))
        }

        if (bestStepsLabel) {
            bestStepsLabel.string = `最佳步数：${data.bestSteps}步`;
        }
        if (userPlayTimeLabel) {
            userPlayTimeLabel.string = `所用时间：${data.userPlayTime}S`;
        }
        if (userStepsLabel) {
            userStepsLabel.string = `完成步数：${data.userSteps}步`;
        }

        // 使用单例来更新已解锁的关卡数量
        LevelButton.Instance.setUnlockedLevels(Number(data.unlockedLevels)); // 修复类型错误
        // console.log("解锁的关卡数量：" + count);
    }

    // 设置星星数量
    setStarCount(count: number) {

        // 根据count创建星星
        for (let i = 0; i < count; i++) {
            const starNode = new Node(`Star${i}`);
            const starSprite = starNode.addComponent(Sprite);

            // 通过路径加载星星图标
            resources.load(this.starSpritePath, SpriteFrame, (err, spriteFrame) => {
                if (err) {
                    console.error('加载星星图标失败:', err);
                    return;
                }
                starSprite.spriteFrame = spriteFrame;

                // 获取星星节点的UITransform组件
                let uiTransform = starNode.getComponent(UITransform);
                if (!uiTransform) {
                    uiTransform = starNode.addComponent(UITransform);
                }
                uiTransform.setContentSize(30, 30);

                // 计算星星的位置
                const starWidth = 30; // 星星的宽度
                const spacing = 2; // 星星之间的间距
                const startX = 0; // 起始位置

                starNode.setPosition(startX + i * (starWidth + spacing), 0, 0);

                // 将星星添加到difficultyNode
                this.difficultyNode.addChild(starNode);
            });
        }
    }
}