<?php
header("Content-Type:application/json;charset=utf-8");
//2:创建数据库连接
$conn = mysqli_connect("127.0.0.1","root","","jd");
//3:设置编码
mysqli_query($conn,"SET NAMES UTF8");
?>