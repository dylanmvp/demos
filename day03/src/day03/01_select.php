<?php
  //10:23--10:33
  //功能:查询ifeng/news表一条记录 
  //1:创建数据库连接
  $conn = mysqli_connect("127.0.0.1","root","","ifeng");
  mysqli_query($conn,"SET NAMES UTF8");

  //2:创建SQL语句并且发送SQL
  $sql = "SELECT * FROM news WHERE nid = 1";
  $result = mysqli_query($conn,$sql);
  //3:获取返回结果 10:36--10:38
  //4:抓取一行记录 索引 关联
  //$row = mysqli_fetch_row($result);
  //5:输出数组内容
  //echo($row[0]);
  //echo($row[1]);
  //echo($row[2]);
  //echo($row[3]);
  
  
  //4:抓取一行记录 关联数组10:45--10:47
  //$row = mysqli_fetch_assoc($result);
  //var_dump($row);
  //echo $row["nid"];
  //echo $row["title"];
  //echo $row["content"];
  //echo $row["pubtime"];


  //查询多行记录
  $sql = "SELECT * FROM news";
  $result = mysqli_query($conn,$sql);
  //一次抓取多行记录
  $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
  foreach($rows as $k=>$v){
	 echo $v["nid"].":".$v["title"]."<br>";  
  }
?>