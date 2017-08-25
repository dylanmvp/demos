<?php
//练习1:创建一个关联数组保存图书信息
//bid:100,bname:"js",price:100
$arr1 = ["bid"=>100,"bname"=>"js","price"=>100];
//var_dump($arr1);
//创建一个空数组
$arr2 = [];
$arr2[]= ["bid"=>1,"bname"=>"js","price"=>1,"pic"=>"1.jpg"];
$arr2[]= ["bid"=>2,"bname"=>"css","price"=>2,"pic"=>"1.jpg"];
$arr2[]= ["bid"=>3,"bname"=>"html","price"=>3,"pic"=>"1.jpg"];
echo "<table border='1' width='80%'>";
foreach($arr2 as $k=>$v){
 echo "<tr>"; 
 echo "<td>$v[bid]</td><td>$v[bname]</td>";
 echo "<td>$v[price]</td><td>$v[pic]</td>";
 echo "</tr>";
}
echo "</table>";	

?>