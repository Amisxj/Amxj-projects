// components/mine/setting/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    items: {
      type:Array,
      value:[]
    },
    title: {
      type:String,
      value:''
    },
    iconsrc: {
      type:String,
      value:''
    },
    address: {
      type:Array,
      value:[]
    }
  },

  /**
   * 组件的初始数据
   */
  data: {

  },

  /**
   * 组件的方法列表
   */
  methods: {
    morePage:function (e) {
      console.log(this.properties.address)
      var index = e.currentTarget.dataset.index;
      console.log(index)
      if (index !== 4 && index !== 2){
        wx.navigateTo({
          url: this.properties.address[index],
          success: function(res) {
        
          },  
          fail: function(res) {
  
          },  
          complete: function(res) {
        
          }
        })   
      }else if (index === 2) {
        // 在这里添加分享小程序的功能
        wx.showShareMenu({
          withShareTicket: true,
          menus: ['shareAppMessage', 'shareTimeline'],
          success: function () {
            console.log('分享成功');
          },
          fail: function (res) {
            console.log('分享失败', res);
          }
        });
      } else {
          // 使用异步方法清除缓存
      wx.clearStorage({
          success: function() {
            wx.showToast({
              title: '缓存清除成功', // 提示内容
              icon: 'success', // 图标，有效值 "success", "loading", "none"
              duration: 1500, // 提示的延迟时间，单位毫秒，默认：1500
              mask: true, // 是否显示透明蒙层，防止触摸穿透，默认：false
              success: function() {
                // 成功显示后的操作
                setTimeout(() => {
                  wx.navigateBack({
                    delta: 1, // 这里的 delta 表示返回的层数，1 表示返回上一层，即返回到上一个页面
                    success: function () {
                      // 返回成功
                    },
                    fail: function () {
                      // 返回失败
                    }
                  });
                }, 500);
                
              },
              fail: function() {
                // 显示失败后的操作
              }
            });
            console.log('缓存清除成功');
            // 可以在这里添加成功后的操作，比如提示用户
          },
          fail: function() {
            console.log('缓存清除失败');
            // 可以在这里处理失败的情况
          }
      });
          // 如果你想要使用同步方法，可以取消下面代码的注释
          /*
          try {
            wx.clearStorageSync();
            console.log('缓存清除成功');
            // 可以在这里添加成功后的操作，比如提示用户
          } catch (e) {
            console.error('缓存清除失败', e);
            // 可以在这里处理失败的情况
          }
          */
      }
    }
  }
})