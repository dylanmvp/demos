<?php
//案例:读取客户端浏览器首选语言
//zh 输出 你好
//en 输出 hello
//1:修改响应主体格式javascript
header("Content-Type:application/javascript;charset=utf-8");
//2:读取客户端浏览器首选语言,请求头部 
//  Accept-Language,截取前二个字母
//2.1读取所有请求头部
$list = getallheaders();
//2.2再读取首选语句
$lang = $list["Accept-Language"];
$start2 = substr($lang,0,2);
//3:判断 en  zh
if($start2==="zh"){
  echo 'var msg="你好";alert(msg);';
}else if($start2==="en"){
  echo 'var msg="hello";alert(msg);';
}else{
  echo 'var msg="hello";alert(msg);';
}
?>