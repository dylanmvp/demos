<?php
//1:获取用户发送参数 uname upwd
@$u = $_REQUEST["uname"]or die("用户名是必须的");
@$p = $_REQUEST["upwd"]or die("密码是必须的");
//2:创建数据库连接
//3:设置编码
$conn = mysqli_connect("127.0.0.1","root","","bbs");
mysqli_query($conn,"SET NAMES UTF8");
//4:创建SQL语句并且发送SQL
$sql = "INSERT INTO user VALUES(null,'$u','$p',now())";
$result = mysqli_query($conn,$sql);
//5:判断 14:25--14:30
if($result===true){
 echo "添加成功 新编号:".mysqli_insert_id($conn);
}else{
 echo "添加失败";
}
?>
