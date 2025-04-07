// pages/card/class/index.js
var colors = require('../../../utils/colors')
Page({
  /**
   * 页面的初始数据
   */
  data: {
    weekArray: ['第1周', '第2周', '第3周', '第4周', '第5周', '第6周', '第7周', '第8周', '第9周', '第10周', '第11周', '第12周', '第13周', '第14周', '第15周', '第16周', '第17周', '第18周', '第19周', '第20周', '第21周'],
    pageNum: 0, // 当前所在分类的索引
    todayDay: '', // 今日日期
    todayMonth:'', // 今日月份
    todayWeek:'', // 今日周
    day:'', // 日期
    month: '', // 月份
    monthNum:1,
    week: ['一', '二', '三', '四', '五', '六','日'], // 周一为起始日
    nowDay:[1,2,3,4,5,6,7], // 本周的七天日期
    schoolTime: ['2024','10','1'], // 本学期开学时间
    nowWeek: '', // 当前周
    course_time:[
      ['8:00','8:45'],
      ['8:55','9:40'],
      ['10:05','10:50'],
      ['11:00','11:45'],
      ['14:00','14:45'],
      ['14:55','15:40'],
      ['16:05','16:50'],
      ['17:00','17:45'],
      ['19:00','19:45'],
      ['19:55','20:40'],
      ['20:50','21:35'],
      ['21:45','22:30'],
    ],
    wList: [
      // [     //第一周 
      //   { "id":1,"isToday": 1, "amount": 7, "firstClass": 2, "name": "算法设计与分析","address":"贤者楼305" , "teacher" : "吴某" , "academy": "计算机学院" ,"codename": "G13455234","specialized": "计算机科学与技术","grade":"2021","class":"5","colorId": '1'},
      //   { "id":2,"isToday": 2, "amount": 7, "firstClass": 2, "name": "算法设计与分析","address":"贤者楼305" , "teacher" : "吴某" , "academy": "计算机学院" ,"codename": "G13455234","specialized": "计算机科学与技术","grade":"2021","class":"5","colorId": '1'}
      // ],
      // [     //第二周 
      //   { "id":1,"isToday": 1, "amount": 7, "firstClass": 2, "name": "算法设计与分析","address":"贤者楼305" , "teacher" : "吴某" , "academy": "计算机学院" ,"codename": "G13455234","specialized": "计算机科学与技术","grade":"2021","class":"5","colorId": '1'},
      // ],
      // [     //第三周 
      //   { "id":1,"isToday": 1, "amount": 7, "firstClass": 2, "name": "算法设计与分析","address":"贤者楼305" , "teacher" : "吴某" , "academy": "计算机学院" ,"codename": "G13455234","specialized": "计算机科学与技术","grade":"2021","class":"5","colorId": '1'},
      // ],
    ]
  },


  // 获取第几周后的月份
  getMonth(days) {
    let [year,month,day] = this.data.schoolTime
    var date = new Date(year,month-1,day);    
    date.setDate(date.getDate() + days);//获取n天后的日期      
    var m = (date.getMonth() + 1) < 10 ? "0" + (date.getMonth() + 1) : (date.getMonth() + 1);        
    return  m;     
  },

  // 获取第几周后的星期几的日期
  getDay(days) {
    let [year, month, day] = this.data.schoolTime
    var date = new Date(year, month-1, day);
    date.setDate(date.getDate() + days);//获取n天后的日期      
    var d = date.getDate() < 10 ? "0" + date.getDate() : date.getDate();//获取当前几号，不足10补0    
    return d;
  },

  // 获取当前周
  getNowWeek() {
    var date = new Date(); // 获取当前日期
    let [year, month, day] = this.data.schoolTime; // 获取学期开始时间
    var start = new Date(year, month - 1, day); // 创建学期开始日期对象
    // 计算时间差
    var left_time = parseInt((date.getTime() - start.getTime()) / 1000) + 24 * 60 * 60; // 加一天的秒数
    var days = parseInt(left_time / 3600 / 24); // 将时间差转换为天数
    var week = Math.floor(days / 7) + 1; // 计算当前是第几周
    // 如果周数超出范围，返回默认值
    if (week > 20 || week <= 0) {
        week = this.data.nowWeek; // 使用默认周数
    }
    return week; // 返回当前周数
  },

  //获取一周的日期
  getDayOfWeek(week){
    var day = []
    for (var i = -1; i < 6; i++) {
      var days = (week - 1) * 7 + i;
      day.push(this.getDay(days))
    }
    return day
  },

  // 获取课表数据
  async getCourseList(){

  },

  // 点击切换导航的回调
  changeNav(event) {
    let pageNum = event.currentTarget.dataset.page;
    let nowWeek = pageNum + 1;
    let nowDay = this.getDayOfWeek(nowWeek);
    let month = this.getMonth((nowWeek - 1) * 7);
    
    // 设置数据
    this.setData({
        pageNum,
        nowWeek,
        nowDay,
        month,
        monthNum: month / 1, // 当前月份数字类型，用于数字运算
        scrollIntoViewId: `t${pageNum}` // 设置要滚动到的元素ID
    });
    // console.log(this.data.nowWeek); // 检查当前周数
    // console.log(this.data.wList.length); // 检查wList数组的长度
    // console.log(this.data.wList[this.data.nowWeek - 1])
  },
  fetchClassData() {
    const that = this;
    wx.request({
      url: 'https://www.wumingjie.online/api/class.php',  // 替换为你的PHP脚本URL 
      success(res) {  
        if (res.data && res.data.wList) {
          that.setData({
            wList: res.data.wList
          });
        }
      },
      fail(error) {
        console.error('请求失败:', error);
      }
    });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.fetchClassData();
    let nowWeek = this.getNowWeek(); // 获取当前周数
    this.changeNav({ currentTarget: { dataset: { page: nowWeek - 1 } } });
    let nowDay = this.getDayOfWeek(nowWeek)
    let pageNum = nowWeek - 1
    let month = this.getMonth((nowWeek - 1) * 7);
    this.data.todayMonth
    this.setData({
      nowWeek,
      nowDay,
      pageNum,
      todayWeek:nowWeek,
      monthNum: month / 1, // 当前月份数字类型，用于数字运算
      colorArrays: colors // 课表颜色
    })

  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
    this.setData({
      todayDay: new Date().getDate(),
      todayMonth: new Date().getMonth() + 1,
      day: new Date().getDate(),
      month: new Date().getMonth() + 1,
    })
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})