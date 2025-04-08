// components/login/card/index.js
Component({

  /**
   * 组件的属性列表
   */
  properties: {
    defaultType: {
      type:Boolean,
      value: false
    },
    passwordType: {
      type:Boolean,
      value:true
    },
    inputValue:{
      type:String,
      value:''
    } , 
    showImg: {
      type:Boolean,
      value:false
    },
    checked: {
      type:Boolean,
      value:false
    },
    user:[]    
  },

  /**
   * 组件的初始数据
   */
  data: {
    account: '',
    password: '',
    checked: false // 用户是否勾选了协议
  },

  /**
   * 组件的方法列表
   */
  methods: {
    eyeStatus: function() {
      this.setData({
        defaultType: !this.data.defaultType,
        passwordType: !this.data.passwordType
      });
    },
    checkedTap: function(e) {
      this.setData({
        checked: !this.data.checked // 切换单选框状态
      });
    },
    inputAccount: function(e) {
      this.setData({
        account: e.detail.value
      });
    },
    inputPassword: function(e) {
      this.setData({
        password: e.detail.value,
        inputValue: e.detail.value
      });
      // 根据输入值判断是否显示其他容器
      if (e.detail.value.trim() !== '') {
        this.setData({
          showImg: true
        });
      } else {
        this.setData({
          showImg: false
        });  
      }
    },
    formSubmit: function (e) {
      // console.log('form发生了submit事件，携带数据为：', e.detail.value);
      // 验证输入是否为空
      if (!this.data.account || !this.data.password) {
        wx.showToast({
          title: '账号和密码不能为空',
          icon: 'none'
        });
        return; // 阻止表单提交
      }
      // 验证是否勾选了协议
      if (!this.data.checked) {
        wx.showToast({
          title: '请勾选同意协议',
          icon: 'none'
        });
        return; // 阻止表单提交
      }
      const that = this;
      wx.request({
        url: 'https://www.wumingjie.online/api/login.php', // 替换为你的后端API地址
        method:'POST',
        header: {
          'content-type': 'application/x-www-form-urlencoded' // 设置请求头
        },
        data: {
          account: that.data.account,
          password: that.data.password, 
        },
        success(res) {
          if (res.data && res.data.success) {
            // 打包用户信息
            const userData = {
              id: res.data.data.id,
              avatar: res.data.data.avatar,
              name: res.data.data.name,
              nickname: res.data.data.nickname,
              number: res.data.data.number,
              phone: res.data.data.phone,
              enrollmentDates: res.data.data.enrollmentDates,
              school: res.data.data.school,
              major: res.data.data.major,
              year: res.data.data.year,
              class: res.data.data.class,
              birth : res.data.data.birth,
              account: res.data.data.account,
              gender: res.data.data.gender,
            };
            // 存储用户信息到本地存储
            wx.setStorageSync('userData', userData);
            // 使用code换取openid和session_key
            wx.login({
              success(loginRes) {
                // 可以在这里直接使用res.code
                // console.log('登录凭证code：', loginRes.code);
                if (loginRes.code) {
                  // 将code发送到服务器
                  wx.request({
                    url: 'https://www.wumingjie.online/api/session.php', 
                    method: 'POST',
                    header: {
                      'content-type': 'application/x-www-form-urlencoded' // 设置请求头
                    },
                    data: {
                      code: loginRes.code // 假设 loginRes.code 是从 wx.login 获取的
                    },
                    success: function(testRes) {
                      // console.log(testRes.data)
                      // 登录成功后存储 session_key 和 openid
                      if (testRes.data && testRes.data['3rd_session']) {
                        // 存储 3rd_session 到本地存储
                        wx.setStorageSync('3rd_session', testRes.data['3rd_session']);
                        wx.showToast({
                          title: '登录成功',
                          icon: 'success',
                          duration: 2000,
                          complete: function() {
                            wx.switchTab({
                              url: '/pages/index/index'
                            });
                          }
                        });
                      } else if (testRes.data && testRes.data.error) {
                        wx.showToast({
                          title: testRes.data.error, // 显示后端返回的错误消息
                          icon: 'none'
                        });
                      } else {
                        wx.showToast({
                          title: '登录失败', // 通用错误消息
                          icon: 'none'
                        });
                      }
                    },
                    fail: function() {
                      wx.showToast({
                        title: '请求失败，请检查网络',
                        icon: 'none'
                      });
                    }
                  });
                } else {
                  console.log('登录失败！' + loginRes.errMsg);
                }
              }
            });
          } else {
            wx.showToast({
              title: res.data.message, // 显示后端返回的消息
              icon: 'none'
            });
          }
        },
        fail: function() {
          wx.showToast({
            title: '请求失败，请检查网络' ,
            icon: 'none'
          });
        }
      });
      this.setData({
        warn: "",
        isSubmit: true,
      })
    },
  }
})