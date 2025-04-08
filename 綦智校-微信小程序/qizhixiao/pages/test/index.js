// pages/test/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    latitude: 29.015442000000018, // 初始纬度设置
    longitude: 106.698577, // 初始经度设置
    markers: [
      {
        id: 1,
        name: '标记点1',
        latitude: 29.015442000000018,
        longitude: 106.698577,
        iconPath: '/static/map/location.png',
        width: 50,  // 添加宽度
        height: 50  // 添加高度
      },
      {
        id: 2,
        name: '标记点2',
        latitude: 29.01544200000001,
        longitude: 106.69857,
        width: 50,  // 添加宽度
        height: 50  // 添加高度
      },
      // 更多标记点...
    ],
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