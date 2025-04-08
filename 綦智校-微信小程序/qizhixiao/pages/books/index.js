// pages/books/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    bookscategory:'',
    books: [
      // {image:'/static/books/book1.png',title:'花醉南唐',author:'宋书生',description:'初始，他说：“江宁郡的小淑女啊，这什么破身份，我不娶！”见过后，他渍渍渍：“弱不禁风，我想换一个更好的，上天啊，能否听见我的心声',rating:'9.8',category:'甜宠',reads:'9000',ranking:'12',leaderboard:'必读榜'},
      // {image:'/static/books/book2.png',title:'王菲他不讲武德',author:'宋书生',description:'初始，他说：“江宁郡的小淑女啊，这什么破身份，我不娶！”见过后，他渍渍渍：“弱不禁风，我想换一个更好的，上天啊，能否听见我的心声',rating:'9.2',category:'搞笑',reads:'120'}
    ]
  },

  fetchBooks() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/getBooks.php', 
      method: 'GET',
      data: {
        category: this.data.bookscategory
      },
      header: {
        'content-type': 'application/x-www-form-urlencoded' 
      },
      success(res) {
        that.setData({
          books: res.data.books
        });
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
     if (options.category) {
      wx.setNavigationBarTitle({
        title: '校园书馆-'+ options.category
      });
    }
    this.setData({
      bookscategory: options.category,
    });
    this.fetchBooks();
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