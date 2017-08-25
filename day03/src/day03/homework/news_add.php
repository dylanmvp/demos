<?php
 //1:获取用户发送参数 title/content
  $t = $_REQUEST["title"];
  $c = $_REQUEST["content"];
 //2:连接数据库
 $conn =  mysqli_connect("127.0.0.1","root","","ifeng");
 mysqli_query($conn,"SET NAMES UTF8");
 
 //3:创建SQL语句，并且发送SQL
 $sql = "
INSERT INTO news VALUES(null,'$t','$c',now())";
 $result = mysqli_query($conn,$sql);
 //4:判断是否添加成功并且输出
 if($result===true){
    echo "添加成功";
 }else{
    echo "添加失败";
 }
?>