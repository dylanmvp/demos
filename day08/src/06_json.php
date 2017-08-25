<?php
  //1:修改服务器响应格式javascript
  header("Content-Type:application/javascript;charset=utf-8");
  //2:创建变量$temp=35.5;
  $temp = 35.5;
  //3:输出echo doResponse('$temp');
  echo "doResponse('$temp')";
?>