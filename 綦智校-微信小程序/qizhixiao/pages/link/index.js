// pages/link/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    animationData: {},
    currentFrame: '/upload/1.png',
    frameIndex: 0,
    frameCount: 10,
    frameDuration: 100,
    x: 0,
    y: 0,
    dialog: null,
    dialogStyle: '',
    isDialogShowing: false,
    petDialogs: [
      "你好，主人！",
      "今天天气真好啊！",
      "我饿了，可以给我点吃的吗？",
      "我好开心！",
      "我们出去玩吧！"
    ],
    startX: 0,
    startY: 0,
    startTime: 0,
  },

  startAnimation: function() {
    const that = this;
    const animation = wx.createAnimation({
      duration: this.data.frameDuration,
      timingFunction: 'linear',
    });

    const updateFrame = () => {
      that.setData({
        currentFrame: `/upload/${that.data.frameIndex + 1}.png`,
      });
      animation.step();
      that.setData({
        animationData: animation.export(),
      });
      that.data.frameIndex = (that.data.frameIndex + 1) % that.data.frameCount;
      setTimeout(updateFrame, that.data.frameDuration);
    };

    updateFrame();
  },

  onTouchStart: function(e) {
    this.setData({
      startX: e.touches[0].pageX,
      startY: e.touches[0].pageY,
      startTime: Date.now(),
    });
  },

  onMove: function(e) {
    this.setData({
      x: e.detail.x,
      y: e.detail.y,
    });
  },

  onTouchEnd: function(e) {
    const { startX, startY, startTime } = this.data;
    const endX = e.changedTouches[0].pageX;
    const endY = e.changedTouches[0].pageY;
    const endTime = Date.now();

    const deltaX = endX - startX;
    const deltaY = endY - startY;
    const duration = endTime - startTime;

    const isDrag = Math.abs(deltaX) > 10 || Math.abs(deltaY) > 10 || duration > 300;

    if (!isDrag) {
      this.showRandomDialog();
    }
  },

  showRandomDialog: function() {
    if (this.data.isDialogShowing) {
      return;
    }

    const randomIndex = Math.floor(Math.random() * this.data.petDialogs.length);
    this.setData({
      dialog: this.data.petDialogs[randomIndex],
      isDialogShowing: true,
    });

    setTimeout(() => {
      this.adjustDialogPosition();
    }, 0); 
    
    setTimeout(() => {
      if (this.data.isDialogShowing) {
        this.setData({
          dialog: null,
          isDialogShowing: false,
        });
      }
    }, 3000);

    
  },

  adjustDialogPosition: function() {
    const query = wx.createSelectorQuery();
    query.select('.pet').boundingClientRect();
    query.exec((rectRes) => {
      if (rectRes[0]) {
        console.log(rectRes[0])
        const { width, height } = rectRes[0];
        const x = this.data.x;
        const y = this.data.y;
        const windowInfo = wx.getWindowInfo();
        const windowWidth = windowInfo.windowWidth;
        const windowHeight = windowInfo.windowHeight;
        console.log(x, y)
        let style = '';

        // 判断宠物图片的位置来决定对话气泡的方向
      if (x + width / 2 < windowWidth / 2) {
        // 宠物图片靠左边
        style = `left: ${width}px;`;
      } else {
        // 宠物图片靠右边
        style = `right: ${width}px;`;
      }

      if (y + height / 2 < windowHeight / 2) {
        // 宠物图片靠上边
        style += `bottom: ${height}px;`;
      } else {
        // 宠物图片靠下边
        style += `top: -${height}px;`;
      }

      // 增加对左上角、右上角、左下角和右下角的判断
      if (x < windowWidth / 4 && y < windowHeight / 4) {
        // 左上角
        style = `left: ${width}px; top: ${height}px;`;
      } else if (x > windowWidth * 3 / 4 && y < windowHeight / 4) {
        // 右上角
        style = `right: ${width}px; top: ${height}px;`;
      } else if (x < windowWidth / 4 && y > windowHeight * 3 / 4) {
        // 左下角
        style = `left: ${width}px; bottom: ${height}px;`;
      } else if (x > windowWidth * 3 / 4 && y > windowHeight * 3 / 4) {
        // 右下角
        style = `right: ${width}px; bottom: ${height}px;`;
      }

        this.setData({
          dialogStyle: style,
        });
      } else {
        console.error('未能获取到宠物元素的位置信息');
      }
    });
  },


  onLongPress: function() {
    wx.showActionSheet({
      itemList: ['工具1', '工具2', '工具3'],
      success: (res) => {
        console.log('用户点击了第 ' + (res.tapIndex + 1) + ' 个按钮');
        // 根据用户选择的工具执行相应的操作
        switch (res.tapIndex) {
          case 0:
            // 执行工具1的操作
            break;
          case 1:
            // 执行工具2的操作
            break;
          case 2:
            // 执行工具3的操作
            break;
          default:
            break;
        }
      },
      fail: (res) => {
        console.log(res.errMsg);
      }
    });
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    this.startAnimation();
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady() {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow() {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide() {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload() {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh() {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom() {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage() {

  }
})