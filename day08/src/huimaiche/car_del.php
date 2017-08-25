<?php
  //功能:删除指定id的汽车
  //0:加载init.php文件
  require("01_init.php");
  //1:获取参数 cid
  @$cid = $_REQUEST["cid"]or die('{"code":-2,"msg":"编号是必须"}');
  //2:创建数据库连接
  //3:设置编码
  //4:创建SQL语句，并且发送SQL语句
  $sql = "DELETE FROM car WHERE cid=$cid";
  $result = mysqli_query($conn,$sql);
  //5:判断输出 json
  if($result===true){
   echo '{"code":1,"msg":"删除成功"}';
  }else{
   echo '{"code":-1,"msg":"删除失败"}';
  }

?>