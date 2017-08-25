<?php
//1:获取参数uname
@$u = $_REQUEST["uname"]or die("用户名是必须的");
//2:创建数据库连接
//3:设置编码
require("01_init.php");
//4:创建SQL语句并且发送SQL语句
//5:抓取一行记录
$sql = "SELECT * FROM user WHERE uname='$u'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
//6:判断
//7:输出
if($row===NULL){
  echo "欢迎使用";
}else{
  echo "该用户名己被占用";
}