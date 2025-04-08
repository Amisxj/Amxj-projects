// pages/index/index.js
Page({
  /**
   * 页面的初始数据
   */
  data: {
    cardList: [
    ],

    //轮播图片
    images: [
      'https://www.wumingjie.online/api/images/swiper/bg1.jpg',
      'https://www.wumingjie.online/api/images/swiper/bg2.jpg',
      'https://www.wumingjie.online/api/images/swiper/bg3.jpg'
    ],
    latticeImages:[
      {
        image:'../../static/index/lattice/change.png',
        text:'交易市场',
        link:'/pages/change/index'
      },
      {
        image:'../../static/index/lattice/food.png',
        text:'美食探寻',
        link:'../../pages/food/index'
      },
      {
        image:'../../static/index/lattice/library.png',
        text:'校园书馆',
        link:'../../pages/library/index'
      },
      {
        image:'../../static/index/lattice/text.png',
        text:'每日一品',
        link:'/pages/everyday/index'
      }
    ] 
  },


  fetchLectureData() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/lecture.php',  // 确保URL正确
      method: 'POST', // 如果PHP脚本不需要POST数据，则使用GET
      header: {
        'content-type': 'application/x-www-form-urlencoded' // 设置请求头
      },
      success(res) {
        if (res.data && res.data.cardList) {
          // console.log(res.data.cardList)
          that.setData({
            cardList: res.data.cardList
          });
        }
      },
      fail(error) {
        console.error('请求失败:', error);
      }
    });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    this.fetchLectureData();
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady() {
    // const app = getApp();
    // if (app.globalData.isLogged) {
    //   this.setData({
    //     isLogged: true,
    //     avatar: "https://www.wumingjie.online/api/images/avatar/" + app.globalData.userInfo.avatar,
    //     name: app.globalData.userInfo.name,
    //     account: app.globalData.userInfo.account,
    //     gender: app.globalData.userInfo.gender,
    //   });
    // } else {
    //   // 未登录的处理逻辑
    // }
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