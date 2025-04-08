import { _decorator, Component, Node, Button, director } from "cc";
import { SceneHistoryManager } from "../public/SceneHistoryManager";
const { ccclass, property } = _decorator;

@ccclass("SceneSwitcher")
export class SceneSwitcher extends Component {
    @property({ tooltip: "目标场景名称" })
    targetScene: string = ""; // 目标场景名称

    start() {
        const button = this.node.getComponent(Button);
        if (button) {
            button.node.on(Button.EventType.CLICK, this.onButtonClick, this);
        } else {
            console.warn("当前节点未添加 Button 组件，无法响应点击事件！");
        }
    }

    onButtonClick() {
        if (!this.targetScene) {
            console.error("目标场景名称未设置！");
            return;
        }

        console.log(`正在切换到目标场景: ${this.targetScene}`);

        // 获取当前场景名称
        // const currentScene = director.getScene().name;
        // console.log(`当前场景: ${currentScene}`);

        // 将当前场景推入历史记录
        SceneHistoryManager.getInstance().pushScene(this.targetScene);

        // 切换场景
        director.loadScene(this.targetScene);
    }
}