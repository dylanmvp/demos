<?php
 //功能:删除指定编号的msg
 //1:获取用户要删除留言编号
 @$id = $_REQUEST["mid"]or die("编号是必须的");
 //2:创建数据库连接
 //3:设置编码
 require("01_init.php");
 //4:创建SQL语句，并且发送SQL
 $sql = "DELETE FROM msg WHERE id=$id";
 $result = mysqli_query($conn,$sql);
 //5:判断
 if($result===true){
   echo "删除成功";
   echo "<a href='msg_select.php'>查看列表</a>";
 }else{
   echo "删除失败";
 }
?>