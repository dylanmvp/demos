<?php
//1:获取用户传入参数
//  用户名/邮件/内容
@$u = $_REQUEST["uname"]or die("用户名是必须的");
@$e = $_REQUEST["email"]or die("邮件是必须的");
@$c = $_REQUEST["content"]or die("内容是必须的");
//自动加载指定程序
require("01_init.php");
//4:创建SQL语句并且发送SQL
$sql = "INSERT INTO msg VALUES(null,'$u','$c','$e',now())";
$result = mysqli_query($conn,$sql);
//出错以后调试程序
//显示SQL中出错信息
//echo mysqli_error($conn);
//5:判断
if($result===true){
	echo "留言发表成功";
}else{
    echo "留言发表失败";
}
//如果执行失败
//90%  sql 错误
//10%  数据库连接 设置编码
?>

 