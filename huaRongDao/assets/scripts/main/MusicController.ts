import { _decorator, Component, Node, AudioSource, Sprite, SpriteFrame, resources } from "cc";
import { SceneHistoryManager } from "../public/SceneHistoryManager";
const { ccclass, property } = _decorator;

@ccclass("MusicController")
export class MusicController extends Component {
    @property(AudioSource)
    private audioSource: AudioSource = null;

    @property({ type: Node })
    private musicButton: Node = null;

    @property({ type: String })
    private playIconPath: string = "";

    @property({ type: String })
    private pauseIconPath: string = "";


    private playIcon: SpriteFrame = null;
    private pauseIcon: SpriteFrame = null;

    onLoad() {
        if (!this.audioSource) {
            this.audioSource = this.getComponent(AudioSource);
        }

        if (this.musicButton) {
            this.musicButton.on(Node.EventType.TOUCH_END, this.toggleMusic, this);
        }

        this.loadIcons();
    }

    start() {
        this.playMusic();
        SceneHistoryManager.getInstance().pushScene("scene-main");
    }

    playMusic() {
        if (this.audioSource && !this.audioSource.playing) {
            this.audioSource.play();
            console.log("背景音乐播放中...");
        }
        this.updateButtonState();
    }

    pauseMusic() {
        if (this.audioSource && this.audioSource.playing) {
            this.audioSource.pause();
            console.log("背景音乐暂停...");
        }
        this.updateButtonState();
    }

    toggleMusic() {
        if (this.audioSource.playing) {
            this.pauseMusic();
        } else {
            this.playMusic();
        }
    }

    updateButtonState() {
        if (this.touchMusic && this.musicButton) {
            const sprite = this.musicButton.getComponent(Sprite);
            if (sprite) {
                sprite.spriteFrame = this.audioSource.playing ? this.playIcon : this.pauseIcon;
            }
        }
    }

    // 加载图标资源
    loadIcons() {
        // 加载播放图标
        resources.load(this.playIconPath, SpriteFrame, (err, spriteFrame) => {
            if (err) {
                console.error("加载播放图标失败：", err);
            } else {
                this.playIcon = spriteFrame;
                this.checkIconsLoaded(); // 检查图标是否加载完成
            }
        });

        // 加载暂停图标
        resources.load(this.pauseIconPath, SpriteFrame, (err, spriteFrame) => {
            if (err) {
                console.error("加载暂停图标失败：", err);
            } else {
                this.pauseIcon = spriteFrame;
                this.checkIconsLoaded(); // 检查图标是否加载完成
            }
        });
    }
    touchMusic() {
         // 播放音效
         if (this.audioSource) {
            this.audioSource.play();
        } else {
            console.error("音效组件未找到，无法播放音效。");
        }
    }
    // 检查图标是否加载完成
    checkIconsLoaded() {
        if (this.playIcon && this.pauseIcon) {
            console.log("所有图标加载完成，初始化按钮状态");
            this.updateButtonState(); // 初始化按钮状态
        }
    }
}