import { _decorator, Component, Node, director, Label, Vec2 } from 'cc';
import { ChessType } from '../game/Chess';
const { ccclass, property } = _decorator;

// 定义每个关卡的棋子初始摆放位置配置
const levelConfigs = {
    1: [
        {
            type: ChessType.BIG,
            size: new Vec2(2, 2),
            instances: [
                { positions: [10, 11, 14, 15] }, // 第一个大棋子放在序号为10, 11, 14, 15的格子
            ]
        },
        {
            type: ChessType.VERTICAL,
            size: new Vec2(1, 2),
            instances: [
                { positions: [1, 5] }, // 第一个竖棋子放在序号为1 ,5的格子
                { positions: [4, 8] }, // 第二个竖棋子放在序号为4 ,8的格子
                { positions: [9, 13] }, // 第三个竖棋子放在序号为9 ,13的格子
                { positions: [12, 16] }, // 第四个竖棋子放在序号为12 ,16的格子
            ]
        },
        {
            type: ChessType.HORIZONTAL,
            size: new Vec2(2, 1),
            instances: [
                { positions: [6, 7] }, // 第一个横棋子放在序号为6 ,7的格子        
            ]
        },
        {
            type: ChessType.SMALL,
            size: new Vec2(1, 1),
            instances: [
                { positions: [2] }, // 第一个小棋子放在序号为2的格子
                { positions: [3] }, // 第二个小棋子放在序号为3的格子
                { positions: [17] }, // 第三个小棋子放在序号为17的格子
                { positions: [20] }, // 第四个小棋子放在序号为20的格子
            ]
        },
    ],
    2: [
        // 关卡2的棋子配置
        {
            type: ChessType.BIG,
            size: new Vec2(2, 2),
            instances: [
                { positions: [6, 7, 10, 11] },
            ]
        },
        {
            type: ChessType.VERTICAL,
            size: new Vec2(1, 2),
            instances: [
                { positions: [1, 5] },
                { positions: [8, 12] },
                { positions: [9, 13] },
                { positions: [15, 19] },
            ]
        },
        {
            type: ChessType.HORIZONTAL,
            size: new Vec2(2, 1),
            instances: [
                { positions: [2, 3] }, // 第一个横棋子放在序号为6 ,7的格子        
            ]
        },
        {
            type: ChessType.SMALL,
            size: new Vec2(1, 1),
            instances: [
                { positions: [4] }, // 第一个小棋子放在序号为2的格子
                { positions: [14] }, // 第二个小棋子放在序号为3的格子
                { positions: [16] }, // 第三个小棋子放在序号为17的格子
                { positions: [18] }, // 第四个小棋子放在序号为20的格子
            ]
        },
    ],
    3: [
        {
            type: ChessType.BIG,
            size: new Vec2(2, 2),
            instances: [
                { positions: [6, 7, 10, 11] }, // 第一个大棋子放在序号为10, 11, 14, 15的格子
            ]
        },
        {
            type: ChessType.VERTICAL,
            size: new Vec2(1, 2),
            instances: [
                { positions: [5, 9] }, // 第一个竖棋子放在序号为1 ,5的格子
                { positions: [8, 12] }, // 第二个竖棋子放在序号为4 ,8的格子
                { positions: [13, 17] }, // 第三个竖棋子放在序号为9 ,13的格子
                { positions: [16, 20] }, // 第四个竖棋子放在序号为12 ,16的格子
            ]
        },
        {
            type: ChessType.HORIZONTAL,
            size: new Vec2(2, 1),
            instances: [
                { positions: [2, 3] }, // 第一个横棋子放在序号为6 ,7的格子        
            ]
        },
        {
            type: ChessType.SMALL,
            size: new Vec2(1, 1),
            instances: [
                { positions: [1] }, // 第一个小棋子放在序号为2的格子
                { positions: [4] }, // 第二个小棋子放在序号为3的格子
                { positions: [14] }, // 第三个小棋子放在序号为17的格子
                { positions: [15] }, // 第四个小棋子放在序号为20的格子
            ]
        },
    ],
    4: [
        // 关卡2的棋子配置
        {
            type: ChessType.BIG,
            size: new Vec2(2, 2),
            instances: [
                { positions: [6, 7, 10, 11] },
            ]
        },
        {
            type: ChessType.VERTICAL,
            size: new Vec2(1, 2),
            instances: [
                { positions: [5, 9] },
                { positions: [8, 12] },
                { positions: [14, 18] },
            ]
        },
        {
            type: ChessType.HORIZONTAL,
            size: new Vec2(2, 1),
            instances: [
                { positions: [1, 2] }, // 第一个横棋子放在序号为6 ,7的格子    
                { positions: [3, 4] }, // 第一个横棋子放在序号为6 ,7的格子            
            ]
        },
        {
            type: ChessType.SMALL,
            size: new Vec2(1, 1),
            instances: [
                { positions: [13] }, // 第一个小棋子放在序号为2的格子
                { positions: [15] }, // 第二个小棋子放在序号为3的格子
                { positions: [17] }, // 第三个小棋子放在序号为17的格子
                { positions: [20] }, // 第四个小棋子放在序号为20的格子
            ]
        },
    ],
    5: [
        {
            type: ChessType.BIG,
            size: new Vec2(2, 2),
            instances: [
                { positions: [5, 6, 9, 10] }, // 第一个大棋子放在序号为10, 11, 14, 15的格子
            ]
        },
        {
            type: ChessType.VERTICAL,
            size: new Vec2(1, 2),
            instances: [
                { positions: [7, 11] }, // 第一个竖棋子放在序号为1 ,5的格子
                { positions: [8, 12] }, // 第二个竖棋子放在序号为4 ,8的格子
            ]
        },
        {
            type: ChessType.HORIZONTAL,
            size: new Vec2(2, 1),
            instances: [
                { positions: [1, 2] }, // 第一个横棋子放在序号为6 ,7的格子   
                { positions: [3, 4] }, // 第一个横棋子放在序号为6 ,7的格子        
                { positions: [13, 14] }, // 第一个横棋子放在序号为6 ,7的格子        

            ]
        },
        {
            type: ChessType.SMALL,
            size: new Vec2(1, 1),
            instances: [
                { positions: [15] }, // 第一个小棋子放在序号为2的格子
                { positions: [16] }, // 第二个小棋子放在序号为3的格子
                { positions: [17] }, // 第三个小棋子放在序号为17的格子
                { positions: [18] }, // 第四个小棋子放在序号为20的格子
            ]
        },
    ],

};

@ccclass('LevelButton')
export class LevelButton extends Component {
    @property({ type: Label })
    levelLabel: Label = null;

    @property
    levelIndex: number = 0;

    @property({ type: Node })
    levelLock: Node = null;

    @property({ type: Node })
    getLevelDataNode: Node = null; // 引用GetLevelData脚本所在的节点

    private static _instance: LevelButton = null;
    public static get Instance(): LevelButton {
        if (!this._instance) {
            this._instance = new LevelButton();
        }
        return this._instance;
    }

    @property
    unlockedLevels: number = 3; // 已解锁的关卡数量


    start() {
        this.node.on('click', this.onButtonClick, this);
        


        // 更新GetLevelData脚本中的levelId
        const getLevelData = this.getLevelDataNode.getComponent('GetLevelData');
        if (getLevelData) {
            getLevelData.levelId = this.levelIndex;
        }
        // console.log("按钮初始化完成！");
    }

    onButtonClick() {
        console.log("按钮被点击了！");
        // 检查关卡是否解锁
        if (this.levelLock && this.levelLock.active) {
            console.log("关卡未解锁！");
            return;
        }

        // 获取当前关卡的棋子配置
        const currentLevelConfig = levelConfigs[this.levelIndex];
        // console.log("要传送的当前关卡配置：", currentLevelConfig);

        // 使用全局变量传递关卡数据和棋子配置
        (window as any).currentLevel = this.levelIndex;
        (window as any).currentLevelConfig = currentLevelConfig;

        // 切换到对应的游戏场景
        // director.loadScene(`Level${this.levelIndex}`);
    }

    public updateLevelDisplay() {
        if (this.levelLabel) {
            this.levelLabel.string = `关卡 ${this.levelIndex}`;
        }

        // 根据关卡是否解锁来显示或隐藏锁的图标
        if (this.levelLock) {
            const isUnlocked = this.isLevelUnlocked(this.unlockedLevels);
            this.levelLock.active = !isUnlocked;
            // console.log(`关卡 ${this.levelIndex} 是否解锁: ${isUnlocked}`);
        }
    }

    isLevelUnlocked(count: number): boolean {
        // 这里可以根据实际的关卡解锁逻辑进行判断
        // 例如，根据玩家的进度或成就来决定关卡是否解锁
        // 这里简单地假设前3关默认解锁
        return this.levelIndex <= count;
    }

    public setUnlockedLevels(unlockedLevels: number) {
        console.log("成功")
        this.unlockedLevels = unlockedLevels;
        this.updateLevelDisplay();
    }
}