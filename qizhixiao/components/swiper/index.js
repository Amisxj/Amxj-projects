// components/swipe/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    images:{
      type:Array,
      value:[]
    },
    indicatorColor: {
      type:String,
      value:'#FFFFFF'
    },
    indicatorActiveColor: {
      type:String,
      value:'#00FFFF'
    },
    autoplay: {
      type:Boolean,
      value:true
    },
    interval: {
      type:Number,
      value:3000
    },
    duration: {
      type:Number,
      value:1000
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

  }
})