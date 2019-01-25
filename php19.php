<?php
	/*
	
	//使用GD库绘制文字
	$image = imagecreatetruecolor(500, 500);

	//选取颜色
	$blue = imagecolorallocate($image, 0, 162, 232);
	$green = imagecolorallocate($image, 68, 227, 0);
	$red = imagecolorallocate($image, 255, 0, 0);
	$yellow = imagecolorallocate($image, 240, 240, 60);
	$white = imagecolorallocate($image, 255, 255, 255);

	//画布填充
	imagefill($image, 1, 1, $white);

	//写字
	imagettftext($image, 40, 0, 200, 200, $red, "./Fonts/PTSans.ttc", "ABCC");

	//输出
	header("content-type:image/jpeg");
	imagejpeg($image);

	//释放资源
	imagedestroy($image);
	
	*/

	//绘制验证码
	$image = imagecreatetruecolor(120, 40);

	//设置随机背景颜色并且画布填充
	$bgcolor = imagecolorallocate($image, rand(170,255), rand(170,255), rand(170,255));
	imagefill($image, 1, 1, $bgcolor);


	//绘制验证码
	//验证码内容
	$contents = "234567890qwertyuiopasdfghjkzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
	for($i = 0;$i < 4; $i++){
		$font = substr($contents, rand(0,strlen($contents) - 1),1);
		$code .= $font;

		$x = ((120/4) * $i) +10;
		$y = 30;

		//设置字体随机颜色
	$fontcolor = imagecolorallocate($image, rand(0,100), rand(0,100), rand(0,100));

	//使用函数绘制验证码
	imagefttext($image, 20, 0, $x, $y, $fontcolor, "./Fonts/PTSans.ttc", $font);
	}


	
	//输出
	header("content-type:image/jpeg");
	imagejpeg($image);

	//释放资源
	imagedestroy($image);