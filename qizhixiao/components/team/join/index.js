// components/team/join/index.js
Component({
  /**
   * 组件的属性列表
   */
  properties: {
    team:{
      type:Array,
      value:[]
    },
    myAvatar: {
      type: String,
      value: ''
    },
    sex:{
      type:String,
      value:''
    },
    title: {
      type:String,
      value:''
    },
    when: {
      type:String,
      value:''
    },
    where: {
      type:String,
      value:''
    },
    whenIcon: {
      type:String,
      value:''
    },
    whereIcon: {
      type:String,
      value:''
    },
    maxPeople: { // 添加最大人数属性
      type: Number,
      value: 5
    },
    teamId: {
      type: String,
      value: ''
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
    joinTeam: function(e) {
      const teamId = e.currentTarget.dataset.teamid;
      const that = this;
      const userAvatar = that.properties.myAvatar; 
      const newAvatar = "https://www.wumingjie.online/api/images/avatar/" + userAvatar;
      // console.log(teamId);
      // console.log(userAvatar);
      
      // 在 team 数组中找到对应的团队对象
      const teamIndex = that.data.team.findIndex(function(t) {
        return t.id === teamId;
      });
      if (teamIndex !== -1) {
        const updatedTeam = that.data.team[teamIndex];

          // 检查用户是否已经加入该团队
        const alreadyJoined = updatedTeam.joinPeople.includes(newAvatar);

        if (alreadyJoined) {
          wx.showToast({
            title: '你已经加入了该团队',
            icon: 'none'
          });
        } else {
          if (!updatedTeam.isJoined) {
            // 用户尚未加入团队，加入团队
            updatedTeam.joinPeople.push(newAvatar);
            updatedTeam.isJoined = true; // 更新状态为已加入
            that.setData({
              ['team[' + teamIndex + ']']: updatedTeam
            });
            wx.request({
              url: 'https://www.wumingjie.online/api/jointeam.php',  
              method: 'POST',
              header: {
                'content-type': 'application/x-www-form-urlencoded' 
              },
              data: {
                teamId: teamId,
                userAvatar: userAvatar
              },
              success(res) {
                if (res.data.success) {
                  wx.showToast({
                    title: '加入成功',
                    icon: 'success'
                  });
                } else {
                  // 显示错误消息
                  wx.showToast({
                    title: res.data.message || '加入失败',
                    icon: 'none'
                  });
                }
              },
              fail() {
                wx.showToast({
                  title: '请求失败',
                  icon: 'none'
                });
              }
            });
          } else {
            wx.request({
              url: 'https://www.wumingjie.online/api/cancelteam.php', // 替换为你的取消加入团队API
              method: 'POST',
              header: {
                'content-type': 'application/x-www-form-urlencoded' // 设置请求头
              },
              data: {
                teamId: teamId, 
                userAvatar: userAvatar
              },
              success(res) {
                console.log(res.data)
                if (res.data.success) {
                  wx.showToast({
                    title: '取消加入成功',
                    icon: 'success'
                  });
                  // 更新页面数据
                  // 用户已加入团队，取消加入
                  updatedTeam.joinPeople = updatedTeam.joinPeople.filter(function(avatar) {
                    return avatar !== newAvatar;
                  });
                  updatedTeam.isJoined = false; // 更新状态为未加入
                  that.setData({
                    ['team[' + teamIndex + ']']: updatedTeam
                  }); 
                } else {
                  // 显示错误消息
                  wx.showToast({
                    title: res.data.message || '取消加入失败',
                    icon: 'none'
                  });
                }
              },
              fail() {
                wx.showToast({
                  title: '请求失败',
                  icon: 'none'
                });
              }
            });
          
          }
        }
      }
    }
  }
})