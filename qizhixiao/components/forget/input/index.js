// components/input/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    title: {
      type:String,
      value:''
    },
    type: {
      type:String,
      value:'text'
    },
    disabled: {
      type:Boolean,
      value:false
    },
    placeholder: {
      type:String,
      value:''
    },
    autofocus: {
      type:Boolean,
      value:false
    },
    maxlength: {
      type:Number
    },
    mode: {
      type:String,
      value:'normal'
    },
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