<?php
 //1:修改响应主体格式xml
header("Content-Type:application/xml;charset=utf-8");
 //2:输出xml
 echo "<?xml version='1.0' encoding='utf-8'?>";
 echo "<books>";
 echo "<book>js指南</book>";
 echo "<book>js大全</book>";
 echo "</books>";
?>