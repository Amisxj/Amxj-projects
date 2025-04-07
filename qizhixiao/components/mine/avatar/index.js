// components/mine/avatar/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    avatar: {
      type:String,
      value:''
    },
    name: {
      type:String,
      value:''
    },
    account: {
      type:String,
      value:'',
    },
    gender: {
      type:String,
      value:''
    },
    src: {
      type:String,
      value:''
    },
    loging: {
      type:Boolean,
      value:false
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
    onTap: function() {
      wx.navigateTo({
        url: '/pages/privacy/index' 
      });
    },
  }
})