<?php
  //功能:user中所有记录查询并且以表格形式输出
  //1:创建数据库连接
  $conn = mysqli_connect("127.0.0.1","root","","bbs");
  mysqli_query($conn,"SET NAMES UTF8");
  //2:创建SQL SELECT * FROM user 并且发送
  $sql = "SELECT * FROM user";
  $result = mysqli_query($conn,$sql);
  //3:抓取多行记录
  $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //4:按照表格形式输出..
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <table border="1" width="80%">
    <thead>
	 <tr>
	   <td>用户编号</td>
	   <td>用户名称</td>
	   <td>注册时间</td>
	   <td>操作</td>
	 </tr>
	</thead>
	<tbody>
      <?php
	    foreach($rows as $k=>$v){
		  echo "<tr>";
		  echo "<td>$v[uid]</td>";//php
		  echo "<td>$v[uname]</td>";
		  echo "<td>$v[regtime]</td>";
		  echo "<td></td>";
		  echo "</tr>";
		}
	  ?>
	</tbody>
  </table>
</body>
</html>