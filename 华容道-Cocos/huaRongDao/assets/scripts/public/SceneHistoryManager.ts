import { _decorator, Component, director } from "cc";
const { ccclass } = _decorator;

@ccclass("SceneHistoryManager")
export class SceneHistoryManager extends Component {
    private static instance: SceneHistoryManager = null;
    private sceneHistory: string[] = [];

    // 添加一个锁，防止多线程问题
    private static lock = false;

    static getInstance(): SceneHistoryManager {
        if (!this.instance) {
            // 添加一个简单的锁，防止多线程问题
            if (!this.lock) {
                this.lock = true;
                // 创建一个新的 SceneHistoryManager 实例
                this.instance = new SceneHistoryManager();
                // 解锁
                this.lock = false;
            }
        }
        return this.instance;
    }

    pushScene(sceneName: string) {
        this.sceneHistory.push(sceneName);
        console.log("成功添加新场景 " + sceneName);
    }

    popScene(): string | null {
        if (this.sceneHistory.length > 1) {
            this.sceneHistory.pop();
            return this.sceneHistory[this.sceneHistory.length - 1];
        }
        return null;
    }
}