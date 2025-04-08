// pages/settings/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    more: [
      {
        text:"修改密码",
      },
      {
        src:"../../../static/mine/comment.png",
        text:"联系我们",
      },
      {
        src:"../../../static/mine/navigation.png",
        text:"分享他人",
      },
      {
        src:"../../../static/mine/share.png",
        text:"用户协议",
      },
      {
        src:"../../../static/mine/setting.png",
        text:"清除缓存",
      },
    ],
    address:[
      '../../pages/forget/index',
      '../../pages/chat/index',
      '../../pages/share/index',
      '../../pages/agreements/user/index',
      '../../pages/setting/index'
    ],
    toastShow: false,
    toastContent: '这是一条提示信息'
  },
  showToast: function() {
    try {
      wx.clearStorageSync();
      setTimeout(() => {
        wx.reLaunch({
          url: '../../pages/index/index' // 首页的路径
        });
      }, 500);
      this.setData({
        toastShow: true,
        toastContent: '账号已退出'
      });
      const toast = this.selectComponent('#toast');
      toast.show();
    } catch (e) {
      // 处理错误
      this.setData({
        toastShow: true,
        toastContent: '退出失败'
      });
    }
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