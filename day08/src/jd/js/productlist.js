//功能点一:异步加载页头与页尾
$(function(){
  //1:加载页头
  $("#header").load("data/header.php");
  //2:加载页尾
  $("#footer").load("data/footer.php");
});


//功能点二:完成登录功能
//1:创建全局变量登录用户名
//2:创建全局变量登录用户编号
var loginUname = null;
var loginUid = null;
//3:为登录按钮绑定点击事件
$("#bt-login").click(function(){
  //4:获取用户名密码
  var u = $("[name='uname']").val();
  var p = $("[name='upwd']").val();
  //5:发送ajax POST请求
  $.ajax({
     type:"POST",
     url:"data/user_login.php",
     data:{uname:u,upwd:p},
     success:function(data){
       if(data.code<0){
         //登录失败显示错误消息
         $("p.alert").html(data.msg);
       }else{
         //隐藏模态对话框
         $(".modal").hide();
         //欢迎回来
         $("#wel1").html("欢迎"+u);
         //保存用户名和密码
         loginUname = u;//保存用户名
         loginUid = data.uid;//保存用户编号
       }
     },
     error:function(){
       alert("网络出现故障，请检查您的网络!");
     }
  });
  //6:接收返回数据结果
  //7:如果登录成功
  // 7.1:隐藏登录框
  // 7.2:欢迎回来
  // 7.3:保存用户名和用户编号
 // 8:显示错误信息


});
