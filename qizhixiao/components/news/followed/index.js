// components/news/Followed/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {

  },

  /**
   * 组件的初始数据
   */
  data: {
    watchList: []
  },

  /**
   * 组件的方法列表
   */
  methods: {
    watchList() {
      const userData = wx.getStorageSync('userData'); 
      const userID = userData.id
      console.log(userID)
      wx.request({
        url: 'https://www.wumingjie.online/api/watchList.php', // 替换为你的 PHP 文件的实际地址
        method: 'GET',
        header: {
          'content-type': 'application/x-www-form-urlencoded' 
        },
        data: {
          userID: userID
        },
        success: (res) => {
          if (res.statusCode === 200) {
            this.setData({
              watchList: res.data.watchList
            });
          } else {
            console.error('请求失败:', res);
          }
        },
        fail: (err) => {
          console.error('请求错误:', err);
        }
      });
    },
    cancel: function(e) {
      const id = e.currentTarget.dataset.id;
      wx.request({
        url: 'htpps://www.wumingjie.online/api/cancel.php', // 你的后端API地址
        method: 'DELETE',
        data: {
          id: id // 发送需要取消关注的项目的id
        },
        success: function(res) {
          // 根据后端响应处理结果
          if (res.statusCode === 200) {
            // 成功取消关注，更新列表
            const updatedList = this.data.watchList.filter(item => item.id !== id);
            this.setData({
              watchList: updatedList
            });
            wx.showToast({
              title: '取消关注成功',
              icon: 'success',
              duration: 2000
            });
          } else {
            // 处理错误情况
            wx.showToast({
              title: '取消关注失败',
              icon: 'none',
              duration: 2000
            });
          }
        }.bind(this),
        fail: function() {
          // 请求失败的处理
          wx.showToast({
            title: '请求失败',
            icon: 'none',
            duration: 2000
          });
        }
      });
    }
  }
})