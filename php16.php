<?php
	echo "<h3>PHP16:正则表达式</h3>"."<br>";
	echo "正则表达式有原子，主要用于字符串的分割，匹配，查找，替换等操作"."<hr>";
	echo "[],代表一个原子表"."<br>";
	echo "[abc],代表匹配一个字符a或者b或者c"."<br>";
	echo "[a-z]，代表任意一个小写字母"."<br>";
	echo "[0-9]，代表任意一个数字"."<br>";
	echo "[A-Z]，代表任意一个大写字母"."<br>";
	echo "[0-9a-zA-Z]代表任意一个数字或者小写字母或者大写字母"."<br>";
	echo "[^]，代表原子表取返"."<br>";
	echo "[^0-9]，代表任意一个非数字"."<br>";
	echo "[^0-9A-Z]，代表任意一个小写字母"."<br>";
	echo "{m}，表示起那面的数量控制在m个"."<br>";
	echo "[0-9]{4},表示任意的四位数字，等价于[0-9][0-9][0-9][0-9]"."<br>";
	echo "[a-z]{6}，表示任意6位小写字母"."<br>";
	echo "{m,}，表示前面的数量至少控制在m个"."<br>";
	echo "[0-9]{5,}，表示至少5位"."<br>";
	echo "{m,n}，表示至少m至n个"."<br>";
	echo "[a-z]{4,8}，表示4-8位的小写字母"."<br>";
	echo "^[0-9]，表示以任意一位数字开头"."<br>";
	echo "[0-9]$，表示以任意一位数字结尾"."<br>";
	echo "^[0-9]$，以一位数字开头并且以一位数字结尾"."<br>";
	echo "?,表示前面的数量0次或者1次,等价于(可有可无)"."<br>";
	echo "-?[0-9]{1,},表示任意的正负数"."<br>";
	echo "+,表示前面的数量至少一次,等价于{1,}"."<br>";
	echo "*,表示前面的数量任意次,等价于{0,}"."<br>";
	echo ".,表示除了换行之外的任意字符"."<br>";
	

	
	echo "<hr>";
	echo "验证字符串:abcdefg1234"."<br><br>";
	echo "使用正则表达式验证是否含有任意两位数字：";
	if (preg_match("/[0-9]{2}/","abcdefg1234")) {
		echo "ture";
	}else{
		echo "flase";
	}

	echo "<br>";
	echo "验证是否包含以一位非数字：";
	if (preg_match("/[^0-9]/","abcdefg1234")) {
		echo "ture";
	}else{
		echo "flase";
	}

	echo "<br>";
	echo "验证是否以任意一位数字开头：";
	if (preg_match("/^[0-9]/","abcdefg1234")) {
		echo "ture";
	}else{
		echo "flase";
	}

	echo "<br>";
	echo "验证是否以任意一位数字结尾：";
	if (preg_match("/[0-9]$/","abcdefg1234")) {
		echo "ture";
	}else{
		echo "flase";
	}

	echo "<br>";
	echo "(精确匹配)验证是否以一位数字开头并且以一位数字结尾：";		//2
	if (preg_match("/^[0-9]$/","abcdefg1234")) {
		echo "ture";
	}else{
		echo "flase";
	}

	echo "<br>";
	echo "验证电话号码:";
	if (preg_match("/^[0-9]{11}$/","13123377878")) {
		echo "ture";
	}else{
		echo "flase";
	}
