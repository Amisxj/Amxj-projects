// components/index/lecture/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    cardList: {
      type:Array,
      value: []
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
    goToDetail(e) {
      const id = e.currentTarget.dataset.id;
      // 跳转到详情页面
      wx.navigateTo({
        url: `/pages/detail/lecture/index?id=${id}`,
      });
    }
  }
})