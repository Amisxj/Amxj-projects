// pages/function/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    labelIcon:[
      "/static/news/scan.png",
      "/static/news/comments.png",
      "/static/news/good.png",
    ],
    news:[
    ], 
    isLogged:false,
  },
  updateNews: function(e) {
    this.setData({
      news: e.detail.news // 更新页面中的新闻数据
    });
  },


  fetchSchoolnewsData() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/schoolnews.php',
      method:'POST',
      header: {
          'content-type': 'application/x-www-form-urlencoded' // 设置请求头
      },
      data: {
      },
      success: (res) => {
        // 处理服务器返回的数据
        if (res.data && res.data.news) {
          // 假设你有一个页面需要展示新闻列表
          that.setData({
            news: res.data.news
          });
        }
      },
      fail: (err) => {
        console.error(err);
      }
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    // 监听组件的更新事件
    this.fetchSchoolnewsData();

    const appInstance = getApp(); // 获取全局的应用实例
    // 调用全局方法，并传入回调函数
    appInstance.checkLogin(function(isLogged, userInfo) {
      // 这里是回调函数，处理登录状态和用户信息
      if (isLogged) {
        // 更新页面数据
        // 使用字符串的 split 方法分割 URL，然后取数组的最后一个元素
        const newAvatar = userInfo.avatar.split('/').pop();
        this.setData({
          myAvatar: newAvatar,
        });
      } else {
        // 未登录或登录状态失效，可以跳转到登录页面
        wx.redirectTo({
          url: '/pages/login/index' // 替换为你的登录页面路径
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
    wx.getStorage({
      labelIcon: 'labelIcon',
      success: (res) => {
        this.setData({ data: res.data})
      }
    })
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