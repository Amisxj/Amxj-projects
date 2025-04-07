// pages/everyday/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    text: {},
    isLiked: false,
    currentImage: '/static/index/everyday/like.png',
    animationData: {},
    isLiked: false,
  },
  changeImage: function() {
    const currentImage = this.data.currentImage;
    const imageList = ['/static/index/everyday/like.png', '/static/index/everyday/like-after.png'];
    const index = (this.data.currentImage === imageList[0]) ? 1 : 0;
    let text = this.data.text;
    if (currentImage == imageList[0]){
      text[0].likes += 1;
    }
    else {
      text[0].likes -= 1;
    }
    const animation = wx.createAnimation({
      duration: 400, 
      timingFunction: 'ease-in-out' 
    });
    animation.scale(1.2).step();
    animation.scale(1).step();
    this.setData({
      isLiked: !this.data.isLiked,
      currentImage: imageList[index],
      text: text,
      animationData: animation.export()
    });
  },
  onShareAppMessage() {
    const promise = new Promise(resolve => {
      setTimeout(() => {
        resolve({
          title: '品析美句'
        })
      }, 2000)
    })
    return {
      title: '品析美句',
      path: '/pages/everyday/index',
      promise 
    }
  },
  fetchArticlesData() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/articles.php',  
      method: 'POST',
      header: {
        'content-type': 'application/x-www-form-urlencoded' 
      },
      success(res) {
        if (res.data && res.data.text) {
          that.setData({
            text: res.data.text
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
    this.fetchArticlesData();
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