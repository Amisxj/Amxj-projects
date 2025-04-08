import { _decorator, Component, Node, EventTouch, Label } from "cc";
const { ccclass, property } = _decorator;

@ccclass('LongTouch')
export class LongTouch extends Component {
    @property(Node)
    infoPanel: Node = null; // 绑定信息面板节点

    @property(Label)
    gradeLabel: Label = null; // 玩家等级标签

    @property(Label)
    playTimeLabel: Label = null; // 人物介绍标签

    private touchStartTime: number = 0;
    private longPressTimer: number = null; // 用于存储长按定时器

    onLoad() {
        this.infoPanel.active = false; // 默认隐藏信息面板
    }

    start() {
        this.node.on(Node.EventType.TOUCH_START, this.onTouchStart, this);
        this.node.on(Node.EventType.TOUCH_END, this.onTouchEnd, this);
        this.node.on(Node.EventType.TOUCH_CANCEL, this.onTouchEnd, this);
    }

    onTouchStart(event: EventTouch) {
        this.touchStartTime = Date.now(); // 记录触摸开始时间
        this.infoPanel.active = false; // 确保信息面板初始状态为隐藏

        // 设置定时器，1秒后触发长按逻辑
        this.longPressTimer = setTimeout(() => {
            this.showPlayerInfo(); // 显示信息面板
        }, 1000); // 1秒后触发
    }

    onTouchEnd(event: EventTouch) {
        // 清除定时器，防止长按逻辑在松开手后触发
        if (this.longPressTimer) {
            clearTimeout(this.longPressTimer);
            this.longPressTimer = null;
        }

        this.hidePlayerInfo(); // 松开手后隐藏信息面板
    }

    showPlayerInfo() {
        this.infoPanel.active = true; // 显示信息面板
        // this.gradeLabel.string = `等级: 10`; // 示例等级
        // this.playTimeLabel.string = '这是玩家的介绍信息'; // 示例介绍
    }

    hidePlayerInfo() {
        this.infoPanel.active = false; // 隐藏信息面板
    }

    onDestroy() {
        this.node.off(Node.EventType.TOUCH_START, this.onTouchStart, this);
        this.node.off(Node.EventType.TOUCH_END, this.onTouchEnd, this);
        this.node.off(Node.EventType.TOUCH_CANCEL, this.onTouchEnd, this);

        // 清除定时器，防止内存泄漏
        if (this.longPressTimer) {
            clearTimeout(this.longPressTimer);
            this.longPressTimer = null;
        }
    }
}