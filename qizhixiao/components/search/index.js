// components/search/index.js
Component({
  /**
   * 组件的属性列表
   */
  properties: {
    downIcon: {
      type:String,
      value:'../../static/team/down.png'
    },
    seacrhIcon: {
      type:String,
      value:'../../static/team/search.png'
    },
    showMenu: {
      type:Boolean,
      value:false
    },
    background: {
      type:String,
      value:'white'
    },
    classify: {
      type:Array,
      value:[]
    },
    chooseItem: {
      type:String,
      value:''
    }
  },

  /**
   * 组件的初始数据
   */
  data: {
    showMenu:false,
  },

  /**
   * 组件的方法列表
   */
  methods: {
    choose:function (e) {
      const classify = e.currentTarget.dataset.classify;
      this.setData({
        chooseItem: classify
      });
      this.triggerEvent('updateTeamData', { chooseItem: classify }); // 触发更新团队数据的事件，并传递 chooseItem
    },
    show:function (e) {
      if(this.data.showMenu === false) {
        this.setData({
          showMenu:true,
        })
      }
      else {
        this.setData({
          showMenu: false
        })
      }
    }
  }
})