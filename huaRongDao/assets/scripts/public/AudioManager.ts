import { _decorator, Node, director, AudioSource } from 'cc';
const { ccclass } = _decorator;

@ccclass('AudioManager')
export class AudioManager {
    /**
     * 通过节点名称关闭该节点下的音效
     * @param nodeName 要查找的节点名称
     */
    public static stopAudiosByNodeName(nodeName: string) {
        const scene = director.getScene();
        if (scene) {
            // 查找指定名称的节点
            const targetNode = this.findNodeByName(scene, nodeName);
            if (targetNode) {
                // 停止该节点及其子节点下的所有音效
                this.stopAllAudiosInNode(targetNode);
            } else {
                console.log(`未找到名称为 ${nodeName} 的节点`);
            }
        }
    }

    /**
     * 继续播放背景音乐
     */
    public static playBackgroundMusic() {
        const scene = director.getScene();
        if (scene) {
            // 查找背景音乐节点
            const backgroundMusicNode = this.findNodeByName(scene, "music");
            if (backgroundMusicNode) {
                // 获取背景音乐的 AudioSource 组件
                const audioSource = backgroundMusicNode.getComponent(AudioSource);
                if (audioSource) {
                    // 播放背景音乐
                    audioSource.play();
                } else {
                    console.log("未找到背景音乐的 AudioSource 组件");
                }
            } else {
                console.log("未找到背景音乐节点");
            }
        }
    }

    /**
     * 递归查找指定名称的节点
     * @param parentNode 父节点
     * @param nodeName 要查找的节点名称
     * @returns 找到的节点或 null
     */
    private static findNodeByName(parentNode: Node, nodeName: string): Node | null {
        if (parentNode.name === nodeName) {
            return parentNode;
        }

        for (const child of parentNode.children) {
            const foundNode = this.findNodeByName(child, nodeName);
            if (foundNode) {
                return foundNode;
            }
        }

        return null;
    }

    /**
     * 停止指定节点及其子节点下的所有音效
     * @param node 要操作的节点
     */
    private static stopAllAudiosInNode(node: Node) {
        // 停止当前节点上的所有音效
        const audioSources = node.getComponents(AudioSource);
        for (const audioSource of audioSources) {
            audioSource.stop();
        }

        // 递归停止子节点上的音效
        for (const child of node.children) {
            this.stopAllAudiosInNode(child);
        }
    }
}