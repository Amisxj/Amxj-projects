// components/verify/index.js
Component({
  /**
   * 组件的属性列表
   */
  properties: {
    showModal:{
      type:Boolean,
      value:false
    }
  },

  /**
   * 组件的初始数据
   */
  data: {
    codelayout: [1, 1, 1, 1, 1, 1],
    inputValue:'',
    verifyCode: "",
    focus: false,
    showModal:false
  },

  /**
   * 组件的方法列表
   */
  methods: {
    clickAginSend:function(){

    },
    sure:function(){
      this.triggerEvent('ok')
    },
    cancel:function(){
      this.triggerEvent('cancel')
    }
  }
})