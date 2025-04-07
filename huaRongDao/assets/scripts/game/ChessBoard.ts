import { _decorator, Component, Node, Sprite, SpriteFrame, Vec3, Vec2 } from 'cc';
const { ccclass, property } = _decorator;

@ccclass('ChessBoard')
export class ChessBoard extends Component {
    @property(SpriteFrame)
    private chessBoardSpriteFrame: SpriteFrame | null = null;

    // 棋盘的行数和列数
    public rows = 5;
    public cols = 4;

    // 每个格子的大小
    public boxSize = new Vec3(100, 100, 0);

    // 第一个格子的坐标位置，以父节点(0,0)为起始点
    public firstCubeWorldPos = new Vec3(-150, 200, 0);

    // 格子序号和范围的映射
    public gridMap: Map<number, { node: Node; range: { minX: number; maxX: number; minY: number; maxY: number }; occupied: boolean }> = new Map();

    // 添加出口位置
    public exitGridIndex: number = 10; // 假设出口在序号为10的格子


    start() {
        this.createChessBoard();
        // this.canPlaceChess(1, new Vec2(1, 2));
        // this.occupyGrid(14, new Vec2(1, 2));
        // 获取格子序号占用信息
        // this.gridMap.forEach((grid, index) => {
        //     console.log(`Grid Index ${index}: occupied = ${grid.occupied}`);
        // });
        // const localGridIndex = this.locatePosToGridIndex(new Vec3(100, -150, 0)); // 示例本地坐标为15序号的格子位置

        // console.log(`对ewqrewrqw应的格子序号为: ${localGridIndex}`);
    }

    // 检查棋子是否到达出口
    public isPieceAtExit(gridIndex: number): boolean {
        return gridIndex === this.exitGridIndex;
    }

    // 占据某个格子
    private createChessBoard() {
        let gridIndex = 1; // 格子序号从1开始

        for (let i = 0; i < this.rows; ++i) {
            for (let j = 0; j < this.cols; j++) {
                const cube = new Node(`cube${i + 1}_${j + 1}`);
                const sprite = cube.addComponent(Sprite);
                sprite.spriteFrame = this.chessBoardSpriteFrame;

                // 计算当前格子的世界坐标
                const worldX = this.firstCubeWorldPos.x + j * this.boxSize.x;
                const worldY = this.firstCubeWorldPos.y - i * this.boxSize.y;

                // 设置格子的坐标位置
                cube.setPosition(worldX, worldY, 0);

                // 为每个格子定义范围
                const range = {
                    minX: worldX - this.boxSize.x / 2,
                    maxX: worldX + this.boxSize.x / 2,
                    minY: worldY - this.boxSize.y / 2,
                    maxY: worldY + this.boxSize.y / 2,
                };

                // 将格子及其范围存储到映射中
                this.gridMap.set(gridIndex, { node: cube, range, occupied: false });

                // 将格子添加到棋盘节点
                this.node.addChild(cube);

                // 序号递增
                gridIndex++;
            }
        }

        console.log("棋盘创建完成！", this.gridMap);
    }

    /**
     * 获取某个序号的格子范围
     * @param gridIndex 格子序号
     * @returns 格子范围 { minX, maxX, minY, maxY } 或 null（如果序号无效）
     */
    public getGridRange(gridIndex: number): { minX: number; maxX: number; minY: number; maxY: number } | null {
        const grid = this.gridMap.get(gridIndex);
        return grid ? grid.range : null;
    }

    /**
     * 检查棋子是否可以放置在某个序号的格子上
     * @param gridIndex 格子序号
     * @param chessSize 棋子尺寸（宽和高，单位为格子数）
     * @returns 是否可以放置
     */
    public canPlaceChess(gridIndex: number, chessSize: Vec2): boolean {
        const grid = this.gridMap.get(gridIndex);
        if (!grid || grid.occupied) {
            // console.log("对应序号不存在或已被占用")
            return false; // 格子不存在或已被占用
        }

        // 检查棋子是否超出棋盘边界
        const col = (gridIndex - 1) % this.cols;
        const row = Math.floor((gridIndex - 1) / this.cols);
        console.log("占用的格子序号为：")
        for (let i = 0; i < chessSize.y; i++) {
            for (let j = 0; j < chessSize.x; j++) {
                const adjacentCol = col + j;
                const adjacentRow = row + i;

                if (adjacentCol < 0 || adjacentCol >= this.cols || adjacentRow < 0 || adjacentRow >= this.rows) {
                    // console.log("使用的序号超出棋盘范围")
                    return false; // 超出棋盘范围
                }
                const adjacentIndex = adjacentRow * this.cols + adjacentCol + 1;
                if (this.gridMap.get(adjacentIndex)?.occupied) {
                    // console.log("使用的序号已被占用")
                    return false; // 相邻格子已被占用
                }
                console.log(adjacentIndex)//占用的格子序号
            }
        }
        return true;
    }

    /**
     * 占用某个序号的格子
     * @param gridIndex 格子序号
     * @param chessSize 棋子尺寸（宽和高，单位为格子数）
     * @returns 成功时返回成功信息，失败时返回失败原因
     */
    public occupyGrid(gridIndex: number, chessSize: Vec2): boolean {
        const grid = this.gridMap.get(gridIndex);
        if (!grid) {
            // console.log(`失败:格子序号${gridIndex}没有找到!`)
            return false; // 格子不存在
        }

        // 获取当前格子的行列位置
        const col = (gridIndex - 1) % this.cols;
        const row = Math.floor((gridIndex - 1) / this.cols);

        // 遍历棋子覆盖的所有格子
        for (let i = 0; i < chessSize.y; i++) {
            for (let j = 0; j < chessSize.x; j++) {
                const targetCol = col + j;
                const targetRow = row + i;

                // 计算目标格子的序号
                const targetIndex = targetRow * this.cols + targetCol + 1;

                // 标记目标格子为已占用
                const targetGrid = this.gridMap.get(targetIndex);
                if (targetGrid) {
                    targetGrid.occupied = true;
                } else {
                    // console.log(`失败:格子序号${targetIndex}没有找到!`)
                    return false;
                }
            }
        }
        // console.log(`成功占用序号 ${gridIndex} 的格子。`)
        return true;
    }


    /**
     * 将棋子本地坐标转换为棋盘格子序号
     * @param localPos 棋子的本地坐标（相对于棋盘节点）
     * @returns 格子序号（从1开始，越界返回-1）
     */
    private locateLocalPosToGridIndex(localPos: Vec3): number {
        // 计算相对于棋盘第一个格子的中心坐标的偏移量
        const deltaX = localPos.x - this.firstCubeWorldPos.x;
        const deltaY = this.firstCubeWorldPos.y - localPos.y; // Y轴向下故用减法

        // 计算列号和行号（基于格子尺寸100x100）
        const col = Math.floor(deltaX / this.boxSize.x);
        const row = Math.floor(deltaY / this.boxSize.y);

        // 边界检查
        if (col < 0 || col >= this.cols || row < 0 || row >= this.rows) {
            return -1; // 越界返回-1
        }

        // 格子序号 = 行号 * 列数 + 列号 + 1
        return row * this.cols + col + 1;
    }

    /**
     * 计算棋子占据的格子序号
     * @param position 棋子的本地坐标（中心锚点）
     * @param chessSize 棋子的尺寸（如2x2表示占4格）
     * @returns 占据的格子序号列表
     */
    public calculateOccupiedGrids(position: Vec3, chessSize: Vec2): number[] {
        const occupiedGrids: number[] = [];

        // 步骤1: 获取中心点所在格子序号
        const gridIndex = this.locateLocalPosToGridIndex(position);
        if (gridIndex === -1) return []; // 越界直接返回空

        // 步骤2: 计算中心行列
        const centerCol = (gridIndex - 1) % this.cols;
        const centerRow = Math.floor((gridIndex - 1) / this.cols);

        // 步骤3: 计算覆盖的行列范围
        const startCol = centerCol - Math.floor((chessSize.x - 1) / 2);
        const endCol = centerCol + Math.floor(chessSize.x / 2);
        const startRow = centerRow - Math.floor((chessSize.y - 1) / 2);
        const endRow = centerRow + Math.floor(chessSize.y / 2);

        // 步骤4: 遍历所有行列并收集合法序号
        for (let row = startRow; row <= endRow; row++) {
            for (let col = startCol; col <= endCol; col++) {
                if (col >= 0 && col < this.cols && row >= 0 && row < this.rows) {
                    const index = row * this.cols + col + 1;
                    occupiedGrids.push(index);
                }
            }
        }

        return occupiedGrids;
    }

    /**
     * 判断某个格子是否被占用
     * @param gridIndex 格子序号
     * @returns 是否被占用
     */
    public isGridOccupied(gridIndex: number): boolean {
        const grid = this.gridMap.get(gridIndex);
        return grid ? !grid.occupied : false;
    }

    // 检查目标格子是否在棋盘范围内
    public isGridInRange(gridIndex: number, rows: number, cols: number): boolean {
        return gridIndex >= 1 && gridIndex <= rows * cols;
    }

    /**
     * 占据某个格子并标记为占用
     * @param gridIndex 格子序号
     * @param pieceSize 棋子尺寸
     * @returns 是否成功占据
     */
    public occupyPiece(gridIndex: number): boolean {
        const grid = this.gridMap.get(gridIndex);
        if (!grid || grid.occupied) return false; // 无效或已被占用
        // 标记为占用
        grid.occupied = true;
        this.gridMap.set(gridIndex, grid);
        console.log(`格子 ${gridIndex} 已被占用。`);
        return true;
    }


    // 释放格子序号
    public releaseOccupiedGrids(occupiedGrids: number[]): void {
        console.log("113412431243" + occupiedGrids)
        occupiedGrids.forEach(gridIndex => {
            const grid = this.gridMap.get(gridIndex);
            if (grid) {
                grid.occupied = false;
                console.log(`已释放格子 ${gridIndex}`);
            }
        });
    }


    //  获取格子的世界坐标位置
    public getGridWorldPosition(gridIndex: number): Vec3 {
        const col = (gridIndex - 1) % this.cols;
        const row = Math.floor((gridIndex - 1) / this.cols);
        const x = this.firstCubeWorldPos.x + col * this.boxSize.x;
        const y = this.firstCubeWorldPos.y - row * this.boxSize.y;
        return new Vec3(x, y, 0);
    }
}