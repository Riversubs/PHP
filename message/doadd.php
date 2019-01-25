<?php
	//这个文件的作用：用于接收add.php页面用户的留言信息，然后把接受到的信息存入ly.db中

	//第一步：接受add表单中的值
	//定义一个数组用来接收值
	$data = [];
	$data["title"] = $_POST["title"];
	$data["author"] = $_POST["author"];
	$data["contents"] = $_POST["contents"];

	//第二步，把接收到的值存入ly.db数据文件中
	//处理数组
	$info = implode("##",$data)."@";
	//var_dump($info);
	//把处理好的数据放入ly.db
	file_put_contents("ly.db", $info,FILE_APPEND);

	//执行成功之后页面跳转
	header("location:./index.php");