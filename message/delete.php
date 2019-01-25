<?php
	//执行文件的删除操作
	//第一步，把ly.db中的内容读取出来
	$info = rtrim(file_get_contents("./ly.db"),"@");

	//第二步，把内容分割，结果为数组
	$list = explode("@", $info);

	//第三步，拿到需要删除留言信息的下标
	$key = $_GET["id"];
	
	//第四步，使用unset删除数据
	unset($list[$key]);

	//第五步，把删除过后剩下的数据再次写回ly.db
		if (empty($list)) {
			//删除过后没有信息，则写入空字符串
			file_put_contents("ly.db", "");
		}else{
			//删除过后还有信息，将剩余的东西写回去
			file_put_contents("ly.db", implode("@", $list))."@";
		};
	//第六步，返回index
	header("location:./index.php");