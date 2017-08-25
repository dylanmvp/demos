<?php
//1:获取参数cid
@$cid = $_REQUEST["cid"]or die('{"code":-1,"msg":"编号是必须的"}');
//2:创建数据库连接
//3:设置编码
require("01_init.php");
//4:创建SQL语句并且发送SQL
$sql = "DELETE FROM cake WHERE cid=$cid";
$result = mysqli_query($conn,$sql);
//5:判断
if($result==true){
 echo '{"code":1,"msg":"删除成功"}';
}else{
 echo '{"code":-2,"msg":"删除失败"}';
}

