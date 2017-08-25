<?php
 //1:连接mysql数据库
   //参数1:数据库服务器主机名称  "127.0.0.1"
   //参数2:用户名  root
   //参数3:密码    ""
   //参数4:库名    "jd"
  $conn =  mysqli_connect("127.0.0.1","root","","jd");
 //2:创建SQL并且发送sql指令
  $sql = "INSERT INTO user VALUES(99,'kk','123')";
  $result = mysqli_query($conn,$sql);
 //3:获取返回结果并且判断
  if($result===true){
    echo "添加成功";
  }else{
    echo "添加失败";
  }
?>