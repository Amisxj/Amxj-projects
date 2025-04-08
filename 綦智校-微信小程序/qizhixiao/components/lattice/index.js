// components/lattice/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    list:{
      type:Array,
      value:[]
    },
    image:{
      type:String,
      value:''
    },
    text:{
      type:String,
      value:''
    },
    link:{
      type:String,
      value:''
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
    changeLink:function(e){
      const link = e.currentTarget.dataset.id
      console.log(link);
      wx.navigateTo({
        url: link
      })
    }
  }
})