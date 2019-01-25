<?php
	/*
	//使用正则表达式验证信息
	//1.获取信息
	$age = $_POST["age"];
	$qq = $_POST["qq"];
	$email = $_POST["email"];

	//2.验证信息
	//先验证qq,必须是数字
	if (!is_numeric($qq)) {
		echo "您输入的不是数字!";
	}

	if (!preg_match("/^[0-9]{6,11}/", $qq)) {
		die("QQ格式错误!");
	}
	echo "ok!";

	//年龄验证
	if (!preg_match("/^[1-9][0-9]?$/", $age)) {
		die("您活的太久了!");
	}

	//验证邮箱
	if (!preg_match("/[0-9a-zA-Z_]{1,18}@[0-9a-zA-Z]+(\.[a-zA-Z]{2,}){1,2}/", $email)) {
		die("邮箱格式错误!");
	}
	*/

	//正则表达式匹配查找
	//只能匹配一次
	preg_match("/[0-9]{2,}/","abc12d22d",$a);
	echo "<pre>";
	var_dump($a);
	echo "<br>";

	//匹配多次
	preg_match_all("/[0-9]{2,}/","abc12d22d",$b);
	echo "<pre>";
	var_dump($b);
	echo "<br>";

	//贪婪模式
	//匹配字符串中B标签的内容
	$str = "<b>AAAA</b><b>BBBBBB</b><b>CCCCC</b>";
	preg_match_all("/<b>.+<\/b>/", $str, $c);
	var_dump($c);

	//拒绝贪婪,在定界符之后加拒接贪婪模式的修正符U
	$str = "<b>AAAA</b><b>BBBBBB</b><b>CCCCC</b>";
	preg_match_all("/<b>.+<\/b>/U", $str, $c);
	var_dump($c);

	//第二种拒绝贪婪模式 .+? 或者.*?
	$str = "<b>AAAA</b><b>BBBBBB</b><b>CCCCC</b>";
	preg_match_all("/<b>.+?<\/b>/", $str, $c);
	var_dump($c);

	//重复模式单元
	// \\1的意思是匹配到前面第一个()里的内容
	$a = array("2017-1-2","2018-1-2","2019,1,2","2018-12,2");
	echo "<br>";
	$b = preg_grep("/[0-9]{4}([-,])[0-9]\\1[0-9]{2}/", $a);
	echo "<pre>";
	print_r($b);
	echo "<br>";

	//正则表达式的搜索和替换
	$str = "21,22,33,454,656,242,214,2402";
	//将上面的字符串中的数字分隔符替换为空格
	echo preg_replace("/[^0-9]+/"," ", $str);


	//请将字符串2017-4-18替换为美国格式4/18/2017
	echo "<br>";
	$a = "2017-4-18";
	echo preg_replace("/([0-9]{4})-([0-9])-([0-9]{2})/", "\\2/\\3/\\1", $a);

	//将字符串拆分
	//explode (",",$str); 处理速度更快.函数处理不了的时候用正则表达式.
	echo "<br>";
	$str = "1,2,3,4,5,6,7,8,9,10";
	$a = preg_split("/[^0-9]+/", $str);
	var_dump($a);


	//PHP的时间和日期
	//1970年1月1日0时0秒  计算机元年
	echo "<br>";
	echo time();	//197001010000到现在的此时此刻的描述
	echo "<br>";
	echo mktime();
	echo "<br>";
	echo strtotime("now");


	//格式化时间戳
	echo "<br>";
	date_default_timezone_set("Asia/Shanghai");
	echo date("Y年m月d日H时i分s秒",time());

	//获取固定时间的时间戳199005061315
	echo "<br>";
	echo date("Y年m月d日H时i分s秒",mktime(13,15,15,5,6,1990));

	echo "<br>";
	echo date("Y年m月d日H时i分s秒",strtotime("1990-5-6 13:15:13"));

	//微妙
	//echo time(); 获取秒
	$stime =  microtime(ture);
	echo $stime;
	echo "<hr>";
	echo ($stime - time());

	//计算器运行速度
	/*

	echo "<hr>";
	$zhiqian = microtime(ture);
	//比较数值
	for ($i=0; $i < 1000000 ; $i++) { 
		if (123 <12345) {
			
		}
	}
	echo "千万次数值比较运算耗时:".(microtime(ture) - $zhiqian);
	echo "<hr>";
	$zhiqian = microtime(ture);
	for ($i=0; $i < 1000000 ; $i++) { 
		if (ac <ad) {
			
		}
	}
	echo "千万次字符串比较运算耗时:".(microtime(ture) - $zhiqian);

	*/
