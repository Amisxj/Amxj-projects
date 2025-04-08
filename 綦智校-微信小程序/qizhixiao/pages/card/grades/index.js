// pages/card/grades/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    newsList: [
      { id: 1, time: '2024年10月01日', content: '2021级同学体测安排' },
      { id: 2, time: '2024年12月21日-12月31日', content: '2022级同学进行2024年-2025年第2学年期末考试' },
      { id: 3, time: '2024年06月21日', content: '2022级同学英语CT4考试' },
      { id: 4, time: '2024年12月21日-12月2日', content: '2021级研究生考试' },
      { id: 5, time: '2024年12月21日-12月2日', content: '2023级同学计算机二级等级考试' },
      // ...其他新闻
    ],
    grades: [
        { id: 1, title: 'Python程序设计课程设计', scorce: '66' },
        { id: 2, title: '嵌入式与物联网开发技术', scorce: '88' }, 
        { id: 3, title: '“互联网+”时代的企业战略管理', scorce: '88' }, 
        //考试成绩
    ]
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