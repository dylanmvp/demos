<?php
 //1:获取参数 uname
 @$t = $_REQUEST["uname"]or die("用户名是必须的");
 //2:创建数据库连接
 $conn = mysqli_connect("127.0.0.1","root","","bbs");
 mysqli_query($conn,"SET NAMES UTF8");
 //3:创建SQL并且发送SQL
 //如果SQL写错了，忘记了/sql
 $sql = "DELETE FROM user WHERE uname='$t'";
 $result = mysqli_query($conn,$sql);
 //4:判断??
 if($result===true){
   if(mysqli_affected_rows($conn)>0){
     echo "删除成功";
   }else{
     echo "删除记录不存在";
   }
 }else{
   echo "删除失败";
 }
?>