import { _decorator, Component, Node, Sprite, SpriteFrame, Vec3, EventTouch, Vec2, Script, size, UITransform, BoxCollider, Color, director, BoxCollider2D, Size, PhysicsSystem2D, EPhysics2DDrawFlags, AudioClip, AudioSource, resources, Label } from 'cc';
const { ccclass, property } = _decorator;
import { ChessBoard } from "./ChessBoard";
import { AudioManager } from '../public/AudioManager';
import { Timer } from '../game/Timer';

// 定义棋子类型
export enum ChessType {
    BIG = 'Big',         // 大棋子，2x2
    SMALL = 'Small',     // 小棋子，1x1
    HORIZONTAL = 'Horizontal', // 横棋子，2x1
    VERTICAL = 'Vertical'      // 竖棋子，1x2
}

// 棋子接口
interface Piece {
    id: string;          // 棋子的唯一标识
    type: ChessType;     // 棋子类型
    node: Node;          // 棋子节点
    x: number;           // 当前格子的横坐标
    y: number;           // 当前格子的纵坐标
    width: number;       // 占据的宽度（格子数）
    height: number;      // 占据的高度（格子数）
}

const chessConfig = [
    {
        type: ChessType.BIG,
        count: 1,
        position: new Vec2(0, 0),
        size: new Vec2(2, 2),
        sound: "caocao" // 曹操的音效
    },
    {
        type: ChessType.VERTICAL,
        count: 4,
        position: new Vec2(0, 0),
        size: new Vec2(1, 2),
        sound: "liubei" // 刘备的音效
    },
    {
        type: ChessType.HORIZONTAL,
        count: 1,
        position: new Vec2(0, 0),
        size: new Vec2(2, 1),
        sound: "guanyu" // 关羽的音效
    },
    {
        type: ChessType.SMALL,
        count: 4,
        position: new Vec2(0, 0),
        size: new Vec2(1, 1),
        sound: "sunquan" // 孙权的音效
    },
];
// 定义棋子的初始摆放位置配置
const customPlacementConfig = [
    {
        type: ChessType.BIG,
        size: new Vec2(2, 2),
        instances: [
            { positions: [10, 11, 14, 15] }, // 第一个大棋子放在序号为10, 11, 14, 15的格子
        ]
    },
    {
        type: ChessType.VERTICAL,
        size: new Vec2(1, 2),
        instances: [
            { positions: [1, 5] }, // 第一个竖棋子放在序号为1 ,5的格子
            { positions: [4, 8] }, // 第二个竖棋子放在序号为4 ,8的格子
            { positions: [9, 13] }, // 第三个竖棋子放在序号为9 ,13的格子
            { positions: [12, 16] }, // 第四个竖棋子放在序号为12 ,16的格子
        ]
    },
    {
        type: ChessType.HORIZONTAL,
        size: new Vec2(2, 1),
        instances: [
            { positions: [6, 7] }, // 第一个横棋子放在序号为6 ,7的格子        
        ]
    },
    {
        type: ChessType.SMALL,
        size: new Vec2(1, 1),
        instances: [
            { positions: [2] }, // 第一个小棋子放在序号为2的格子
            { positions: [3] }, // 第二个小棋子放在序号为3的格子
            { positions: [17] }, // 第三个小棋子放在序号为17的格子
            { positions: [20] }, // 第四个小棋子放在序号为20的格子
        ]
    },
];

@ccclass('Chess')
export class Chess extends Component {
    @property(SpriteFrame)
    private bigChessSprite: SpriteFrame | null = null; // 占4格的棋子默认图片
    @property(SpriteFrame)
    private smallChessSprite: SpriteFrame | null = null; // 占1格的棋子默认图片
    @property(SpriteFrame)
    private verticalChessSprite: SpriteFrame | null = null; // 竖着占两格的棋子默认图片
    @property(SpriteFrame)
    private horizontalChessSprite: SpriteFrame | null = null; // 横着占两格的棋子默认图片

    @property(AudioSource)
    audioSource: AudioSource = null!;

    @property({ type: AudioClip }) // 引入 AudioClip 类型
    private moveSound: AudioClip | null = null; // 滑动音效

    @property({ type: Node })
    victoryPanel: Node | null = null; // 胜利面板节点

    @property({ type: Label })
    spendCountLabel: Label | null = null; // 成功所用次数 Label

    @property({ type: Label })
    spendTimeLabel: Label | null = null; // 成功所用时间 Label

    @property({ type: Timer })
    timer: Timer | null = null; // 计时器组件引用

    @property(Node)
    maskNode: Node | null = null; // 遮罩节点

    @property(Node)
    panelNode: Node | null = null; // 面板节点


    // 棋盘引用
    private chessBoard: ChessBoard | null = null;

    // 触摸事件相关变量
    private pieceSize: Vec2 = new Vec2(1, 1);
    private touchStartPos: Vec3 = new Vec3(); // 触摸开始时的棋子位置 局部坐标 
    private touchLocalPos: Vec3 = new Vec3(); // 将触摸点从世界坐标转换为棋盘节点的局部坐标（相对于父节点）
    private currentPiece: Node | null = null; // 当前被拖动的棋子
    private speedFactor = 5; // 滑动速度因子，可以根据需要调整
    private spendCount: number = 0; // 成功次数
    private spendTime: number = 0; // 成功所用的时间（秒）

    start() {
        // 获取 ChessBoard 实例
        const chessBoardNode = this.node.parent?.getChildByName("ChessBoard");
        if (chessBoardNode) {
            this.chessBoard = chessBoardNode.getComponent(ChessBoard);
            if (!this.chessBoard) {
                console.error("ChessBoard脚本没有找到");
            }
        } else {
            console.error("ChessBoard节点没有找到!");
        }

        // 启用物理系统
        PhysicsSystem2D.instance.enable = true;
        // 启用碰撞体边界的调试绘制
        PhysicsSystem2D.instance.debugDrawFlags = EPhysics2DDrawFlags.All;


        // 从本地存储加载数据
        // this.loadFromLocalStorage();

        // 随机放置棋子
        // this.randomlyPlacePieces(chessConfig, 5, 4);

        // 使用自定义摆放配置放置棋子
        // 获取传递的关卡数据和棋子配置
        const currentLevel = (window as any).currentLevel;
        const currentLevelConfig = (window as any).currentLevelConfig;

        if (currentLevel !== undefined && currentLevelConfig !== undefined) {
            console.log(`当前关卡: ${currentLevel}`);
            console.log(`接受到的棋子配置:`, currentLevelConfig);

            // 在这里使用棋子配置来放置棋子
            this.placePiecesWithCustomConfig(currentLevelConfig);
        } else {
            console.error('未找到关卡数据或棋子配置！');
        }
        // this.placePiecesWithCustomConfig(customPlacementConfig);

        // 测试代码，打印棋盘信息
        this.chessBoard.gridMap.forEach((grid, index) => {
            console.log(`棋盘信息Grid Index ${index}: occupied = ${grid.occupied}`);
        });

        console.log(this.chessBoard.calculateOccupiedGrids(new Vec3(0, 50, 0), new Vec2(2, 2)))
        // // 创建棋子
        // chessConfig.forEach(config => {
        //     for (let i = 0; i < config.count; i++) {
        //         const Piece = this.createChessNode(config.type, config.position, config.size, i);
        //         console.log(`创建棋子: ID=chess${Piece.id}, 类型=${Piece.type}, 位置=(x=${Piece.x}, y=${Piece.y}), 宽度=${Piece.width}, 高度=${Piece.height}`);
        //     }
        // });
        // if (this.chessBoard) {
        //     const gridIndex = 1; // 假设我们要访问序号为 1 的格子
        //     if (this.chessBoard.gridMap.has(gridIndex)) {
        //         const grid = this.chessBoard.gridMap.get(gridIndex);
        //         console.log(`Grid Index ${gridIndex}:`);
        //         console.log(`  Node Position: ${grid.node.position}`);
        //         console.log(`  Range: minX=${grid.range.minX}, maxX=${grid.range.maxX}, minY=${grid.range.minY}, maxY=${grid.range.maxY}`);
        //         console.log(`  Occupied: ${grid.occupied}`);
        //     } else {
        //         console.log(`Grid Index ${gridIndex} does not exist.`);
        //     }
        // } else {
        //     console.error("ChessBoard实例未正确获取");
        // }  
    }

    /**
     * 根据自定义配置放置棋子
     * @param config 自定义摆放配置
     */
    private placePiecesWithCustomConfig(config: { type: ChessType, size: Vec2, instances: { positions: number[] }[] }[]) {
        this.node.removeAllChildren();
        for (const conf of config) {
            for (let i = 0; i < conf.instances.length; i++) {
                const instance = conf.instances[i];
                const positions = instance.positions;

                // 占用所有格子
                for (const position of positions) {
                    this.chessBoard.occupyPiece(position);
                }

                const chessNode = new Node(`chess${conf.type}_${i + 1}`);
                const sprite = chessNode.addComponent(Sprite);
                this.setChessSprite(chessNode, conf.type);

                // 音效组件
                const audioSource = chessNode.addComponent(AudioSource);
                const soundName = chessConfig.find(c => c.type === conf.type)?.sound;
                if (soundName) {
                    this.getSoundClip(soundName).then((clip) => {
                        audioSource.clip = clip || null;
                    });
                }

                // 计算包围盒
                const allRanges = positions
                    .map(index => this.chessBoard.getGridRange(index))
                    .filter(range => !!range);

                if (allRanges.length === 0) {
                    console.warn("无效的格子范围");
                    continue;
                }

                const minX = Math.min(...allRanges.map(r => r.minX));
                const maxX = Math.max(...allRanges.map(r => r.maxX));
                const minY = Math.min(...allRanges.map(r => r.minY));
                const maxY = Math.max(...allRanges.map(r => r.maxY));

                chessNode.setPosition(
                    (minX + maxX) / 2,
                    (minY + maxY) / 2,
                    0
                );

                this.node.addChild(chessNode);

                // 绑定事件
                chessNode.on(Node.EventType.TOUCH_START, this.onTouchStart, this);
                chessNode.on(Node.EventType.TOUCH_MOVE, this.onTouchMove, this);
                chessNode.on(Node.EventType.TOUCH_END, this.onTouchEnd, this);
            }
        }
    }

    /**
     * 根据格子序号获取棋子的初始位置
     * @param gridIndex 格子序号
     * @returns 棋子的初始位置
     */

    private getGridPosition(gridIndex: number): Vec2 {
        if (!this.chessBoard) {
            console.error("ChessBoard实例未正确获取");
            return new Vec2(0, 0);
        }

        // 获取格子的世界坐标
        const worldPos = this.chessBoard.getGridWorldPosition(gridIndex);
        // 转换为棋盘节点的局部坐标
        const localPos = this.node.parent!.getComponent(UITransform).convertToNodeSpaceAR(new Vec3(worldPos.x, worldPos.y, 0));

        return new Vec2(localPos.x, localPos.y);
    }
    /**
    * 随机放置棋子
    * @param config 棋子配置
    * @param rows 棋盘行数
    * @param cols 棋盘列数
    */
    private randomlyPlacePieces(config: { type: ChessType, count: number, size: Vec2 }[], rows: number, cols: number) {
        const maxAttempts = 20; // 每个棋子的最大尝试次数
        const maxRetries = 200; // 最大重试次数

        let retries = 0;
        let allPlaced = false;

        while (!allPlaced && retries < maxRetries) {
            allPlaced = true; // 假设所有棋子都能放置

            // 清空当前节点下的所有子节点
            this.node.removeAllChildren();

            for (const conf of config) {
                for (let i = 0; i < conf.count; i++) {
                    let placed = false;
                    let attempts = 0;

                    while (!placed && attempts < maxAttempts) {
                        // 随机选择一个格子序号索引（0-19）
                        let index = Math.floor(Math.random() * (rows * cols));
                        const [x, y] = this.indexToPosition(index, cols);

                        // 检查是否可以放置棋子
                        if (this.chessBoard.canPlaceChess(index + 1, conf.size)) {
                            // 占用格子
                            if (this.chessBoard.occupyGrid(index + 1, conf.size)) {
                                placed = true;

                                // 创建并设置棋子节点
                                const piece = this.createChessNode(conf.type, new Vec2(x, y), conf.size, i);
                                console.log(`创建棋子: ID=${piece.id}, 类型=${piece.type}, 位置=(x=${piece.x}, y=${piece.y}), 宽度=${piece.width}, 高度=${piece.height}`);
                            }
                        }
                        attempts++;
                    }

                    if (!placed) {
                        console.warn(`无法放置棋子: 类型=${conf.type}, 尝试次数=${attempts}`);
                        allPlaced = false; // 标记为失败
                        break; // 跳出当前棋子的循环
                    }
                }

                if (!allPlaced) {
                    break; // 跳出所有棋子的循环
                }
            }

            retries++;
        }

        if (!allPlaced) {
            console.error("无法放置所有棋子，达到最大重试次数");
        } else {
            console.log("所有棋子成功放置");
        }
    }

    /**
    * 将一维索引转换为二维坐标
    * @param index 一维索引
    * @param cols 棋盘列数
    * @returns [x, y] 二维坐标
    */
    indexToPosition(index: number, cols: number): [number, number] {
        const x = index % cols;
        const y = Math.floor(index / cols);
        return [x, y];
    }


    /**
     * 创建棋子节点
     * @param type 棋子类型
     * @param x 棋子的初始横坐标
     * @param y 棋子的初始纵坐标
     * @param index 棋子的索引（用于区分同类型的不同棋子）
     * @returns 返回创建的棋子对象
     */
    public createChessNode(type: ChessType, position: Vec2, size: Vec2, index: number): Piece {
        const chessNode = new Node(`chess${type}_${index + 1}`);
        const sprite = chessNode.addComponent(Sprite);

        // 设置棋子的初始图片
        this.setChessSprite(chessNode, type);

        // 添加音效组件
        const audioSource = chessNode.addComponent(AudioSource);
        const soundName = chessConfig.find(config => config.type === type)?.sound;
        if (soundName) {
            this.getSoundClip(soundName).then((clip) => {
                if (clip) {
                    audioSource.clip = clip;
                } else {
                    console.error(`音效资源加载失败: ${soundName}`);
                }
            });
        }

        // 设置棋子的初始位置
        this.setChessPosition(chessNode, position.x, position.y, size);

        // 添加碰撞体组件
        const collider = chessNode.addComponent(BoxCollider2D);

        // 设置碰撞体的大小
        collider.friction = 0;
        collider.size = new Size(size.x * this.chessBoard.boxSize.x, size.y * this.chessBoard.boxSize.y);

        console.log("碰撞体大小:", collider.size);

        // 将棋子节点添加到当前节点
        this.node.addChild(chessNode);

        // 绑定触摸事件到棋子节点
        chessNode.on(Node.EventType.TOUCH_START, this.onTouchStart, this);
        chessNode.on(Node.EventType.TOUCH_MOVE, this.onTouchMove, this);
        chessNode.on(Node.EventType.TOUCH_END, this.onTouchEnd, this);

        // 返回棋子对象
        return {
            id: `chess${type}_${index + 1}`, // 唯一标识
            type,
            node: chessNode,
            x: position.x,
            y: position.y,
            width: type === ChessType.BIG || type === ChessType.HORIZONTAL ? 2 : 1,
            height: type === ChessType.BIG || type === ChessType.VERTICAL ? 2 : 1
        };
    }

    private getSoundClip(soundName: string): Promise<AudioClip | null> {
        console.log(`获取音效资源: ${soundName}`);
        const soundPath = `music/people/${soundName}`; // 不需要扩展名
        return new Promise((resolve) => {
            resources.load(soundPath, AudioClip, (err, clip) => {
                if (err) {
                    console.error(`音效资源加载失败: ${soundPath}`, err);
                    resolve(null);
                } else {
                    console.log(`音效资源加载成功: ${soundPath}`);
                    resolve(clip);
                }
            });
        });
    }

    /**
     * 设置棋子的图片
     * @param chessNode 棋子节点
     * @param type 棋子类型
     */
    public setChessSprite(chessNode: Node, type: ChessType): void {
        const sprite = chessNode.getComponent(Sprite);
        if (!sprite) {
            console.error("节点未设置sprite组件!");
            return;
        }

        let spriteFrame: SpriteFrame | null = null;

        switch (type) {
            case ChessType.BIG:
                spriteFrame = this.bigChessSprite;
                break;
            case ChessType.SMALL:
                spriteFrame = this.smallChessSprite;
                break;
            case ChessType.HORIZONTAL:
                spriteFrame = this.horizontalChessSprite;
                break;
            case ChessType.VERTICAL:
                spriteFrame = this.verticalChessSprite;
                break;
            default:
                console.error(`棋子没有定义该类型: ${type}`);
        }

        if (!spriteFrame) {
            console.error(`该类型未设置图片属性: ${type}`);
            return;
        }

        sprite.spriteFrame = spriteFrame;
    }

    /**
     * 设置棋子的位置
     * @param chessNode 棋子节点
     * @param x 棋子的格子横坐标（从0开始）
     * @param y 棋子的格子纵坐标（从0开始）
     * @param size 棋子的尺寸（宽度和高度，单位为格子数）
     */
    private setChessPosition(chessNode: Node, x: number, y: number, size: Vec2) {
        if (!this.chessBoard) {
            console.error("ChessBoard实例未正确获取");
            return;
        }

        // 获取棋盘格子的起始位置和格子大小
        const firstCubeWorldPos = this.chessBoard.firstCubeWorldPos;
        const boxSize = this.chessBoard.boxSize;

        // 计算棋子的中心位置
        const centerX = firstCubeWorldPos.x + (x + size.x / 2) * boxSize.x;
        const centerY = firstCubeWorldPos.y - (y + size.y / 2) * boxSize.y;

        // 设置棋子的位置
        chessNode.setPosition(centerX - 50, centerY + 50, 0);
    }

    // 触摸开始
    private onTouchStart(event: EventTouch) {
        const touchPos = event.getUILocation(); // 获取触摸点的 UI 世界坐标
        const touchWorldPos = new Vec3(touchPos.x, touchPos.y, 0); // 转换为 Vec3
        const touchLocalPos = this.node.parent!.getComponent(UITransform).convertToNodeSpaceAR(touchWorldPos); // 将触摸点从世界坐标转换为棋盘局部坐标

        console.log("触摸点世界坐标：", touchWorldPos);
        console.log("触摸点局部坐标：", touchLocalPos);

        // 获取被触摸的棋子节点
        this.currentPiece = event.getCurrentTarget();
        console.log("被触摸的棋子节点位置：", this.currentPiece.position);

        this.pieceSize = new Vec2(this.currentPiece.getComponent(UITransform).width, this.currentPiece.getComponent(UITransform).height);
        console.log("棋子尺寸：", this.pieceSize);
        // 记录触摸开始时的棋子位置（局部坐标）和触摸点的局部坐标
        Vec3.copy(this.touchStartPos, this.currentPiece.position);
        Vec3.copy(this.touchLocalPos, touchLocalPos);

    }

    // 触摸移动
    private onTouchMove(event: EventTouch) {
        if (!this.currentPiece) return;  // 如果没有拖动的棋子，则返回
        const touchPos = event.getUILocation(); // 获取触摸点的 UI 世界坐标
        const touchWorldPos = new Vec3(touchPos.x, touchPos.y, 0); // 转换为 Vec3
        const touchLocalPos = this.node.parent!.getComponent(UITransform).convertToNodeSpaceAR(touchWorldPos); // 将触摸点从世界坐标转换为棋盘局部坐标

        // 计算触摸点的移动距离
        const deltaX = touchLocalPos.x - this.touchLocalPos.x;
        const deltaY = touchLocalPos.y - this.touchLocalPos.y;

        // 判断主要移动方向（水平或垂直）
        let newX = this.touchStartPos.x;
        let newY = this.touchStartPos.y;

        if (Math.abs(deltaX) > Math.abs(deltaY)) {
            // 主要水平移动
            newX = this.touchStartPos.x + deltaX;
        } else {
            // 主要垂直移动
            newY = this.touchStartPos.y + deltaY;
        }

        // 计算移动的总距离
        const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);

        // 如果移动距离超过200，则限制移动范围
        if (distance > 200) {
            const ratio = 200 / distance; // 计算限制比例
            if (Math.abs(deltaX) > Math.abs(deltaY)) {
                // 限制水平移动
                newX = this.touchStartPos.x + deltaX * ratio;
                newY = this.touchStartPos.y; // 保持垂直位置不变
            } else {
                // 限制垂直移动
                newX = this.touchStartPos.x; // 保持水平位置不变
                newY = this.touchStartPos.y + deltaY * ratio;
            }
        }

        // 更新棋子位置（局部坐标）
        this.currentPiece.setPosition(newX, newY, 0);
    }

    private onTouchEnd(event: EventTouch) {
        // 如果没有拖动的棋子，则返回
        if (!this.currentPiece) {
            console.warn("没有选中棋子");
            return;
        }

        // 转换为棋子格子数
        let pieceGrid = new Vec2(this.pieceSize.x / this.chessBoard.boxSize.x, this.pieceSize.y / this.chessBoard.boxSize.y);

        const touchPos = event.getUILocation(); // 获取触摸点的 UI 世界坐标
        const touchWorldPos = new Vec3(touchPos.x, touchPos.y, 0); // 转换为 Vec3
        const touchLocalPos = this.node.parent!.getComponent(UITransform).convertToNodeSpaceAR(touchWorldPos); // 将触摸点从世界坐标转换为棋盘局部坐标
        console.log("触摸最后的位置" + this.currentPiece.position)
        console.log("棋子最开始的位置：" + this.touchStartPos.x + "+" + this.touchStartPos.y)
        console.log("棋子占据的格子数" + pieceGrid)

        // 计算棋子占据的格子序号列表
        const pieceGrids = this.chessBoard.calculateOccupiedGrids(this.touchStartPos, pieceGrid);
        console.log("棋子最开始占用的格子列表: ", pieceGrids);
        // 计算移动的格子偏移量（基于100x100的格子）
        const deltaGridX = Math.round((touchLocalPos.x - this.touchStartPos.x) / 100);
        const deltaGridY = Math.round((touchLocalPos.y - this.touchStartPos.y) / 100);
        console.log("移动的格子偏移量:x" + deltaGridX + "y:" + deltaGridY)
        // 获取候选移动方向的目标格子
        const neighborGrids = this.findNeighborAvailableGrids(
            pieceGrids,
            new Vec2(deltaGridX, deltaGridY),
            pieceGrid
        );
        console.log("候选移动方向的目标格子序号列表:", neighborGrids);
        // 添加空数组保护
        if (neighborGrids.length === 0) {
            console.warn("无可移动到的邻近格子");
            this.currentPiece.setPosition(this.touchStartPos);
            this.currentPiece = null;
            return;
        }
        // 在移动验证逻辑中增加批量检查

        const isValidMove = neighborGrids.every(targetIndex => {
            return (
                this.chessBoard.isGridInRange(targetIndex, this.chessBoard.rows, this.chessBoard.cols) // 检查是否在棋盘范围内
            );
        });
        console.log("移动验证结果原格子序号: ", pieceGrids)
        if (isValidMove && neighborGrids.every(n => typeof n === 'number')) {
            // 执行格子序号的交换和吸附操作
            this.chessBoard.releaseOccupiedGrids(pieceGrids) // 释放原位置
            const allValid = neighborGrids.every(gridIndex => {
                return (
                    this.chessBoard.isGridOccupied(gridIndex) // 检查所有序号是否可用
                );
            });
            if (allValid) {
                neighborGrids.forEach(index => this.chessBoard.occupyPiece(index)); // 占用新位置
                this.snapToMultiGrids(neighborGrids); // 吸附到新中心

                // 播放音效
                const audioSource = this.currentPiece.getComponent(AudioSource);
                if (audioSource && audioSource.clip) {
                    audioSource.play();
                } else {
                    console.error("音效组件未正确加载");
                }

                this.spendCount++; // 移动成功计数增加

                // 检查是否满足胜利条件
                // 检查是否满足胜利条件
                if (this.checkVictoryCondition(neighborGrids) && this.currentPiece.name === "chessBig_1") {
                    console.log("恭喜！你赢得了游戏！");
                    this.showVictoryPanel(); // 显示胜利界面
                } else {
                    console.log("移动的棋子是：" + this.currentPiece.name);
                }

                this.currentPiece = null;
            }
            else {
                console.warn("部分格子序号未释放");
                this.currentPiece.setPosition(this.touchStartPos);
                this.currentPiece = null;
            }
        } else {
            console.log("存在非法目标格子，移动被拒绝");
            this.currentPiece.setPosition(this.touchStartPos);
            this.currentPiece = null;
        }
        this.currentPiece = null;
    }


    /**
     * 棋子移动到后的格子序号列表
     * @param pieceGrids 棋子原本占据的格子序号列表
     * @param delta 移动偏移格子数（如[1,0]表示向右1格,[0,1]表示向上1格）
     * @param chessSize 棋子占据格子数
     * @returns 移动后格子序号列表
     */
    findNeighborAvailableGrids(pieceGrids: number[], delta: Vec2, piece: Vec2): number[] {
        // 深拷贝原始数组
        let newGrids = [...pieceGrids]; // 拷贝原数组
        const { rows, cols } = this.chessBoard; // 棋盘的行数和列数
        const { x: deltaX, y: deltaY } = delta; // 移动的格子偏移量
        const { x: width, y: height } = piece; // 棋子的宽度和高度（格子数）

        switch (newGrids.length) {
            case 1:
                if (deltaX !== 0 && deltaY === 0) {
                    newGrids[0] += deltaX;
                    if (this.chessBoard.isGridInRange(newGrids[0], rows, cols)) {
                        if (this.chessBoard.isGridOccupied(newGrids[0])) {
                            return [newGrids[0]];
                        }
                    }
                }
                else if (deltaX === 0 && deltaY !== 0) {
                    newGrids[0] = newGrids[0] - deltaY * 4;
                    if (this.chessBoard.isGridInRange(newGrids[0], rows, cols)) {
                        if (this.chessBoard.isGridOccupied(newGrids[0])) {
                            return [newGrids[0]];
                        }
                    }
                }
                else {
                    return [];
                }
            case 2:
                if (width === 1 && height === 2) {
                    if (deltaX === 0 && deltaY !== 0) {
                        if (deltaY > 0) {
                            newGrids = this.keepMinValues(newGrids);
                            if (Math.abs(deltaY) === 1) {
                                const newNumber = newGrids[0] - 4;
                                if (this.chessBoard.isGridInRange(newNumber, rows, cols) && this.chessBoard.isGridOccupied(newNumber)) {
                                    newGrids.push(newNumber);
                                    return newGrids;
                                }
                                else {
                                    return [];
                                }
                            } else if (Math.abs(deltaY) === 2) {
                                const tempNumber = newGrids[0];
                                newGrids = [];
                                if (this.chessBoard.isGridOccupied(tempNumber - 4) && this.chessBoard.isGridInRange(tempNumber - 4, rows, cols)) {
                                    newGrids.push(tempNumber - 4);
                                }
                                if (this.chessBoard.isGridInRange(tempNumber - 8, rows, cols) && this.chessBoard.isGridOccupied(tempNumber - 8)) {
                                    newGrids.push(tempNumber - 8);
                                    return newGrids;
                                }
                                return [];
                            }
                        } else if (deltaY < 0) {
                            newGrids = this.keepMaxValues(newGrids);
                            if (Math.abs(deltaY) === 1) {
                                const newNumber = newGrids[0] + 4;
                                if (this.chessBoard.isGridInRange(newNumber, rows, cols) && this.chessBoard.isGridOccupied(newNumber)) {
                                    newGrids.push(newNumber);
                                    return newGrids;
                                }
                                else {
                                    return [];
                                }
                            } else if (Math.abs(deltaY) === 2) {
                                const tempNumber = newGrids[0];
                                newGrids = [];
                                if (this.chessBoard.isGridInRange(tempNumber + 4, rows, cols) && this.chessBoard.isGridOccupied(tempNumber + 4)) {
                                    newGrids.push(tempNumber + 4);
                                }
                                if (this.chessBoard.isGridInRange(tempNumber + 8, rows, cols) && this.chessBoard.isGridOccupied(tempNumber + 8)) {
                                    newGrids.push(tempNumber + 8);
                                    return newGrids;
                                }
                                return [];
                            }
                        }
                    } else if (deltaX !== 0 && deltaY === 0) {
                        newGrids = newGrids.map(num => {
                            const newNumber = num + deltaX;
                            if (this.chessBoard.isGridInRange(newNumber, rows, cols) && this.chessBoard.isGridOccupied(newNumber)) {
                                return newNumber;
                            } else {
                                return null;
                            }
                        });
                        return newGrids;
                    }
                    else {
                        return [];
                    }
                }
                else if (width === 2 && height === 1) {
                    if (deltaX === 0 && deltaY !== 0) {
                        const addPieceGrids = (arr: number[]) => {
                            arr.forEach((_, index, array) => {
                                array[index] -= deltaY * 4;
                            });
                        };
                        addPieceGrids(newGrids);
                        // 检查每个新位置是否合法
                        const allValid = newGrids.every(gridIndex => {
                            return this.chessBoard.isGridInRange(gridIndex, rows, cols) && this.chessBoard.isGridOccupied(gridIndex);
                        });
                        if (allValid) {
                            return newGrids;
                        } else {
                            return [];
                        }
                    }
                    else if (deltaX !== 0 && deltaY === 0) {
                        if (Math.abs(deltaX) === 1) {
                            if (deltaX > 0) {
                                newGrids = this.keepMaxValues(newGrids);
                                const newNumber = newGrids[0] + 1;
                                if (this.chessBoard.isGridInRange(newNumber, rows, cols) && this.chessBoard.isGridOccupied(newNumber)) {
                                    newGrids.push(newNumber);
                                    return newGrids;
                                }
                                else {
                                    return [];
                                }
                            } else if (deltaX < 0) {
                                newGrids = this.keepMinValues(newGrids);
                                const newNumber = newGrids[0] - 1;
                                if (this.chessBoard.isGridInRange(newNumber, rows, cols) && this.chessBoard.isGridOccupied(newNumber)) {
                                    newGrids.push(newNumber);
                                    return newGrids;
                                }
                                else {
                                    return [];
                                }
                            }
                            else {
                                return [];
                            }
                        }
                        else if (Math.abs(deltaX) === 2) {
                            const addNumberInPlace = (arr: number[]) => {
                                arr.forEach((_, index, array) => {
                                    array[index] += deltaX;
                                });
                            };
                            addNumberInPlace(newGrids);
                            const allValid = newGrids.every(gridIndex => {
                                return this.chessBoard.isGridInRange(gridIndex, rows, cols) && this.chessBoard.isGridOccupied(gridIndex);
                            });
                            if (allValid) {
                                return newGrids;
                            } else {
                                return [];
                            }
                        }
                        else {
                            return [];
                        }
                    }
                    else {
                        return [];
                    }
                }
                else {
                    return [];
                }
            case 4:
                if (deltaX > 0 || deltaY < 0) {
                    newGrids = this.keepMaxValues(newGrids);
                    let tempdelta = 0;
                    if (deltaX === 0) {
                        tempdelta = deltaY;
                    }
                    else if (deltaY === 0) {
                        tempdelta = deltaX;
                    }
                    else {
                        return [];
                    }
                    const newNumber = newGrids[0] + tempdelta;
                    console.log("右下;" + newGrids)
                    const newNumber2 = newGrids[0] - tempdelta * 4;
                    const newNumber3 = newGrids[0] - tempdelta * 4 + tempdelta;
                    newGrids.push(newNumber);
                    newGrids.push(newNumber2);
                    console.log("右下2;" + newGrids)
                    newGrids.push(newNumber3);
                    console.log("右下3;" + newGrids)
                    return newGrids;
                }
                else if (deltaX < 0 || deltaY > 0) {
                    newGrids = this.keepMinValues(newGrids);
                    console.log("左上;" + newGrids);
                    let tempdelta = 0;
                    if (deltaX === 0) {
                        tempdelta = deltaY;
                        console.log("tempdelta" + tempdelta)
                    }
                    else if (deltaY === 0) {
                        tempdelta = deltaX;
                        console.log("tempdelta" + tempdelta)
                    }
                    else {
                        return [];
                    }
                    const newNumber = newGrids[0] + tempdelta;
                    const newNumber2 = newGrids[0] - tempdelta * 4;
                    const newNumber3 = newGrids[0] - tempdelta * 4 + tempdelta;
                    newGrids.push(newNumber);
                    console.log("左上1;" + newGrids);
                    newGrids.push(newNumber2);
                    console.log("左上2;" + newGrids);
                    newGrids.push(newNumber3);
                    console.log("左上3;" + newGrids);
                    return newGrids;
                }
            default:
                return [];
        }
    }

    // 保留唯一最大值
    private keepMaxValues(arr: number[]): number[] {
        const max = Math.max(...arr);
        return arr.indexOf(max) === arr.lastIndexOf(max)
            ? [max]
            : [max];
    }

    // 保留唯一最小值
    private keepMinValues(arr: number[]): number[] {
        const min = Math.min(...arr);
        return arr.indexOf(min) === arr.lastIndexOf(min)
            ? [min]
            : [min];
    }

    /**
     * 将棋子吸附到多个占据格子的共同中心
     * @param gridIndices 目标格子序号数组
     */
    private snapToMultiGrids(gridIndices: number[]) {
        // 1. 收集所有格子的边界坐标
        const allRanges = gridIndices
            .map(index => this.chessBoard.getGridRange(index))
            .filter(range => !!range); // 过滤无效格子

        if (allRanges.length === 0) {
            console.warn("没有有效的格子范围");
            return;
        }

        // 2. 计算整体包围盒
        const minX = Math.min(...allRanges.map(r => r.minX));
        const maxX = Math.max(...allRanges.map(r => r.maxX));
        const minY = Math.min(...allRanges.map(r => r.minY));
        const maxY = Math.max(...allRanges.map(r => r.maxY));

        // 3. 计算共同中心点
        const centerX = (minX + maxX) / 2;
        const centerY = (minY + maxY) / 2;

        // 4. 设置棋子位置
        this.currentPiece.setPosition(centerX, centerY, 0);
        console.log(`棋子已吸附到 ${gridIndices.length} 个格子的共同中心`);
    }

    /**
     * 检查是否满足胜利条件
     */
    public checkVictoryCondition(newGrids: number[]): boolean {
        // 胜利条件：大棋子占据 14, 15, 18, 19 的格子序号
        const targetGrids = [14, 15, 18, 19];

        // 检查数组长度是否相同
        if (newGrids.length !== targetGrids.length) {
            return false;
        }

        // 对两个数组排序
        const sortedNewGrids = [...newGrids].sort((a, b) => a - b);
        const sortedTargetGrids = [...targetGrids].sort((a, b) => a - b);

        // 逐个比较排序后的数组
        for (let i = 0; i < sortedNewGrids.length; i++) {
            if (sortedNewGrids[i] !== sortedTargetGrids[i]) {
                return false;
            }
        }

        this.spendTime = Math.floor(this.timer.elapsedTime); // 记录成功所用的时间

        // 更新 Label
        this.updateLabels();

        // 保存到本地存储
        this.saveToLocalStorage();

        return true;
    }

    // 更新 Label 显示成功次数和成功时间
    private updateLabels() {
        if (this.spendCountLabel) {
            this.spendCountLabel.string = `步数: ${this.spendCount}`;
        }

        if (this.spendTimeLabel) {
            this.spendTimeLabel.string = `用时: ${this.spendTime}秒`;
        }
    }

    // 保存数据到本地存储
    private saveToLocalStorage() {
        // 保存成功次数
        const storedSuccessCount = parseInt(localStorage.getItem('spendCount') || '0');
        localStorage.setItem('spendCount', (storedSuccessCount + 1).toString());

        // 保存成功时间
        const storedSuccessTimes = JSON.parse(localStorage.getItem('spendTimes') || '[]');
        storedSuccessTimes.push(this.spendTime);
        localStorage.setItem('spendTimes', JSON.stringify(storedSuccessTimes));

        console.log("数据已保存到本地存储");
    }

    // 加载本地存储的数据
    private loadFromLocalStorage() {
        // 加载成功次数
        const storedSuccessCount = localStorage.getItem('successCount');
        if (storedSuccessCount) {
            this.spendCount = parseInt(storedSuccessCount);
        }

        // 加载成功时间列表
        const storedSuccessTimes = localStorage.getItem('successTimes');
        if (storedSuccessTimes) {
            const times = JSON.parse(storedSuccessTimes);
            if (times.length > 0) {
                // 如果有多个时间，可以选择最近的一次
                this.spendTime = times[times.length - 1];
            }
        }

        // 更新 Label
        this.updateLabels();
    }


    /**
    * 显示胜利界面
    */
    private showVictoryPanel() {
        if (this.victoryPanel) {
            this.victoryPanel.active = true; // 显示胜利界面

            // 停止名称为 "Canvas" 的节点及其子节点下的所有音效
            AudioManager.stopAudiosByNodeName("Canvas");

            // 播放胜利音效
            if (this.audioSource) {
                this.audioSource.play();
            }

            // 添加胜利动画（例如淡入效果）
            this.scheduleOnce(() => {
                // 在这里添加动画逻辑
            }, 0.1);

            // 创建遮罩层
            this.maskNode.active = true; // 显示遮罩层，防止用户再次触发操作
             // 添加触摸事件监听器到遮罩层
             this.maskNode.on(Node.EventType.TOUCH_START, (event: EventTouch) => {
               return true; // 阻止事件冒泡，防止穿透到其他节点
            });
        }
    }
}