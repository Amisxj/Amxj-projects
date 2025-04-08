// components/self/chat/index.js
Component({
  /**
   * 组件的属性列表
   */
  properties: {
    inputvalue:{
      type:String,
      value:''
    },
    myAvatar: {
      type: String,
      value: ''
    },
    friendAvatar: {
      type: String,
      value: ''
    },
    messages:{
      type:Array,
      value:[],
    },
    message:{
      type:String,
      value:''
    },
    toBottomId:{
      type:String,
      value:''
    },
    focus:{
      type:Boolean,
      value:true
    },
    auto:{
      type:Boolean,
      value:false
    },
    bottom:{
      type:Number,
      value:''
    }
  },

  /**
   * 组件的初始数据
   */
  data: {
    bottom: 0, // 键盘高度
  },

  /**
   * 组件的方法列表
   */
  methods: {
    //调整页面键盘弹起高度
    onFocus: function(e) {
      this.setData({
        bottom: e.detail.height
      });
    },
    // 键盘收起时，重置键盘高度
    onInputBlur() {    
      this.setData({
        bottom: 0
      });
    },
   
    //获取消息发送内容
    inputMessage: function(e) {
      this.setData({
        message: e.detail.value
      });
    },
    //封装消息（id，个人，消息，时间）；重新更新消息数组、自动滚动到相应消息位置、保持键盘常输入、清空输入框的值
    sendMessage: function() {
      if (this.data.message.trim() === '') return; // 如果输入为空，则不发送
      const newMessage = {
        messageId: this.data.messages.length , // 自动生成 messageID
        mine: true, // 假设当前用户是发送者
        text: this.data.message,
        time: new Date().getTime(), // 使用时间戳     
      };
      this.setData({
        messages: [...this.data.messages, newMessage], // 添加新消息到数组
        message: '', // 清空输入框
        toBottomId: 'msg-' + (this.data.messages.length ), //  更新滚动位置
        inputValue: '',// 清空inputValue
        focus: true // 重新聚焦输入框
      });
      this.triggerEvent('updatemessages', { newMessage: newMessage }); // 将数据加载到页面中
    // 这里可以添加发送消息到服务器的代码
    },  
  }
})