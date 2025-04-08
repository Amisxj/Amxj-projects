// components/news/board/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    news: {
      type:Array,
      value:[]
    },
    labelIcon: {
      type:Array,
      value:[]
    },
    gps_icon: {
      type:String,
      value:''
    }, 
  },
  
  /**
   * 组件的初始数据
   */
  data: {
    number:{
      type:Number,
      value:3
    },
  },

  /**
   * 组件的方法列表
   */
  methods: {
    concern: function(e) {
      const index = e.currentTarget.dataset.index; // 获取当前点击的索引
      const news = this.data.news; // 获取当前的新闻数据
      // 切换关注状态
      if (news[index]) {
        news[index].concerned = !news[index].concerned; // 切换关注状态
        this.setData({
          news: news // 更新数据
        });
        // 触发自定义事件，将更新后的数据传递给页面
        this.triggerEvent('updateNews', { news });
      }
    }
  }
})