<?php
  //0:加载init.php
  require("01_init.php");
  //1:获取参数cid
  @$cid = $_REQUEST["cid"]or die('{"code":-2,"msg":"编号是必须的"}');
  //2:创建数据库连接
  //3:设置编码
  //4:创建SQL语句并且发送SQL
  $sql = "SELECT * FROM car WHERE cid=$cid";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  //5:抓取一行数据
  //6:发送json
  echo json_encode($row);
?>