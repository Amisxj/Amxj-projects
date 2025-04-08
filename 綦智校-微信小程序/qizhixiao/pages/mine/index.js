// pages/mine/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    isLogged:false,
    name:'',
    avatar:'',
    gender:'',
    account:'',
    teamlist:[
      {     
        pageUrl:"/pages/card/class/index",
        src: "../../../static/mine/class.png",
        title: "课程"
      },
      {
        pageUrl:"/pages/card/calendar/index",
        src: "../../../static/mine/calendar.png",
        title: "校历"
      },
      {
        pageUrl:"/pages/card/leave/index",
        src: "../../../static/mine/leave.png",
        title: "请假"
      },
      {
        pageUrl:"/pages/card/grades/index",
        src: "../../../static/mine/grades.png",
        title: "成绩"
      },
    ],
    more: [
      {
        src:"../../../static/mine/map.png",
        text:"校园地图",
      },
      {
        src:"../../../static/mine/comment.png",
        text:"消息记录",
      },
      {
        src:"../../../static/mine/schoolPicture.png",
        text:"校园风采",
      },
      {
        src:"../../../static/mine/share.png",
        text:"分享他人",
      },
      {
        src:"../../../static/mine/setting.png",
        text:"更多设置",
      },
    ],
    address:[
      '../../pages/map/index',
      '../../pages/communication/index',
      '../../pages/mien/index',
      '../../pages/share/index',
      '../../pages/setting/index'
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
    const appInstance = getApp(); // 获取全局的应用实例
    // 调用全局方法，并传入回调函数
    appInstance.checkLogin(function(isLogged, userInfo) {
      // 这里是回调函数，处理登录状态和用户信息
      if (isLogged) {
        // 更新页面数据
        this.setData({
          isLogged: isLogged,
          avatar: userInfo.avatar,
          name: userInfo.name,
          account: userInfo.account,
          gender: userInfo.gender,
        });
      } else {
        // 未登录或登录状态失效，可以跳转到登录页面
        // wx.redirectTo({
        //   url: '/pages/login/index' // 替换为你的登录页面路径
        // });
      }
    }.bind(this));
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