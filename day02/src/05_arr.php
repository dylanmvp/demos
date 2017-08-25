<?php
  //phpinfo();  5.6
  //php中array...
  //1:数组分类
  //#索引数组:下标自动生成
  //#关联数组:下标需要手工指定
  //2:使用数组
  //(1)声明
    $arr1 = array(10,20,100,9);  //旧版本5.3-
	$arr2 = [10,20,100,9];       //新版本5.4+
  //(2)读取数组元素
    echo $arr2[2]."<br/>";
  //(3)循环数组元素
    //echo count($arr2);
    for($i=0;$i<count($arr2);$i++){
	  echo $arr2[$i]."<br/>";
	}
  //(4)向数组末尾追加元素
    $arr2[] = 101;
	var_dump($arr2);

	//关联数组
	//1:声明
    $arr3 = ["eid"=>1,"ename"=>"tom"];
	//2:读取元素
	echo $arr3["ename"];
	//3:循环
    foreach($arr3 as $k=>$v){
       echo "$k = $v <br/>";
	}

?>