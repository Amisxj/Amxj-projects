import { _decorator, Component, Node, Sprite, Color, EventTouch } from 'cc';
import { Timer } from '../game/Timer';
import { AudioManager } from './AudioManager';
const { ccclass, property } = _decorator;

@ccclass("MaskControl")
export class MaskControl extends Component {
    @property(Node)
    maskNode: Node | null = null; // 灰化遮罩节点

    @property(Node)
    panelNode: Node | null = null; // 面板节点

    @property(Timer)
    timerScript: Timer | null = null; // 计时器脚本

    @property(String)
    timerState: string = "stopTimer"; // 计时器状态

    start() {
        if (!this.maskNode) {
            console.error("maskNode 未正确绑定");
            return;
        }

        if (!this.panelNode) {
            console.error("panelNode 未正确绑定");
            return;
        }

        if (!this.timerScript) {
            console.error("timerScript 未正确绑定");
            return;
        }

        // // 初始化遮罩和面板
        // this.panelNode.active = false;
        // this.maskNode.active = false;    
        const sprite = this.maskNode.getComponent(Sprite);
        if (sprite) {
            sprite.color = new Color(128, 128, 128, 128); // 设置遮罩为灰色半透明
        }


    }

    /**
     * 切换面板的显示状态
     * @param show 是否显示面板
     */
    public togglePanel(show: boolean): void {
        if (!this.maskNode || !this.panelNode) {
            console.error("maskNode 或 panelNode 未正确绑定");
            return;
        }

        if (show) {
            // 停止名称为 "Canvas" 的节点及其子节点下的所有音效
            AudioManager.stopAudiosByNodeName("Canvas");
            console.log("显示面板和遮罩");
            // 显示遮罩和面板
            this.maskNode.active = true;
            this.panelNode.active = true;
            // console.log(this.maskNode.active, this.panelNode.active)
            // 设置面板的层级
            this.panelNode.setSiblingIndex(this.maskNode.getSiblingIndex() + 1); // 面板在遮罩之上
            // 切换计时器状态
            this.timerStateChange(this.timerState)

            // 添加事件监听器，阻止事件传递
            this.maskNode.on(Node.EventType.TOUCH_START, this.onMaskTouch, this);
        } else {
            console.log("关闭面板和遮罩");
            // 关闭遮罩和面板
            this.maskNode.active = false;
            this.panelNode.active = false;
            // 切换计时器状态
            this.timerStateChange(this.timerState)

            // 移除事件监听器
            this.maskNode.off(Node.EventType.TOUCH_START, this.onMaskTouch, this);

             // 播放背景音乐
             AudioManager.playBackgroundMusic();
        }
    }

    /**
     * 遮罩的触摸事件处理器
     * @param event 触摸事件
     */
    onMaskTouch(event: EventTouch): boolean {
        // 返回 true 来阻止事件传递
        console.log("阻止事件传递");
        return true;
    }

    timerStateChange(state: string): void {
        if (state == "stopTimer") {
            // 暂停时钟
            this.timerScript?.stopTimer();
        }
        else if (state == "resetTimer") {
            // 重置时钟
            this.timerScript?.resetTimer();
            this.timerScript?.startTimer();
        }
        else{
            // 开始时钟
            this.timerScript?.startTimer();
        }
    }
}