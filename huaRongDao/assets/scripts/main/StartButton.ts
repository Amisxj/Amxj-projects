import { _decorator, Component, director, Node } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('StartButton')
export class StartButton extends Component {
   
    start() {
        // 绑定按钮点击事件
        this.node.on(Node.EventType.TOUCH_END, this.onStartGame, this);

    }

    private onStartGame() {
        // 加载场景
        director.loadScene('scene-hurdles');
    }
    update(deltaTime: number) {
        
    }
}


