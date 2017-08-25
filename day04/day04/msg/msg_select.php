<?php
  //1:创建数据库连接
  //2:设置编码
  require("01_init.php");
  //3:创建SQL发送SQL语句
  $sql = "SELECT * FROM msg";
  $result = mysqli_query($conn,$sql);
  //4:抓取多条记录
  $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<h1>添加留言</h1>
  <table border="1" width="90%">
    <thead>
	 <tr>
	  <td>编号</td>
	  <td>内容</td>
      <td>操作</td>
	 </tr>
	</thead>
	<tbody id="tb1">
	 <?php
	   foreach($rows as $k=>$v){
	     echo "<tr>";
		 echo "<td>$v[id]</td>";
		 echo "<td>$v[content]</td>";
		 echo "<td>";
		 echo "<span id='$v[id]' class='btn-del'>X</span>";
		 echo "</td>";
		 echo "</tr>";
	   }
	 ?>
	</tbody>
  </table>
  <script>
        //所为所有 "X" 绑定点击事件
        tb1.onclick = function(e){
           //1:获取当前目标对象
		   var target = e.target;
           //2:判断只处理删除按钮
		   if(target.className==="btn-del"){
		     //3:获取留言id
			 var id = target.getAttribute("id");
			 //4:确认框
			 var rs = window.confirm("是否确认要删除该记录?");
             //5:判断是否删除
			 if(rs){
               //6:自动跳转删除留言程序
			   location.href = "msg_del.php?mid="+id;
			 }
		   }
		}
  </script>
</body>
</html>