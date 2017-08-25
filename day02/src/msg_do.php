<?php
 //1:获取用户提交参数 content
 $c = $_REQUEST["content"];
 //2:连接数据库
 $conn = mysqli_connect("127.0.0.1","root","","jd");
 //2.1:设置发送SQL编码UTF8
 mysqli_query($conn,"SET NAMES UTF8");
 //3:创建SQL并且发送SQL
 $sql = "INSERT INTO msg VALUES(null,'$c',1)";
 $result = mysqli_query($conn,$sql);
 //4:判断结果
 if($result===true){
   echo "发表成功";
 }else{
   echo "发表失败";
 }
?>