<?php
  //1:修改服务器响应格式javascript
  header("Content-Type:application/javascript;charset=utf-8");
  //sleep(10);//睡眠10秒
  //2:创建变量$temp=35.5;
  $temp = 35.5;
  //3:获取参数 callback=f2
  @$cb = $_REQUEST["callback"];
  //4:调用输出
  echo $cb.'('.$temp.')';
?>