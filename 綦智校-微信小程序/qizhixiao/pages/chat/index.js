// pages/chat/index.js
Page({
  /**
   * 页面的初始数据
   */
  data: {
    messages: [
    ],
    toBottomId: 0,
    myAvatar: '',
    friendAvatar: '',
  },
  UpdateMessages: function(e) {
    const newMessage = e.detail.newMessage;
    const updatedMessages = this.data.messages.concat(newMessage);
    console.log(updatedMessages)
    this.setData({
      messages: updatedMessages,
      toBottomId:'msg-' + newMessage.messageId 
    });
  },
  fetchChatListData(id) {
    const that = this;
    const userData = wx.getStorageSync('userData'); 
    console.log(userData)
    wx.request({
      url: 'https://www.wumingjie.online/api/chat.php',
      method:'GET',
      header: {
          'content-type': 'application/x-www-form-urlencoded' 
      },
      data: {
        id: id,
        userID: userData.id
      },
      success: (res) => {
        // 处理服务器返回的数据
        // console.log(res.data.myAvatar)
        if (res.data && res.data.messages) {
          // 假设你有一个页面需要展示新闻列表
          that.setData({
            messages: res.data.messages,
            myAvatar: res.data.myAvatar,
            friendAvatar: res.data.friendAvatar
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
    const name = decodeURIComponent(options.name);
    wx.setNavigationBarTitle({
      title: name,  
    });
    this.fetchChatListData(options.id);
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady() {
    // 模拟接收消息
    const incomingMessage = {
      messageId: 3,
      text: 'Hello!',
      mine: false,
      time: new Date().getTime()
    };
    this.setData({
      messages: [...this.data.messages, incomingMessage],
      toBottomId: 'msg-' + `${incomingMessage.messageId}`
    });
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