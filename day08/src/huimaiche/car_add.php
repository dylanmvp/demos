<?php
 //功能:获取参数添加汽车信息
 require("01_init.php");
 //1:获取参数:cname/price/pic/tid
 @$n = $_REQUEST["cname"]or die('{"code":-1,"msg":"名称是必须的"}');
 @$r = $_REQUEST["price"]or die('{"code":-2,"msg":"价格是必须的"}');
 @$p = $_REQUEST["pic"]or die('{"code":-3,"msg":"图片是必须的"}');
 @$t = $_REQUEST["tid"]or die('{"code":-4,"msg":"编号是必须的"}');
 //2:创建数据库连接
 //3:设置编码
 //4:创建SQL语句并且发送SQL
 $sql = "INSERT INTO car VALUES(null,'$n',$r,'$p',$t)";
 //5:判断  JSON
 $result = mysqli_query($conn,$sql);
 if($result===true){
   //. 严重错误 404 500
   echo '{"code":1,"msg":"添加成功"}';
 }else{
   echo '{"code":-5,"msg":"添加失败"}';
 }
 ?>