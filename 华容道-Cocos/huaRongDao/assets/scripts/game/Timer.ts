import { _decorator, Component, Label } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('Timer')
export class Timer extends Component {
    @property(Label)
    private clockText: Label | null = null;

    @property
    totalTime: number = 60; // 总倒计时时间（秒）

    @property
    elapsedTime: number = 0; // 已经过去的秒数

    private isRunning: boolean = false;

    start() {
        if (!this.clockText) {
            console.error("时钟文本未设置！");
            return;
        }
        this.resetTimer(); // 初始化倒计时
        this.startTimer(); // 自动启动倒计时
    }

    update(deltaTime: number) {
        if (this.isRunning) {
            this.elapsedTime += deltaTime; // 累加时间

            // 每过1秒更新一次文本
            const currentSecond = Math.floor(this.elapsedTime);
            if (currentSecond !== Math.floor(this.elapsedTime - deltaTime)) {
                this.updateClockText();
            }

            // 如果时间超过60秒，停止计时器
            if (this.elapsedTime >= this.totalTime) {
                this.isRunning = false;
                this.updateClockText();
                console.log("倒计时结束！");
            }
        }
    }

    private updateClockText() {
        const remainingTime = this.totalTime - Math.floor(this.elapsedTime); // 剩余时间
        if (this.clockText) {
            this.clockText.string = remainingTime.toString();
        }
    }

    public startTimer() {
        if (!this.isRunning) {
            this.isRunning = true;
            console.log("倒计时开始！");
        }
    }

    public stopTimer() {
        this.isRunning = false;
        console.log("倒计时停止！");
    }

    public resetTimer() {
        this.elapsedTime = 0; // 重置已过去的时间
        this.updateClockText();
        this.isRunning = false;
        console.log("倒计时重置！");
    }
}       