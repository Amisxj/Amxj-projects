// pages/change/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    categories: [
      {
        name:'全部'
      },
      {
        name:'数码'
      },
      {
        name:'书籍'
      },
      {
        name:'日用'
      },
      {
        name:'服饰'
      },
      {
        name:'其它'
      }
    ],
    items: [
      // 更多商品...
    ],
    currentCategory: '全部', // 当前选中的分类
    searchQuery: '', // 用于存储搜索关键词
    filteredItems: [], // 过滤后的商品列表
  },
  onCategoryTap: function(e) {
    const categoryName = e.currentTarget.dataset.id;
    // 检查是否点击了“全部”分类
    if (categoryName === '全部') {
      // 设置currentCategory为空字符串，表示不过滤分类
      this.setData({
        currentCategory: '全部',
        filteredItems: this.data.items // 显示所有商品
      });
    } else {
      const categoryName = e.currentTarget.dataset.id;
      this.setData({
        currentCategory: categoryName,
        filteredItems: this.data.items.filter(item => item.classify === categoryName)
      });
    }
  },

  onSearchInput: function(e) {
    this.setData({
      searchQuery: e.detail.value
    });
  },

  onSearch: function() {
    const searchQuery = this.data.searchQuery;
    const filteredItems = this.data.items.filter(item => item.title.includes(searchQuery));
    this.setData({
      filteredItems,
      currentCategory: '' // 清除当前分类，显示所有商品
    });
  },

  fetchProductsData() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/product.php', // 替换为你的PHP脚本URL
      method: 'POST',
      header: {
        'content-type': 'application/x-www-form-urlencoded' // 设置请求头
      },
      success(res) {
        if (res.data && res.data.products) {
          that.setData({
            items: res.data.products,
            filteredItems: res.data.products // 确保设置成“全部”时显示所有商品
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

    this.fetchProductsData();
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