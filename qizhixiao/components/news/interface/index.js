// components/news/interface/index.js
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
    chatList: []
  },

  /**
   * 组件的方法列表
   */
  methods: {
    goToChat(e) {
      const id = e.currentTarget.dataset.id;
      const name = e.currentTarget.dataset.name;
      console.log(name);
      const url = `/pages/chat/index?id=${id}&name=${encodeURIComponent(name)}`;
      wx.navigateTo({
        url: url
      });
    },
    loadChatList(id) {
      wx.request({
        url: 'https://www.wumingjie.online/api/interface.php', 
        method: 'GET',
        header: {
          'content-type': 'application/x-www-form-urlencoded' 
        },
        data: {
          id: id
        },
        success: (res) => {
          if (res.statusCode === 200) {
            this.setData({
              chatList: res.data.chatList                                   
            });
          } else {
            console.error('请求失败:', res);
          }
        },
        fail: (err) => {
          console.error('请求错误:', err);
        }
      });
    }  
  }
})