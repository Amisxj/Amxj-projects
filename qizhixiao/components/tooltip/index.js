// components/tooltip/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    content: {
      type: String,
      value: ''
    },
    show: {
      type: Boolean,
      value: false
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
    show: function() {
      this.setData({ show: true });
      setTimeout(() => {
        this.setData({ show: false });
      }, 2000); // 显示时长
    }
  }
})