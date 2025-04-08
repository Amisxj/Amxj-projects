// pages/map/index.js
Page({
  data: {
    schoolMap:'https://www.wumingjie.online/api/images/map/移通学院.jpg',
    showBuilding: false, // 新增字段控制显示状态
    latitude: 29.015442000000018, // 初始纬度设置为0
    longitude: 106.698577, // 初始经度设置为0
    markers: [
      // {
      //   id: 1,
      //   name: '綦河书院1号楼',
      //   latitude: 29.015442000000018,
      //   longitude: 106.698577,
      //   iconPath: '/static/map/location.png',
      //   width: 50,  // 添加宽度
      //   height: 50  // 添加高度
      // },
    ],
    currentBuilding: null,
    // currentBuilding: {
    //   "name": "勤者楼",
    //   "img": "https://www.wumingjie.online/api/images/building/勤者楼.png",
    //   "floors": [
    //     { "floor": "第五层", "name": ["共享厨房", "711便利店", "tiktok演讲室","共享厨房","共享厨房","共享厨房","共享厨房","共享厨房"] },
    //     { "floor": "第四层", "name": ["共享厨房", "711便利店", "tiktok演讲室","共享厨房","共享厨房","共享厨房","共享厨房","共享厨房"] },
    //   ]
    // },    
  },
 
  clickImg: function(e){
    var imgUrl = this.data.schoolMap;
    wx.previewImage({
      urls: [imgUrl], //需要预览的图片http链接列表，注意是数组
      current: '', // 当前显示图片的http链接，默认是第一个
      success: function (res) { },
      fail: function (res) { },
      complete: function (res) { },
    })
  },
  // 切换视图的函数
  toggleView: function() {
    this.setData({
      showBuilding: !this.data.showBuilding
    });
  },
  fetchMarkers: function() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/buildingMark.php', 
      method: 'POST',
      header: {
        'content-type': 'application/x-www-form-urlencoded' 
      },
      success: function(res) {
        if (res.statusCode === 200 && res.data.markers) {
          that.setData({
            markers: res.data.markers, 
          });
        } else {
          console.error('请求失败:', res);
        }
      },
      fail: function(error) {
        console.error('请求失败:', error);
      }
    });
  },
  onMarkerTap: function(e) {
    // 使用 e.markerId 获取被点击的标记点的 id
    const markerId = e.markerId;
    console.log(markerId)
    // 查找对应的标记点对象
    // const marker = this.data.markers.find(m => m.id === markerId);
    // 获取标记点的 name 属性
    // const buildingName = marker.name;
    // console.log(buildingName)
    // 调用 getBuildingInfo 方法并传递 markerId
    this.getBuildingInfo(markerId);
  },
  getBuildingInfo: function(markerId) {
    wx.request({
      url: 'https://www.wumingjie.online/api/building.php', 
      method: 'GET', 
      data: {
        buildingId: markerId
      },
      success: (res) => {
        if (res.statusCode === 200 && res.data.currentBuilding) {
          // 处理返回的数据，更新页面状态
          this.setData({
            currentBuilding: res.data.currentBuilding,
            showBuilding: !this.data.showBuilding,
          });
        }
      },
      fail: (error) => {
        console.error('请求失败:', error);
        wx.showToast({
          title: '请求失败，请检查网络或联系管理员',
          icon: 'none'
        });
      }
    });
  },
  locateToMe: function() {
    let that = this;
    wx.getLocation({
      type: 'wgs84',
      success(res) {
        const latitude = res.latitude;
        const longitude = res.longitude;
        // 定义您的范围，这里以经纬度为中心点，半径为1000米的范围为例
        const range = 1000; // 范围，单位：米
        // 定义中心点的经纬度，这里以您小程序的固定位置为例
        const centerLatitude = that.data.latitude; // 中心点纬度
        const centerLongitude = that.data.longitude; // 中心点经度
  
        // 计算两点之间的距离，可以使用Haversine公式
        const radius = 6371e3; // 地球平均半径，单位：米
        const deltaLatitude = (latitude - centerLatitude) * Math.PI / 180;
        const deltaLongitude = (longitude - centerLongitude) * Math.PI / 180;
        const a =
          Math.sin(deltaLatitude / 2) * Math.sin(deltaLatitude / 2) +
          Math.cos(latitude * Math.PI / 180) *
            Math.cos(centerLatitude * Math.PI / 180) *
            Math.sin(deltaLongitude / 2) *
            Math.sin(deltaLongitude / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        const distance = radius * c; // 计算出的距离
  
        if (distance <= range) {
          // 如果在范围内，更新位置信息
          that.setData({
            latitude: latitude,
            longitude: longitude
          });
          // 刷新地图视图
          const mapCtx = wx.createMapContext('map');
          mapCtx.moveToLocation();
        } else {
          // 如果不在范围内，显示失败信息
          wx.showToast({
            title: '您不在指定范围内',
            icon: 'none'
          });
        }
      },
      fail: function(error) {
        console.error('定位失败:', error);
        wx.showToast({
          title: '定位失败，请检查权限',
          icon: 'none'
        });
      }
    });
  },
  onLoad: function(options) {
    
    this.fetchMarkers();
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady() {
    
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow() {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide() {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload() {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh() {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom() {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage() {

  }
});