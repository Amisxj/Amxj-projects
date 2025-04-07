// pages/communication/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {   
    isLogged: false,
    myconservation_id: '',
    currentTab: 0, // 默认显示第一个选项卡的内容
  },

  switchTab: function(e) {
    const index = e.currentTarget.dataset.index;
    this.setData({
      currentTab: index
    });
  },

  onSwiperChange: function(e) {
    this.setData({
      currentTab: e.detail.current
    });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad() {
    const appInstance = getApp(); // 获取全局的应用实例
    appInstance.checkLogin(function(isLogged, userInfo) {
      if (isLogged) {
        this.setData({
          isLogged: isLogged,
          myconservation_id: userInfo.id
        });
        // 获取组件实例
        const newsInterface = this.selectComponent('#news-interface');
        // 调用组件的 loadChatList 方法
        newsInterface.loadChatList(this.data.myconservation_id);
        const newsFollowed = this.selectComponent('#news-followed');
        // 调用组件的 watchList 方法
        newsFollowed.watchList();
      } else {
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