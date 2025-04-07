import { _decorator, Component } from 'cc';
const { ccclass, property } = _decorator;
import { SceneHistoryManager } from "../public/SceneHistoryManager";
@ccclass('Init')
export class Init extends Component {
    start() {
        SceneHistoryManager.getInstance().pushScene("scene-main");
    }
}


