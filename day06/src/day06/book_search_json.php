<?php
 //1:修改响应主体格式 text/html
 header("Content-Type:application/json;charset=utf-8");
 //2:获取参数 用户输入查询关键字
 @$kw = $_REQUEST["kw"]or die("<li>缺少关键字</li>");
 //3:连接数据库
 //4:设置编码
 require("01_init.php");
 //5:创建SQL语句并且发送SQL语句
 $sql = "SELECT bname FROM dd_book WHERE bname LIKE '%$kw%'";
 $result = mysqli_query($conn,$sql);
 $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
 echo json_encode($rows);
?>