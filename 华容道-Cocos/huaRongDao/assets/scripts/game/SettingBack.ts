import { _decorator, Component, Node, Animation, EventTouch } from 'cc';
import { returnScene } from '../public/ReturnScene'; // 导入 returnScene 脚本
const { ccclass, property } = _decorator;

@ccclass('SettingBack')
export class SettingBack extends Component {
    @property(Node)
    private iconNode: Node | null = null; // 图标节点

    private iconAnimation: Animation | null = null; // 动画组件

    @property({ type: Node })
    settingTs: Node | null = null; // settingTs 节点

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
            console.error("未找到动画组件");
        }
    }

    onAnimationFinished() {
        // 动画播放完成，调用 ReturnScence 的 onButtonClick 方法
        this.invokeReturnScence();
    }

    invokeReturnScence() {
            if (this.settingTs) {
                const back = this.settingTs.getComponent(returnScene);
                if (back) {
                    back.onButtonClick();
                } else {
                    console.error("未找到 ReturnScene 脚本");
                }
            } else {
                console.error("未设置 returnScene 节点");
            }
        }

}