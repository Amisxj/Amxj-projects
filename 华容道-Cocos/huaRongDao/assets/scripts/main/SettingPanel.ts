import { _decorator, Component, Slider, Button, Node, Event } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('SettingsPanel')
export class SettingsPanel extends Component {
    @property({ type: Slider })
    backgroundVolumeSlider: Slider = null; // 背景音量滑块
    @property({ type: Slider })
    characterVolumeSlider: Slider = null; // 人物音量滑块
    @property({ type: Slider })
    screenBrightnessSlider: Slider = null; // 屏幕亮度滑块
    @property({ type: Button })
    logoutButton: Button = null; // 退出账号按钮

    start() {
        // 初始化滑块的值
        this.backgroundVolumeSlider.progress = this.getBackgroundVolume();
        this.characterVolumeSlider.progress = this.getCharacterVolume();
        this.screenBrightnessSlider.progress = this.getScreenBrightness();

        // 添加事件监听
        this.backgroundVolumeSlider.node.on('slide', this.onBackgroundVolumeChanged, this);
        this.characterVolumeSlider.node.on('slide', this.onCharacterVolumeChanged, this);
        this.screenBrightnessSlider.node.on('slide', this.onScreenBrightnessChanged, this);
        this.logoutButton.node.on('click', this.onLogout, this);
    }

    // 获取背景音量
    getBackgroundVolume(): number {
        // 这里可以替换为从本地存储或服务器获取的值
        return 0.5; // 默认值
    }

    // 获取人物音量
    getCharacterVolume(): number {
        // 这里可以替换为从本地存储或服务器获取的值
        return 0.5; // 默认值
    }

    // 获取屏幕亮度
    getScreenBrightness(): number {
        // 这里可以替换为从本地存储或服务器获取的值
        return 0.5; // 默认值
    }

    // 背景音量改变时的回调
    onBackgroundVolumeChanged(event: Event) {
        const volume = this.backgroundVolumeSlider.progress;
        console.log(`背景音量设置为: ${volume}`);
        this.saveBackgroundVolume(volume);
    }

    // 人物音量改变时的回调
    onCharacterVolumeChanged(event: Event) {
        const volume = this.characterVolumeSlider.progress;
        console.log(`人物音量设置为: ${volume}`);
        this.saveCharacterVolume(volume);
    }

    // 屏幕亮度改变时的回调
    onScreenBrightnessChanged(event: Event) {
        const brightness = this.screenBrightnessSlider.progress;
        console.log(`屏幕亮度设置为: ${brightness}`);
        this.saveScreenBrightness(brightness);
    }

    // 退出账号
    onLogout(event: Event) {
        console.log("退出账号");
        // 这里可以添加退出账号的逻辑
    }

    // 保存背景音量
    saveBackgroundVolume(volume: number) {
        // 这里可以替换为保存到本地存储或服务器
        localStorage.setItem('backgroundVolume', volume.toString());
    }

    // 保存人物音量
    saveCharacterVolume(volume: number) {
        // 这里可以替换为保存到本地存储或服务器
        localStorage.setItem('characterVolume', volume.toString());
    }

    // 保存屏幕亮度
    saveScreenBrightness(brightness: number) {
        // 这里可以替换为保存到本地存储或服务器
        localStorage.setItem('screenBrightness', brightness.toString());
    }
}