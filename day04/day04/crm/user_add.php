<?php
 //功能:用户注册
 //1:获取用户参数 uname upwd headpi
 @$u = $_REQUEST["uname"]or die("用户名必须的");
 @$p = $_REQUEST["upwd"]or die("密码必须的");
 @$c = $_REQUEST["headpi"]or die("头像必须的");
 //2:创建连接
 //3:设置编码
 require("01_init.php");
 //4:创建SQL语句并且发送SQL
 $sql = "INSERT INTO user VALUES(null,'$u','$p','$c',now(),0)";
 $result = mysqli_query($conn,$sql);
 //5:判断
 if($result===true){
   echo "注册成功";
 }else{
   echo "注册失败";
 }
?>