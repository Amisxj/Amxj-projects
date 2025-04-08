// pages/privacy/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    isLogged: false,
    userData: {}
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    const appInstance = getApp(); // 获取全局的应用实例
    // 调用全局方法，并传入回调函数
    appInstance.checkLogin(function(isLogged, userInfo) {
      // 这里是回调函数，处理登录状态和用户信息
      if (isLogged) {
        const birthDate = new Date(userInfo.birth);
        const today = new Date();
        let age = today.getFullYear() - birthDate.getFullYear();
        const month = today.getMonth() - birthDate.getMonth();
        if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
          age--;
        }
        // 更新页面数据
        this.setData({
          userData:userInfo,
          'userData.age': age
        });
      } else {
        // 未登录或登录状态失效，可以跳转到登录页面
        wx.redirectTo({
          url: '/pages/login/index' 
        });
      }
    }.bind(this));
    
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