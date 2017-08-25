<?php
  //17:20--17:35
  require("01_init.php");
  //1:获取用户指定类别tid
  @$tid=$_REQUEST["tid"]or die('{"code":-1,"msg":"编号是必须的"}');
  //2:查询指定类别下所有汽车信息
  $sql = "SELECT * FROM car WHERE tid=$tid";
  $result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //3:发送汽车信息json
  echo json_encode($rows);
?>