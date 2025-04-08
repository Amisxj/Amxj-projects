import { _decorator, Component, Node, Animation, EventTouch } from 'cc';
import { MaskControl } from './MaskControl'; // 导入 MaskControl 脚本
const { ccclass, property } = _decorator;

@ccclass('IconAnimation')
export class IconAnimation extends Component {
    @property(Node)
    private iconNode: Node | null = null; // 图标节点

    private iconAnimation: Animation | null = null; // 动画组件

    @property({ type: Node })
    maskControlNode: Node | null = null; // MaskControl 节点

    onLoad() {
        // 获取动画组件
        if (this.iconNode) {
            this.iconAnimation = this.iconNode.getComponent(Animation);
        }

        // 绑定点击事件
        this.node.on(Node.EventType.TOUCH_START, this.onClickIcon, this);
    }

    onClickIcon(event: EventTouch) {
        if (this.iconAnimation) {
            // 播放动画
            this.iconAnimation.play('touchIcon'); // 'touchIcon' 是动画剪辑的名称

            // 监听动画播放完成
            this.iconAnimation.once(Animation.EventType.FINISHED, this.onAnimationFinished, this);
        } else {
            console.log("未找到动画组件");
        }
    }

    onAnimationFinished() {
        // 动画播放完成，调用 MaskControl 的 togglePanel 方法
        this.invokeMaskControl();
    }

    invokeMaskControl() {
        if (this.maskControlNode) {
            const maskControl = this.maskControlNode.getComponent(MaskControl);
            if (maskControl) {
                // 动态决定是显示还是隐藏面板
                
                const showPanel = !maskControl.panelNode?.active; // 如果面板当前未显示，则显示；否则隐藏
                maskControl.togglePanel(showPanel);
            } else {
                console.log("未找到 MaskControl 脚本");
            }
        } else {
            console.log("未设置 MaskControl 节点");
        }
    }


}