<?php
  //1:使用php向客户端输入1个*
  echo "*";
  echo "<hr/>";
  //2:使用php向客户端输入50个*
  $star = "*";
  for($i=0;$i<50;$i++){
      echo $star;
  }
  //3:使用php向客户端输入九九乘法表
  //php运算符与js不同 拼接字符串js+ php.
  for($i=1;$i<=9;$i++){
     for($j=1;$j<=$i;$j++){
	    echo $j."*".$i."=".($i*$j)."&nbsp;";
	 }
     echo "<br />";
  }
?>