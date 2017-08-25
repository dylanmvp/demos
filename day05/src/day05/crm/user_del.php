<?php
  //功能:依据ID删除指定用户记录
  //1:获取参数
  @$uid = $_REQUEST["uid"]or die("编号是必须的");
  //2:创建连接
  //3:设置编码
  require("01_init.php");
  //4:创建SQL语句并且发送SQL
  $sql = "DELETE FROM user WHERE uid=$uid";
  $result = mysqli_query($conn,$sql);
  //5:判断
  if($result===true){
    echo "删除成功";
  }else{
    echo "删除失败";
  }
?>