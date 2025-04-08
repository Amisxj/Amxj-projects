// pages/team/index.js
Page({
  /**
   * 页面的初始数据
   */
  data: {
    classify:[
      '全部',
      '活动',
      '运动',
      '游玩',
    ],
    chooseItem:'全部',
    team:[],
    myAvatar:'',
  },

  fetchTeamData() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/team.php',  // 替换为你的PHP脚本URL
      method: 'POST',
      header: {
        'content-type': 'application/x-www-form-urlencoded' // 设置请求头
      },
      success(res) {
        if (res.data && res.data.activities) {
          const filteredTeam = that.filterTeamByCategory(res.data.activities, that.data.chooseItem);
          that.setData({
            team: filteredTeam
          });
        }
      },
      fail(error) {
        console.error('请求失败:', error);
      }
    });
  },


  filterTeamByCategory(teamData, category) {
    return teamData.filter(team => {
      if (category === '全部') {
        return true;
      }
      return team.category === category;
    });
  },

  updateTeamData: function(event) {
    // console.log('updateTeamData event received with chooseItem:', event.detail.chooseItem); // 确认这条日志输出，表示事件被正确接收
    this.setData({
      chooseItem:event.detail.chooseItem
    })
    this.fetchTeamData(); // 重新获取和更新团队数据
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    this.fetchTeamData();
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