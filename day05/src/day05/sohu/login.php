<?php
  //1:获取用户传递参数 uname upwd
  @$u=$_REQUEST["uname"]or die("用户名是必须的");
  @$p=$_REQUEST["upwd"]or die("密码是必须的");
  //2:创建数据库连接
  require("01_init.php");
  //3:创建SQL语句并且发送SQL
  $sql = "SELECT * FROM user WHERE uname = '$u' AND upwd= '$p'";
  //4:抓取返回记录
  $result = mysqli_query($conn,$sql);
  $row  = mysqli_fetch_assoc($result);
  if($row===NULL){
     echo "用户名或密码有误";
  }else{
     echo "登录成功";
  }
  //5:判断登录是否成功 登录成功 用户名或密码有误
?>