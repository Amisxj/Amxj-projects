// pages/self/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    messages: [],
    toBottomId: '',
    myAvatar: 'path/to/your/my-avatar.png',
    friendAvatar: 'path/to/your/friend-avatar.png',
    message: ''
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {

  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady() {
    // 模拟接收消息
    const incomingMessage = {
      text: 'Hello!',
      mine: false,
      time: new Date()
    };
    this.setData({
      messages: [...this.data.messages, incomingMessage],
      toBottomId: `msg-${incomingMessage.time.getTime()}`
    });
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow() {
    // 调用API设置当前页面的标题
    wx.setNavigationBarTitle({
      title: '消息中心' // 你想要设置的标题
    });
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