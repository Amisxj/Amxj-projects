// pages/library/index.js
Page({
  /**
   * 页面的初始数据
   */
  data: {
    selectedItem: null,
    selectedValue: '1',
    bgcolor: '', // 默认背景颜色为白色
    items: [
      // 这里是你的项目列表
      { 
        id: 1, 
        name: '图书', 
        cardList: [
        { id: '1', title: '文学', description: '这是卡片1的描述', bgColor: '#fff' },
        { id: '2', title: '历史、地理', description: '这是卡片2的描述', bgColor: '#fff' },
        { id: '3', title: '文化、科学、教育...', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '4', title: '工业技术', description: '这是卡片1的描述', bgColor: '#fff' },
        { id: '5', title: '政治法律', description: '这是卡片2的描述', bgColor: '#fff' },
        { id: '6', title: '艺术', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '7', title: '医药、卫生', description: '这是卡片1的描述', bgColor: '#fff' },
        { id: '8', title: '经济', description: '这是卡片2的描述', bgColor: '#fff' },
        { id: '9', title: '哲学、宗教', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '10', title: '语言、文学', description: '这是卡片1的描述', bgColor: '#fff' },
        { id: '11', title: '社会科学总论', description: '这是卡片2的描述', bgColor: '#fff' },
        { id: '12', title: '生物科学', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '13', title: '农业科学', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '14', title: '天文学、地球科学', description: '这是卡片1的描述', bgColor: '#fff' },
        { id: '15', title: '环境科学、安全科学', description: '这是卡片1的描述', bgColor: '#fff' },
        { id: '16', title: '数理科学和化学', description: '这是卡片2的描述', bgColor: '#fff' },
        { id: '17', title: '军事', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '18', title: '综合性图书', description: '这是卡片1的描述', bgColor: '#fff' },
        { id: '19', title: '交通运输', description: '这是卡片2的描述', bgColor: '#fff' },
        { id: '20', title: '马克思主义、列宁...', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '21', title: '自然科学总论', description: '这是卡片3的描述', bgColor: '#fff' },
        { id: '22', title: '航空、航天', description: '这是卡片1的描述', bgColor: '#fff' },
      ],
     },
      { 
        id: 2, 
        name: '期刊', 
        description: '这是项目2的描述',
        cardList: [
          { id: '1', title: '时政', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '2', title: '财经', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '3', title: '生活', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '4', title: '时尚', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '5', title: '休闲', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '6', title: '文学', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '7', title: '历史', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '8', title: '艺术', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '9', title: '军事、科技', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '10', title: '运动、养生', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '11', title: '影视、旅游', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '12', title: '女性', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '13', title: '文化', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '14', title: '科普', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '15', title: '教育', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '16', title: '法制', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '17', title: '外文', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '18', title: '学术', description: '这是卡片1的描述', bgColor: '#fff' },
        ],
      },
      { 
        id: 3, 
        name: '绘本', 
        description: '这是项目3的描述',
        cardList: [
          { id: '1', title: '自我成长', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '2', title: '健康习惯', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '3', title: '社会认知', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '4', title: '安全教育', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '5', title: '科学探索', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '6', title: '艺术启蒙', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '7', title: '语言文化', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '8', title: '国学经典', description: '这是卡片2的描述', bgColor: '#fff' },
        ],
      },
      { 
        id: 4, 
        name: '听书', 
        description: '这是项目4的描述',
        cardList: [
          { id: '1', title: '传奇史话', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '2', title: '心理健康', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '3', title: '听见真知', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '4', title: '国学经典', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '5', title: '古代历史', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '6', title: '人物传记', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '7', title: '中国文学', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '8', title: '世界名著', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '9', title: '四史专栏', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '10', title: '国家领袖', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '11', title: '军事谍战', description: '这是卡片2的描述', bgColor: '#fff' },
          { id: '12', title: '养生保健', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '13', title: '艺术之旅', description: '这是卡片3的描述', bgColor: '#fff' },
          { id: '14', title: '影视同期', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '15', title: '儿童文学', description: '这是卡片1的描述', bgColor: '#fff' },
          { id: '16', title: '民俗文化', description: '这是卡片2的描述', bgColor: '#fff' },
        ],  
      },
    ],
  },
  onSelectChange: function(e) {
    const selectedValue = e.detail.value;
    this.setData({
      selectedItem: this.data.items[selectedValue - 1],
      bgcolor: "#7FFFD4"
    });
  },
  goToDetail: function(e) {
    // console.log('Navigating to detail page', e.currentTarget.dataset); 查看控制台输出
    const id = e.currentTarget.dataset.id;
    const title = e.currentTarget.dataset.title;
    wx.navigateTo({
      url: `/pages/books/index?id=${id}&category=${title}`
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    // 设置默认选中的项为“图书”
    const defaultSelected = this.data.items[0]; // 默认选中第一项，即“图书”
    this.setData({
      selectedItem: defaultSelected,
      selectedValue: defaultSelected.id
    });
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
})