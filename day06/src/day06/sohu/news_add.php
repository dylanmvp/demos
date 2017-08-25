<?php
  //案例：添加新闻
  //1:获取用户参数 title/content
  @$t = $_REQUEST["title"] or die("标题是必须的");
  @$c = $_REQUEST["content"] or die("内容是必须的");
  //2:创建数据库连接
  require("01_init.php");
  //3:创建SQL语句，并且发送SQL
  $sql = "INSERT INTO news VALUES(null,'$t','$c',now(),0)";
  //4:判断输出结果  "添加成功" "添加失败"
  $result = mysqli_query($conn,$sql);
  if($result===true){
	  echo "添加成功";
  }else{
      echo "添加失败";
  }

?>