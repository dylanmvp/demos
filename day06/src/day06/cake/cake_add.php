<?php
  header("Content-Type:application/json;charset=utf-8");
  //cname,price,pic,tid
  //功能：添加蛋糕信息
  //1:获取参数
  @$c=$_REQUEST["cname"]or die('{"code":-2,"msg":"名字是必须的"}');
  @$p=$_REQUEST["price"]or die('{"code":-3,"msg":"价格是必须的"}');
  @$r=$_REQUEST["pic"]or die('{"code":-4,"msg":"图片是必须的"}');
  @$t=$_REQUEST["tid"]or die('{"code":-5,"msg":"类别编号是必须的"}');
  //2:创建数据库连接
  //3:设置编码
  require("01_init.php");
  //4:创建SQL语句并且发送SQL
  $sql = "INSERT INTO cake VALUES(null,'$c',$p,'$r',$t)";
  $result = mysqli_query($conn,$sql);
  //5:判断
  //6:输出结果 json
  if($result===true){
    echo '{"code":1,"msg":"添加成功"}';
  }else{
    echo '{"code":-1,"msg":"添加失败"}';
  }
?>