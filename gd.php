<?php
	//使用GD库画图
	//创建一个画布
	$image = imagecreatetruecolor(500, 500);

	//选取颜色
	$blue = imagecolorallocate($image, 0, 162, 232);
	$green = imagecolorallocate($image, 68, 227, 0);
	$red = imagecolorallocate($image, 255, 0, 0);
	$white = imagecolorallocate($image, 255, 255, 255);

	//画布填充
	imagefill($image, 1, 1, $white);

	//进行艺术创作
	imagesetpixel($image, 200, 201, $red);
	imagesetpixel($image, 200, 202, $red);
	imagesetpixel($image, 200, 203, $red);
	imagesetpixel($image, 200, 204, $red);
	imagesetpixel($image, 200, 205, $red);
	imagesetpixel($image, 200, 206, $red);
	imagesetpixel($image, 200, 207, $red);

	//线
	imageline($image, 10, 10, 300, 300, $blue);

	//框
	imagerectangle($image, 125, 125, 401, 478, $green);

	//填充的矩形
	imagefilledrectangle($image, 1, 100, 200, 300, $red);


	//输出
	header("content-type:image/jpeg");
	imagejpeg($image);

	//释放资源
	imagedestroy($image);