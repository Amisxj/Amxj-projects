// LevelManager.ts
import { _decorator, Component, Node, Prefab, instantiate, UITransform, Vec3, Vec2, director } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('LevelManager')
export class LevelManager extends Component {
    @property({ type: Prefab })
    levelButtonPrefab: Prefab = null;

    @property({ type: Node })
    scrollViewContent: Node = null;

    @property
    totalLevels: number = 10;

    @property
    buttonSpacing: number = 100; // 按钮之间的垂直间距

    @property
    buttonWidth: number = 500; // 按钮的宽度

    @property
    buttonHeight: number = 180; // 按钮的高度


    private static _instance: LevelManager = null;
    public static get Instance(): LevelManager {
        if (!this._instance) {
            this._instance = new LevelManager();
        }
        return this._instance;
    }

    start() {
        this.initializeScrollView();
        this.generateLevelButtons();
    }

    
    private initializeScrollView() {
        const contentTrans = this.scrollViewContent.getComponent(UITransform);
        // 设置锚点为顶部居中 (0.5, 1)
        contentTrans.setAnchorPoint(new Vec2(0.5, 1));
        // 初始化内容区域宽度为按钮宽度
        contentTrans.width = this.buttonWidth;
    }

    generateLevelButtons() {
        const contentTrans = this.scrollViewContent.getComponent(UITransform);
        let currentY = 0; // 从顶部开始排列

        for (let i = 1; i <= this.totalLevels; i++) {
            const levelButton = instantiate(this.levelButtonPrefab);
            const levelButtonScript = levelButton.getComponent('LevelButton');
            if (levelButtonScript) {
                levelButtonScript.levelIndex = i;
                levelButtonScript.updateLevelDisplay();
            }

            // 确保每个按钮都有 levelLock 节点
            // if (!levelButton.getChildByName('levelLock')) {
            //     const lockNode = new Node('levelLock');
            //     lockNode.parent = levelButton;
            //     lockNode.active = false; // 默认隐藏
            //     levelButtonScript.levelLock = lockNode;
            // }

            // 设置按钮的位置为竖直排列
            levelButton.position = new Vec3(
                0,
                currentY - this.buttonHeight / 2, // 垂直定位
                0
            );

            // 设置按钮的尺寸
            const buttonTrans = levelButton.getComponent(UITransform);
            if (buttonTrans) {
                buttonTrans.setContentSize(this.buttonWidth, this.buttonHeight);
            }

            this.scrollViewContent.addChild(levelButton);

            // 更新下一个按钮的位置
            currentY -= (this.buttonHeight + this.buttonSpacing);
        }

        // 计算并设置内容区域总高度
        const totalHeight = this.totalLevels * this.buttonHeight + (this.totalLevels - 1) * this.buttonSpacing;
        contentTrans.height = totalHeight;

        // 确保内容区域初始位置在顶部
        this.scrollViewContent.setPosition(0, totalHeight / 2, 0);
    }
}