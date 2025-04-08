import { _decorator, Component, Slider, Node, UITransform } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('ResizableSliderCtrl')
export class ResizableSliderCtrl extends Component {
    @property(Slider)
    slider: Slider = null;

    private initialWidth: number = 60; // 滑动条的初始宽度
    private minWidth: number = 10;    // 滑动条的最小宽度
    private maxWidth: number = 280;    // 滑动条的最大宽度

    onLoad() {
        // 初始化滑动条的宽度
        this.slider.node.getComponent(UITransform).width = this.initialWidth;
        // 添加触摸滑动事件监听
        this.slider.node.on('touchstart', this.onTouchStart, this);
        this.slider.node.on('touchmove', this.onTouchMove, this);
        this.slider.node.on('touchend', this.onTouchEnd, this);
    }

    onTouchStart(event: any) {
        // 触摸开始时的逻辑
        this.updateSliderWidth(event);
    }

    onTouchMove(event: any) {
        // 触摸移动时的逻辑
        this.updateSliderWidth(event);
    }

    onTouchEnd(event: any) {
        // 触摸结束时的逻辑
        this.updateSliderWidth(event);
    }

    updateSliderWidth(event: any) {
        // 计算新的宽度
        const touchPosition = event.getUILocation();
        const sliderPosition = this.slider.node.getPosition();
        const sliderParent = this.slider.node.parent;
        const sliderParentPosition = sliderParent.getPosition();

        // 计算触摸位置相对于滑动条父节点的位置
        const touchX = touchPosition.x - sliderParentPosition.x;
        const touchY = touchPosition.y - sliderParentPosition.y;

        // 根据触摸位置调整滑动条的宽度
        let newWidth = touchX - sliderPosition.x;
        newWidth = Math.max(this.minWidth, Math.min(this.maxWidth, newWidth));

        // 设置滑动条的宽度
        this.slider.node.getComponent(UITransform).width = newWidth;
    }
}