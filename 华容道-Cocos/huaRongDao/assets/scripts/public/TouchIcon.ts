import { _decorator, Component, Node, Animation, AudioSource, EventTouch } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('TouchIcon')
export class TouchIcon extends Component {
    @property(Animation)
    private animation: Animation | null = null; // 动画组件

    @property(AudioSource)
    private audioSource: AudioSource | null = null; // 音效组件

    start() {
        // 监听触摸事件
        this.node.on(Node.EventType.TOUCH_START, this.onTouchStart, this);
    }

    private onTouchStart(event: EventTouch) {
        // 播放动画
        if (this.animation) {
            this.animation.play('touchIcon'); // 假设动画剪辑名为 'touchAnimation'
        }

        // 播放音效
        if (this.audioSource) {
            this.audioSource.play();
        }
    }

    onDestroy() {
        // 销毁时移除触摸事件监听
        this.node.off(Node.EventType.TOUCH_START, this.onTouchStart, this);
    }
}