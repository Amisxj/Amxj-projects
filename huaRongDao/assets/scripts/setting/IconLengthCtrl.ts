import { _decorator, Component, Slider, Node, UITransform } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('IconLengthCtrl')
export class IconLengthCtrl extends Component {
    @property(Slider)
    slider: Slider = null;

    @property(Node)
    iconNode: Node = null;

    private initialWidth: number = 60; // 初始宽度（加载时的宽度）
    private maxWidth: number = 280;    // 最大宽度

    onLoad() {
        // 初始化滑动器的值
        this.slider.progress = 0; // 设置初始进度为0.5，表示初始宽度在0和最大宽度之间
        // 添加滑动事件监听
        this.slider.node.on('slide', this.onSlide, this);
        // 初始化图标长度
        this.updateIconLength();
    }

    onSlide(slider: Slider) {
        // 更新图标长度
        this.updateIconLength();
    }

    updateIconLength() {
        // 获取滑动器的当前值
        const progress = this.slider.progress;
        // 计算新的宽度，从0到最大宽度
        const newWidth = this.maxWidth * progress;
        // 设置图标节点的宽度
        this.iconNode.getComponent(UITransform).width = newWidth;
    }
}