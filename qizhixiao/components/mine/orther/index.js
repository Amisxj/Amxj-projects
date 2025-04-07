// components/mine/orther/index.js
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
      var index = e.currentTarget.dataset.index;
      wx.navigateTo({
        url: this.properties.address[index],
        success: function(res) {
      
        },  
        fail: function(res) {

        },  
        complete: function(res) {
      
        }
      })     
    }
  }
})