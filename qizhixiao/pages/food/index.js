// pages/food/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    toastShow: false,
    toastContent: '这是一条提示信息'
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    setTimeout(() => {
      wx.navigateBack({
        delta: 1
      });
    }, 1000);
    this.setData({
      toastShow: true,
      toastContent: '该功能暂未开放，敬请期待，即将返回首页'
    });
    const toast = this.selectComponent('#toast');
    toast.show();
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