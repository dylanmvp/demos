<?php
 require("01_init.php");
 //1:获取客户端传递参数 tid
 @$tid = $_REQUEST["tid"]or die('{"code":-1,"msg":"编码不能为空"}');
 //2:创建数据库连接
 //3:设置编码
 //4:创建SQL语句并且发送SQL
 //5:抓取多行记录
 $sql = "SELECT * FROM cake WHERE tid=$tid";
 $result = mysqli_query($conn,$sql);
 $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
 //6:将数组转换json字符串输出
 echo json_encode($rows);
?>