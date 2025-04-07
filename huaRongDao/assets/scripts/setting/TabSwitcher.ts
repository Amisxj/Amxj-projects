import { _decorator, Component, Node, EventTouch } from "cc";
const { ccclass, property } = _decorator;

@ccclass("TabSwitcher")
export class TabSwitcher extends Component {
    @property(Node)
    contentContainer: Node = null; // 绑定内容容器

    start() {
        // 初始化按钮触摸事件
        const button1 = this.node.getChildByName("systemSettings");
        const button2 = this.node.getChildByName("accountManagement");

        button1.on(Node.EventType.TOUCH_END, () => this.switchContent(0));
        button2.on(Node.EventType.TOUCH_END, () => this.switchContent(1));
    }

    switchContent(index: number) {
        const contents = this.contentContainer.children;
        for (let i = 0; i < contents.length; i++) {
            contents[i].active = i === index; // 只激活对应的内容区域
        }
    }
}