// pages/detail/goods/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    
  },
  fetchGoodsDetail(id) {
    let that = this; // 保存对当前页面对象的引用
    wx.request({
      url: 'https://www.wumingjie.online/api/detail/lecture.php', // 确保URL正确
      method: 'GET',
      data: {
        id: id // 确保将 id 参数传递给后端
      },
      header: {
        'content-type': 'application/x-www-form-urlencoded' // 设置请求头
      },
      success(res) {
        console.log(res.data);
        if (res.data && res.data.lecture) {
          that.setData({
            lecture: res.data.lecture
          });
        } else {
          console.error('没有收到预期的数据:', res);
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
    const id = options.id; // options 中包含了页面跳转时传递的参数,获取 id 参数
    console.log("商品 ID:", id);
    // 根据 id 获取商品详情
    this.fetchGoodsDetail(id);
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