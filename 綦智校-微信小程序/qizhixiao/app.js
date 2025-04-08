// app.js
App({
  globalData: {
    userInfo: null,
    isLogged: false
  },
  // 定义全局方法，用于验证登录状态和获取用户信息
  checkLogin: function (callback) {
    var appInstance = getApp(); // 获取全局的应用实例
    const session = wx.getStorageSync('3rd_session'); // 从本地存储中获取 3rd_session
    const userData = wx.getStorageSync('userData'); // 从本地存储中获取用户数据
    if (session && userData) {
      appInstance.globalData.isLogged = true; // 设置全局的登录状态
      appInstance.globalData.userInfo = {
        id: userData.id,
        avatar: "https://www.wumingjie.online/api/images/avatar/" + userData.avatar,
        name: userData.name,
        account: userData.account,
        gender: userData.gender,
        nickname: userData.nickname,
        number: userData.number,
        phone: userData.phone,
        enrollmentDates: userData.enrollmentDates,
        school: userData.school,
        major: userData.major,
        year: userData.year,
        class: userData.class,
        birth : userData.birth,              
      };
      // 发送请求到服务器验证 3rd_session 的有效性
      wx.request({
        url: 'https://www.wumingjie.online/api/verify.php', // 替换为你的后端接口地址
        method: 'POST',
        header: {
          'content-type': 'application/x-www-form-urlencoded'
        },
        data: {
          session_key: session
        },
        success: function(res) {
          if (res.data && res.data.valid) {
            // 3rd_session 有效
            console.log("有效");
          } else {
            // 3rd_session 无效，清除本地存储
            wx.removeStorageSync('3rd_session');
            appInstance.globalData.isLogged = false;
          }
        },
        fail: function() {
          wx.showToast({
            title: '请求失败，请检查网络',
            icon: 'none'
          });
        }
      });
    } else {
      appInstance.globalData.isLogged = false;
    }
    // 执行回调函数
    if (typeof callback === "function") {
      callback(appInstance.globalData.isLogged, appInstance.globalData.userInfo);
    }
  }
})
