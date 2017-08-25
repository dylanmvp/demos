<?php
  //php中string...
  $str = "10.0";   //声明一个字符串变量
  echo $str;
  echo "<hr/>";

  //注意事项:php 字符串单引号正确
  //                   双引号正确
  $ename = "tom";
  $age = 19;
  $info = '姓名:$ename 年龄:$age';
  echo $info;
  echo "<hr/>";
  $info = '姓名:'.$ename.'年龄:'.$age;
  echo $info;
  echo "<hr/>";
  $info = "姓名:$ename 年龄:$age";//ok
  echo $info;
  //默认情况输出文字:apache utf-8输出
  //ANSI==>utf-8
?>