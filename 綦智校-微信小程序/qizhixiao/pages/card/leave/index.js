// pages/card/leave/index.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    leaveTypes: ['事假', '病假', '其他'],
    leaveTypeIndex: 0,
    showPicker: false,
    beginDate: '', // 初始为空或者设置一个默认日期，如 '2024-01-01'
    beginTime: '', // 初始为空或者设置一个默认时间，如 '12:00'
    leaveCampus: false, // 默认为关闭状态
    personalPhone:'',
    emergencyPhone:'',
    reason: '', // 初始为空或者设置一个默认值
    imagePaths: [], // 存储选择的图片路径

    multiArray: [{
        id: 1,
        label: "计算机学院",
        children: [{
            id: 2,
            label: "计算机科学与技术",
            children: [{
                id: 3,
                label: "杨某某",
              },
              {
                id: 4,
                label: "王某某",
              },
              {
                id: 5,
                label: "徐某某",
              },
            ],
          },
          {
            id: 7,
            label: "数据媒体与技术",
            children: [{
                id: 8,
                label: "金某",
              },
              {
                id: 9,
                label: "苏某某",
              },
              {
                id: 10,
                label: "间某某",
              },
            ],
          },
        ],
      },
      {
        id: 17,
        label: "淬炼商学院",
        children: [{
            id: 18,
            label: "电影艺术",
            children: [{
                id: 19,
                label: "周某某",
              },
              {
                id: 20,
                label: "李某某",
              },
            ],
          },
          {
            id: 21,
            label: "舞蹈与音乐",
            children: [{
                id: 22,
                label: "孔某",
              },
              {
                id: 23,
                label: "易某",
              },
            ],
          },
        ],
      },
    ],
    multiIndex: [0, 0, 0],
    multiIds: [],
    newArr: [],
  },
  checkboxChange: function(e) {
    this.setData({
      leaveCampus: e.detail.value.indexOf('leaveCampus') > -1
    });
  },
  onPickerTap: function() {
    this.setData({ showPicker: true });
  },
  onPickerContainerTap: function() {
    this.setData({ showPicker: false });
  },
  onPickerItemTap: function(e) {
    const index = e.currentTarget.dataset.index;
    this.setData({
      leaveTypeIndex: index,
      showPicker: false
    });
  },

  // 时间选择器
  getCurrentDate: function() {
    const date = new Date();
    const year = date.getFullYear();
    const month = date.getMonth() + 1; // getMonth() 返回的月份从0开始
    const day = date.getDate();
    // 将月和日转换为两位数格式
    return `${year}-${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}`;
  },
  getCurrentTime: function() {
    const date = new Date();
    const hours = date.getHours();
    const minutes = date.getMinutes();
    // 将小时和分钟转换为两位数格式
    return `${hours < 10 ? '0' + hours : hours}:${minutes < 10 ? '0' + minutes : minutes}`;
  },
  bindBeginDateChange: function(e) {
    this.setData({
      beginDate: e.detail.value
    });
  },
  bindBeginTimeChange: function(e) {
    this.setData({
      beginTime: e.detail.value
    });
  },

  onSwitchChange: function(e) {
    this.setData({
      leaveCampus: e.detail.value // 更新开关的状态
    });
  },


  bindpersonalPhoneInput: function(e) {
    let value = e.detail.value;
    // 限制只能输入数字
    if (!/^\d*$/.test(value)) {
      // 如果输入包含非数字字符，则截取字符串中的数字部分
      value = value.replace(/\D/g, '');
    }
    // 限制长度为11位
    if (value.length > 11) {
      value = value.slice(0, 11);
    }
    this.setData({
      phoneNumber: value
    });
  },
  bindReasonInput: function(e) {
    // 更新请假原因数据
    this.setData({
      reason: e.detail.value
    });
  },
  chooseMedia: function() {
    const that = this;
    wx.chooseMedia({
      count: 4, // 最多选择4张图片
      mediaType: ['image'], // 选择图片
      sourceType: ['album', 'camera'], // 从相册选择或使用相机
      success(res) {
        if (res.tempFiles.length > 0) {
          const newImagePaths = that.data.imagePaths.concat(res.tempFiles.map(file => file.tempFilePath));
          that.setData({
            imagePaths: newImagePaths.slice(0, 4) // 限制最多4张图片
          });
        }
      }
    });
  },
  // 删除图片
  deleteImage: function(e) {
    const index = e.currentTarget.dataset.index;
    const imagePaths = this.data.imagePaths.filter((path, idx) => idx !== index);
    this.setData({
      imagePaths: imagePaths
    });
  },

  // 逐级选择器
  bindMultiPickerChange(e) {
    console.log(this.data.multiIds);
  },
  bindMultiPickerColumnChange(e) {
    let data = {
      newArr: this.data.newArr,
      multiIndex: this.data.multiIndex,
      multiIds: this.data.multiIds,
    };
    data.multiIndex[e.detail.column] = e.detail.value;

    let searchColumn = () => {
      let arr1 = [];
      let arr2 = [];
      this.data.multiArray.map((v, vk) => {
        if (data.multiIndex[0] === vk) {
          data.multiIds[0] = {
            ...v,
          };
          v.children.map((c, ck) => {
            arr1.push(c.label);
            if (data.multiIndex[1] === ck) {
              data.multiIds[1] = {
                ...c,
              };
              c.children.map((t, vt) => {
                arr2.push(t.label);
                if (data.multiIndex[2] === vt) {
                  data.multiIds[2] = {
                    ...t,
                  };
                }
              });
            }
          });
        }
      });
      data.newArr[1] = arr1;
      data.newArr[2] = arr2;
    };
    switch (e.detail.column) {
      case 0:
        // 每次切换还原初始值
        data.multiIndex[1] = 0;
        data.multiIndex[2] = 0;
        // 执行函数处理
        searchColumn();
        break;
      case 1:
        data.multiIndex[2] = 0;
        searchColumn();
        break;
    }
    this.setData(data);
  },


  // 提交按钮的点击事件处理函数
  onSubmitTap: function() {
    // 在这里处理提交逻辑
    console.log('提交按钮被点击');
    // 例如，可以在这里调用表单提交的方法或发送数据到服务器
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad(options) {
    this.setData({
      beginDate: this.getCurrentDate(),
      beginTime: this.getCurrentTime(),
      endDate: this.getCurrentDate(),
      endTime: this.getCurrentTime()
    });


    // 逐级选择器
    let state = {
      arr: [],
      arr1: [],
      arr2: [],
      arr3: [],
      multiIds: []
    }
    this.data.multiArray.map((v, vk) => {
      state.arr1.push(v.label);
      if (this.data.multiIndex[0] === vk) {
        state.multiIds[0] = v;
      }
      if (state.arr2.length <= 0) {
        v.children.map((c, ck) => {
          state.arr2.push(c.label);
          if (this.data.multiIndex[1] === ck) {
            state.multiIds[1] = c;
          }
          if (state.arr3.length <= 0) {
            c.children.map((t, tk) => {
              state.arr3.push(t.label);
              if (this.data.multiIndex[2] === tk) {
                state.multiIds[2] = t;
              }
            });
          }
        });
      }
    });
    state.arr[0] = state.arr1;
    state.arr[1] = state.arr2;
    state.arr[2] = state.arr3;
    this.setData({
      newArr: state.arr,
      multiIds: state.multiIds,
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