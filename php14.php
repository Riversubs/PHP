<?php
	//多维数组定义
	echo "<h2>多维数组定义</h2>";
	$list = array(
				array("name" => "小青","sex" => "girl", "age" => "18"),
				array("name" => "小青1","sex" => "girl", "age" => "18"),
				array("name" => "小青2","sex" => "girl", "age" => "18"),
				array("name" => "小青3","sex" => "girl", "age" => "18"),
				array("name" => "小青4","sex" => "girl", "age" => "18"),
				array("name" => "小青5","sex" => "girl", "age" => "18"),
	);
	echo "<pre>";
	print_r($list);

	//多维数组取值
	echo "<h2>多维数组取值</h2>";
	echo "<br>";
	echo $list[2]["name"];

	//数值数组遍历,批量打印数组中的值,就是使用循环数组。
	//count,计算数组长度。
	echo "<br>";
	echo "<h2>数值数组遍历</h2>";
	$list2 = array("A","B","C","D","E","F","G","H");
	for($i = 0; $i < count($list2); $i++) {
		echo $list2[$i]."<br>";
	};

	//关联数组遍历
	echo "<h2>关联数组遍历</h2>";
	echo "<br>";
	$list3 = array(
				"name"	=>	"小青",
				"sex"	=>	"女",
				"age"	=>	"18",
	);
	echo "<pre>";
	//array_valuse 可以把数组使用索引为0开始重新排列
	$f = array_values($list3);
	for($i = 0; $i <= 3; $i++) {
		echo $f[$i]."<br>";
	};

	//PHP中最常用的遍历：foreach
	//如果as后面只有一个变量，那么会把数组中的值放入这个变量中
	echo "<br>";
	echo "<h2>PHP中最常用的遍历：foreach</h2>";
	$list4 = array("A","B","C","D","E","F","G","H");
	foreach($list4 as $values) {
		echo $values."<br>";
	};

	echo "<br>";
	//即输出键，又输出值
	$list5 = array(
				"name"	=>	"小青",
				"sex"	=>	"女",
				"age"	=>	"18",
	);
	echo "<pre>";
	foreach($list5 as $key => $v) {
		echo $key." = ".$v."<br>";
	};

	//超全局数组（预定义数组）
	echo "<br>";
	echo "<h2>超全局数组（预定义数组)</h2>";
	echo "<pre>";
	print_r($_SERVER);
	echo "服务器名称：".$_SERVER["SERVER_NAME"]."<br>";
	echo "服务器IP：".$_SERVER["SERVER_ADDR"]."<br>";
	echo "服务器端口：".$_SERVER["SERVER_PORT"]."<br>";

	//$_GET $_POST $_REQUEST	//用来接收表单传送的值
	//会在地址栏中显示，不安全，不要进行私密操作
	//有长度限制
	echo "<br>";
	echo "<h2>GET接收表单的值</h2>";
	echo "姓名：".$_GET["name"]."<br>";
	echo "年龄：".$_GET["age"]."<br>";

	//$_POST
	//相对于GET比较安全
	//不会在地址栏中显示
	//没有长度限制
	echo "<br>";
	echo "<h2>POST接收表单的值</h2>";
	echo "姓名：".$_POST["name"]."<br>";
	echo "年龄：".$_POST["age"]."<br>";

	//REQUEST
	//GET POST两种传送值都能接收
	//不推荐，用什么方式送，就用什么方式接r
	echo "<br>";
	echo "<h2>REQUEST</h2>";
	echo "姓名：".$_REQUEST["name"]."<br>";
	echo "年龄：".$_REQUEST["age"]."<br>";

	//数组函数
	echo "<br>";
	echo "<h2>PHP中的常用数组函数</h2>"."<br>";
	echo "1.数组的键值操作函数"."<br>";
	$a = ["a" => "aaa","b" => "bbb", "c" => "ccc"];

	echo "原数组"."<br>";
	print_r($a);
	//获取数组中的键和值按照索引从0开始排列
	echo "<hr>";
	print_r(array_values($a));

	//获取数组中的键
	echo "<hr>";
	print_r(array_keys($a));

	//进行键值交换
	echo "<hr>";
	print_r(array_flip($a));

	//自定义一个键值交换
	echo "<hr>";
	function my_array_flip($m){
		//定义一个空数组用来存放交换之后的新数组
		$result = [];
		//使用foreach把键和值都拿到
		foreach ($m as $k => $v) {
			//把值放到键的位置上，把键放到值得位置上
			$result[$v] = $k;
		}
		return $result;
	}

	print_r(my_array_flip($a));

	//把数组单元顺序对调
	echo "<hr>";
	print_r(array_reverse($a));

	echo "<br>";
	echo "2.数组统计函数"."<br>";
	$a = array(1,22,33,44,66,444,333,222,876,123,456,22,1,33);
	echo "原数组"."<br>";
	print_r($a);

	//count统计数组中元素的个数
	echo "<hr>";
	echo "数组的长度是：".count($a);

	//自定义一个统计数组长度函数
	echo "<hr>";
	function my_count($m){
		//自定义一个变量用来存放计算后的值
		$i = 0;
		foreach ($m as $v) {
			$i ++;
		}
		return $i;
	}

	echo "自定函数计算出的数组长度：".my_count($a);

	//去除重复
	echo "<hr>";
	print_r(array_unique($a));

	echo "<br>";
	echo "3.数组排序"."<br>";
	$a = array(a,b,c,d,e,f,g,h,i,j,k,l,m,n);
	echo "原数组"."<br>";
	print_r($a);

	//sort不保持索引的升序排序
	echo "<hr>";
	sort($a);
	print_r($a);

	//asort保持索引的升序排序
	echo "<hr>";
	asort($a);
	print_r($a);

	//rsort不保持索引的降序排序
	echo "<hr>";
	rsort($a);
	print_r($a);

	//arsort保持索引的降序排序
	echo "<hr>";
	arsort($a);
	print_r($a);

	echo "<br>";
	echo "4.数组内容操作函数"."<br>";
	$a = array(a,b,c,d,e,f,g,h,i,j,k,l,m,n);
	echo "原数组"."<br>";
	print_r($a);

	//去除数组中的部分
	echo "<hr>";
	$b = array_slice($a,1,3);
	print_r($b);