<?php
//1:获取参数 uname upwd
@$u = $_REQUEST["uname"] or die("用户名必须的");
@$p = $_REQUEST["upwd"] or die("密码必须的");
//2:创建数据库连接
//3:设置编码
require("01_init.php");
//4:创建SQL1并且发送SQL1
$sql = "SELECT * FROM user WHERE uname='$u' AND upwd='$p'";
$result = mysqli_query($conn,$sql);
//5:抓取一行关联
$row = mysqli_fetch_assoc($result);
//6:??判断查询成功
if($row!==NULL){
 //7:正确
 //8:创建SQL2并且发送SQL2
 $sql = "UPDATE user SET logincount = logincount+1 WHERE uname='$u'";
 $result = mysqli_query($conn,$sql);
 //9:判断
 if($result===true){
  //10:登录成功
  echo "登录成功";
 }
}else{
  echo "用户名或密码有误";
}