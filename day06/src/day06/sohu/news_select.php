<?php
  //功能：完成新闻查询 array->html 输出
  //1:创建数据库连接
  //2:设置编码
  require("01_init.php");
  //3:创建SQL语句并且发送SQL
  $sql = "SELECT * FROM news";
  $result = mysqli_query($conn,$sql);
  //4:抓取多行记录
  $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //5:将数据转换html输出 tr td ..
  $html = "";
  foreach($rows as $k=>$v){
     $html .= "<tr>";
     $html .= "<td>$v[nid]</td><td>$v[title]</td>";
     $html .= "</tr>";
  }
  echo $html;
?>