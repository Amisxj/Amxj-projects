import { _decorator, Component, Button, director } from "cc";
import { SceneHistoryManager } from "../public/SceneHistoryManager";
const { ccclass, property } = _decorator;

@ccclass("MaskControl")
export class MaskControl  extends Component {
    start() {
        
        const button = this.node.getComponent(Button);
        if (button) {
            button.node.on(Button.EventType.CLICK, this.onButtonClick, this);
        } else {
            console.warn("当前节点未添加 Button 组件，无法响应点击事件！");
        }
    }

    onButtonClick() {
        const previousScene = SceneHistoryManager.getInstance().popScene();
        if (previousScene) {
            console.log("返回上一个场景：");
            director.loadScene(previousScene);
        } else {
            console.warn("已经是第一个场景，无法返回！");
        }
    }
}