import { _decorator, Component, Label, Node, Sprite } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('GetUserData')
export class GetUserData extends Component {
    @property({ type: Node })
    levelNode: Node = null!;

    @property({ type: Node })
    nameNode: Node = null!;

    @property({ type: Node })
    playTimeNode: Node = null!;

    @property({ type: Node })
    signatureNode: Node = null!;

    @property({ type: Node })
    avatorNode: Node = null!;

    @property({ type: Node })
    gameIdNode: Node = null!;

    start() {
        this.fetchGameData();
    }

    // 获取游戏数据
    fetchGameData() {
        // 判断是否在微信小程序环境中
        if (typeof wx !== 'undefined' && wx.request) {
            wx.request({
                url: 'https://www.wumingjie.online/huarongdao/userGet.php', // 替换为你的PHP接口地址
                method: 'GET',
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
            fetch('https://www.wumingjie.online/huarongdao/userGet.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('获取游戏数据成功:', data);
                    this.updateGameUI(data.data);
                })
                .catch(error => {
                    console.error('获取游戏数据失败:', error);
                    // 使用模拟数据作为备用
                    const mockData = { level: 10, nickname: '冒险之旅', playTime: 100 + '分钟' , signature: '勇往直前', avatarUrl: '', gameId: 1234567890 };
                    this.updateGameUI(mockData);
                });
        }
    }

    // 更新游戏界面
    updateGameUI(data: { level: number; nickname: string; playTime: string; signature: string; avatarUrl: string; gameId: number; }) {
        const levelLabel = this.levelNode.getComponent(Label);
        const nameLabel = this.nameNode.getComponent(Label);
        const playTimeLabel = this.playTimeNode.getComponent(Label);
        const signature = this.signatureNode.getComponent(Label);
        const avatar = this.avatorNode.getComponent(Sprite);
        const gameId = this.gameIdNode.getComponent(Label);
        if (levelLabel) {
            levelLabel.string = `等级：${data.level}`;
        }
        if (nameLabel) {
            nameLabel.string = `${data.nickname}`;
        }
        if (playTimeLabel) {
            playTimeLabel.string = `游戏时长：${data.playTime}`;
        }
        if (signature) {
            signature.string = `${data.signature}`;
        }
        if (gameId) {
            gameId.string = `游戏ID: ${data.gameId}`;
        }
    }
}