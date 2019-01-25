<?php
	//匿名函数,一个函数没有名字
	$name = function ()
		{
			echo "hello";
		};

	$name();

	//匿名函数主要使用回调函数汇总用
	echo "<br>";
	$a =[11,12,13,14,15,16,17,18,19,20];
	$b = array_filter($a,"fun");		//过滤数组
	print_r($b);

	function fun($v)
	{
		return $v % 2 == 0; 			//一个数模2等于0，为偶数
	}

	//使用匿名函数
	echo "<br>";
	print_r(array_filter($b,function($v){return $v % 2 == 0;}));

	//递归函数	非常消耗资源，一般在大型网站中禁用
	echo "<br>";
	echo "我不学这个玩意儿了！";

	//PHP文件的导入
	echo "<br>";
	// require ("./functions.php");	  相当于直接复制黏贴文件过来
	include ("./functions.php");	//indlede导入当程序失败的时候会继续执行下一行。require则停止程序。
	echo add(100,100);

	//数组	数组是可以在一个变量中储存多个值得特殊结构
	echo "<br>";		//指定索引，从指定的数字开始
	$car[1] = "飞鸽";
	$car[2] = "永久";
	$car[3] = "OFO";
	print_r($car);

	echo "<br>";		//不指定索引，PHP默认从0开始
	$pc[] = "lenovo";
	$pc[] = "dell";
	$pc[] = "mac";
	print_r($pc);

	echo "<br>";		//关联数组:常用
	$woman['dalaopo'] = "zhaoliyin";
	$woman['erlaopo'] = "shanyuxin";
	$woman['sanlaopo'] = "dengziqi";
	print_r($woman);

	echo "<br>";
	//如何从数组中取值
	//数组中取值是要按照索引
	echo $woman[dalaopo];
	echo "<br>";
	echo $car[1];

	echo "<br>";
	//混合数组，数组中既有数值数组也有关联数组
	$hhsz = [1 => "A", "two" => "B"];
	print_r($hhsz);

	echo "<br>";
	//多维数组，数组中有数组,维度大于等于2
	$dwsz = array("a" => array(1 => "one", 2 => array("wo" => "czh","ni" => "hz"),3 => "three"),"c" => "C");
	echo "<pre>";
	print_r($dwsz);

	
