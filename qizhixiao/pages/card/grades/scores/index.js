// pages/card/grades/scores/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    autoplay: false,
    interval: 5000,
    indicatorDots: true,
    showDetail: false,
    detailSubject: {},
    semesters: [
      {
        year: '2021-2022',
        semester: '1',
        subjects: [
          { name: 'Python程序设计课程设计', score: 85 },
          { name: '互联网+时代的企业战略管理', score: 90 },
          { name: '阿斯顿法国', score: 85 },
          { name: '英语', score: 90 },
          { name: '数学', score: 85 },
          { name: '英语', score: 90 },
          { name: '数学', score: 85 },

          // ... 其他科目
        ],
        totalScore: 1000,
        sportScore: '及格',
        failCount: 3,
        gpa: 4.8,
        gradeRank: '9911',
        compositeRank: '2056'
      },
      {
        year: '2021-2022',
        semester: '2',
        subjects: [
          { name: '数学', score: 11 },
          { name: '英语', score: 12 },
          { name: '数学', score: 11 },
          { name: '英语', score: 12 },
          // ... 其他科目
        ],
        failCount: 2,
        totalScore: 100,
        gpa: 12,
        gradeRank: '12',
        compositeRank: '123'
      },
      // ... 其他学期的数据
    ],
    currentSemester: {}
  },
  onSwiperChange: function(e) {
    // 当 swiper 改变时，更新 currentSemester
    const currentSemesterIndex = e.detail.current;
    this.setData({
      currentSemester: this.data.semesters[currentSemesterIndex]
    });
  },
  onSubjectTap: function(e) {
    const index = e.currentTarget.dataset.index;
    const subject = this.data.currentSemester.subjects[index];
    this.setData({
      detailSubject: subject,
      showDetail: true
    });
  },
  onOverlayTap: function() {
    this.setData({
      showDetail: false
    });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    this.setData({
      currentSemester: this.data.semesters[0] // 默认显示第一个学期的数据
    });
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