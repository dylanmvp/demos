<?php
 //功能:查询用户列表并且完删除一部分功能
 //1:创建数据库连接
 //2:设置编码
 require("01_init.php");
 //3:创建SQL语句并且发送SQL
 $sql = "SELECT * FROM user";
 $result = mysqli_query($conn,$sql);
 //4:抓取多行记录
 $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
	   <td>用户名</td>
	   <td>操作</td>
	 </tr>
	</thead>
    <tbody id="tb1">
     <?php
	   foreach($rows as $k=>$v){
         echo "<tr>";
		 echo "<td>$v[uid]</td>";
		 echo "<td>$v[uname]</td>"; 
		 echo "<td>";
		 echo "<span class='btn-del' id='$v[uid]'>X</span>";
		 echo "</td>";
		 echo "</tr>";
	   }  
	 ?>
	</tbody>
  </table>
  <script>
       tb1.onclick = function(e){
		   var target = e.target;
		   if(target.className=="btn-del"){
			   var id = target.getAttribute("id");
               var rs = window.confirm("是否删除");
			   if(rs){
			     location.href = "user_del.php?uid="+id;
			   }
		   }
	   } 
  </script>

</body>
</html>