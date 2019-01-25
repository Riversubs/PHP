<?php
	//数组的合并函数
	echo "1.使用array_combine进行数组键值合并"."<br>";
	$a = ["A","B","C","D"];
	$b = ["aa","bb","cc","dd"];
	print_r(array_combine($a, $b));
	echo "<hr>";

	echo "2.使用array_merge进行数组收尾合并"."<br>";
	print_r(array_merge($a,$b));
	echo "<hr>";

	echo "3.把一个二维数组遍历输出到浏览器"."<br>";
	$list = array(
				array("name" => "小青","sex" => "girl", "age" => "18"),
				array("name" => "小青1","sex" => "girl", "age" => "18"),
				array("name" => "小青2","sex" => "girl", "age" => "18"),
				array("name" => "小青3","sex" => "girl", "age" => "18"),
				array("name" => "小青4","sex" => "girl", "age" => "18"),
				array("name" => "小青5","sex" => "girl", "age" => "18"),
	);
	echo "<table width='500' border='1'>";
	echo "<tr><th>name</th><th>sex</th><th>age</th></tr>";
	foreach ($list as $v) {
		echo "<tr>";
		foreach ($v as $values) {
			echo "<td>$values</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<hr>";

	echo "4.字符串";
	echo "<br>";
	echo "aaa"."<br>";
	print "bbb"."<br>";
	var_dump(ccc);

	echo "<hr>"."5.常用字符串处理函数"."<br>";
	//ltrim();	去除左侧多余的字符，默认删除空格
	//rtrim();	去除右侧多余的字符，默认删除空格
	//trim();	去除两侧多余的字符，默认删除空格
	$str = " abc ";
	echo "&".$str."&"."<br>";
	echo "&".ltrim($str)."&"."<br>";
	echo "&".rtrim($str)."&"."<br>";
	echo "&".trim($str)."&"."<br>";

	//指定去除字符
	$str1 = "abc@@";
	echo rtrim($str1,"@")."<br>";

	//输出1-10，每个数字使用，隔开；
	$s = "";
	for ($i=1; $i <= 10; $i++) { 
		$s .= "$i".",";		//等价于$s = $s.($i.",");
	}
	echo rtrim($s,",")."<br>";

	//将目录和文件拼装为一个完整的路径
	$path = "/Users/RiverChan/Desktop/Web/";
	$file = "php15.php";
	echo rtrim($path,"/")."/".$file."<hr>";

	echo "6.字符串的转换函数"."<br>";
	$str2 = "hello world!";
	echo "原字符串：".$str2."<br>";
	echo "小写：".strtolower($str2)."<br>";
	echo "大写：".strtoupper($str2)."<br>";
	echo "首字母：".ucfirst($str2)."<br>";
	echo "每个单词的首字母大写：".ucwords($str2)."<hr>";

	echo "7.网页格式化函数"."<br>";
	$str3 = "<a href='https://www.baidu.com'>baidu</a>";
	echo "$str3"."<br>";
	echo "格式化后1：".htmlentities($str3)."<br>";
	echo "格式化后2：".htmlspecialchars($str3)."<br>";
	echo "删除标签后：".strip_tags($str3)."<hr>";

	echo "8.英文字符串处理"."<br>";
	$str4 = "chenzhihe";
	echo "原字符串：".$str4."<br>";

	echo "颠倒后：".strrev($str4)."<br>";
	echo "字符串长度：".strlen($str4)."<hr>";

	echo "9.汉子字符串处理"."<br>";
	$str5 = "陈志河河";
	echo "原字符串：".$str5."<br>";

	echo "汉子字符串长度：".strlen($str5)."<br>";		//使用strlen计算汉字的长度不准确，utf-8一个汉字占用3个字符，GBK占两个
	echo "汉字的长度为：".mb_strlen($str5)."<hr>";		//计算汉字的长度使用mb_strlen函数

	echo "10.字符串比较函数"."<br>";
	var_dump(strcmp(a, b));
	var_dump(strcmp(a, a));
	echo "<hr>";

	echo "11.字符串相似程度比较"."<br>";
	$str6 = "123";
	$str7 = "godlike";
	echo similar_text($str6, $str7)."<hr>";

	echo "<h3>12.重要：字符串拆分函数explode</h3>"."<br>";
	$str = "a,b,c,e,f";
	$a = explode(",", $str);
	echo "<pre>";
	print_r($a)."<br>";

	echo "<h3>13.重要：字符串组合函数implode</h3>"."<br>";
	$b = implode("@", $a);
	echo "<pre>";
	print_r($b)."<br>";

	echo "<h3>14.重要：返回字符串的子串</h3>"."<br>";
	$str8 = "chenzhihe";
	//返回he
	echo substr($str8, 7,2)."<br>";
	echo substr($str8, 4,-2)."<br>";	//从第四个字符开始截取，截取到倒数第2个字符之前
	echo substr($str8, -2,2)."<br>";	//从倒数第2个开始截取，截取2个字符。
	echo substr($str8, -5,-2)."<hr>";	//从倒数第5个开始截取，截取到倒数第2个之前

	echo "15.字符串查找截取函数"."<br>";
	$str9 = "chenzhihe";
	echo "源字符串：".$str9."<br>";
	//向前截取
	echo strstr($str9, "zhi")."<br>";
	//向后截取
	echo strstr($str9, "zhi",true)."<hr>";

	echo "16.查找字符串首次出现的位置"."<br>";
	$str10 = "chenzhihezhihe";
	echo "源字符串：".$str10."<br>";
	echo "首次出现：".strpos($str10, "he")."<br>";
	echo "最后 出现：".strrpos($str10, "he")."<hr>";

	echo "17.字符串的替换str_replace"."<br>";
	$str11 = "1,2,3:4,5:6,7:8,9";
	echo "源字符串：".$str11."<br>";

	//1对1替换
	echo "1对1替换:替换,为@后：".str_replace(",", "@", $str11)."<br>";

	//多对1替换
	echo "多对一替换，替换，：为@".str_replace(array(",",":"), "@", $str11)."<br>";

	//多对多替换  
	echo "多对多替换，替逗号为#，替冒号为百分号：".str_replace(array(",",":"), array("#","%"), $str11)."<hr>";

	echo "<h3>重要：18.获取指定文件的内容file_get_contents</h3>"."<br>";
	echo file_get_contents("./a.txt")."<br>";

	echo "<h3>重要：18.将指定内容写入文件file_put_contents</h3>"."<br>";
	$str12 = "hello world!"."<br>";
	//FILE_APPEND 追加写入，刷新一次写入一次。否则只写入一次
	file_put_contents("./a.txt", $str12,FILE_APPEND);	










