// components/test/index.js
Component({
  properties: {

  },
  data: {

  },
  lifetimes: {},
  methods: {
    handleReady: function ({detail}) {
      this.scene = detail.value;
    },
    handleAssetsLoaded: function({detail}) {
      wx.showToast({title: '点击屏幕放置'});
      this.scene.event.add('touchstart', () => {
        this.scene.ar.placeHere('setitem', true);
      });
    },
  }
})