<?php
	//使用GD库画图
	//创建一个画布
	$image = imagecreatetruecolor(500, 500);

	//选取颜色
	$blue = imagecolorallocate($image, 0, 162, 232);
	$green = imagecolorallocate($image, 68, 227, 0);
	$red = imagecolorallocate($image, 255, 0, 0);
	$yellow = imagecolorallocate($image, 240, 240, 60);
	$white = imagecolorallocate($image, 255, 255, 255);

	//画布填充
	imagefill($image, 1, 1, $white);

	/*
	*
	* //多边形
	* $a = array(100,300,450,399,299,80);
	* imagepolygon($image, $a, 3, $red);
	*
	* //圆
	* imageellipse($image, 150, 200, 300, 200, $green);
	*
	* //填充圆
	* imagefilledellipse($image, 250, 220, 300, 200, $green);
	*
	* //画弧
	* imagearc($image, 100, 300, 100, 50, 180, 0, $red);
	*
	* //填充的弧度
	* imagefilledarc($image, 100, 200, 200, 330, 180, 0, $red,IMG_ARC_PIE);
	*
	*/

	//平面扇形统计图
	imagefilledarc($image, 200, 200, 200, 200, 0, 100, $yellow, IMG_ARC_PIE);

	imagefilledarc($image, 200, 200, 200, 200, 100, 190, $red, IMG_ARC_PIE);

	imagefilledarc($image, 200, 200, 200, 200, 190, 240, $blue, IMG_ARC_PIE);

	imagefilledarc($image, 200, 200, 200, 200, 240, 360, $green, IMG_ARC_PIE);

	//输出
	header("content-type:image/jpeg");
	imagejpeg($image);

	//释放资源
	imagedestroy($image);