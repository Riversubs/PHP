<?php
	//绘制图片水印
	$image1 = imagecreatefromjpeg("./image.jpeg");		//被加水印的图片
	$iamge2 = imagecreatefrompng("./image2.png");		//水印图片

	imagecopy($image1, $iamge2, 100, 200, 0, 0, 100, 100);		//被加水印的图片,水印图片,被加水印图片X,被加水印Y,水印X,水印Y,水印宽,水印高

	header("content-type:image/jpeg");
	imagejpeg($image1, "./image3.jpeg");
	imagedestroy($image1);


	//图片的裁剪
	$image4 = imagecreatefromjpeg("./image4.jpeg");
	$image5 = imagecreatetruecolor(230,180);

	imagecopyresampled($image5, $image4, 0, 0, 100, 100, 230, 180, 230, 180);

	header("content-type:imege/jpeg");
	imagedestroy($image4,"./bbb.jpeg");
	imagedestroy($image5);

	//图片的缩放
	$src = imagecreatefromjpeg("./aa.jpeg");
	$info = getimagesize("./aa.jpeg");
	$width = $info[0];
	$height = $info[1];
	//进行缩放,缩小1/4
	$w = $width/4;
	$h = $height/4;

	$src2 = imagecreatetruecolor($w, $h);

	//通过函数进行缩放
	imagecopyresampled($src2, $src, 0, 0, 0, 0, $w,$h,$width, $height);
	//缩放后的图片,要缩放的图片,目的的X,目的的Y,要缩放的X,要缩放的Y,缩放后的W,缩放后的H,源图片W,源图片H

	header("content-type:image/jpeg");
	imagedestroy($src2);


	//封装函数-图片缩放
	function tpsf($file,$sfh,$sfbl){
		$src = imagecreatefromjpeg($file);
		$info = getimagesize($file);
		$width = $info[0];
		$height = $info[1];
		//进行缩放,缩小1/4
		$w = $width/$sfbl;
		$h = $height/$sfbl;

		$src2 = imagecreatetruecolor($w, $h);

		//通过函数进行缩放
		imagecopyresampled($src2, $src, 0, 0, 0, 0, $w,$h,$width, $height);
		//缩放后的图片,要缩放的图片,目的的X,目的的Y,要缩放的X,要缩放的Y,缩放后的W,缩放后的H,源图片W,源图片H

		header("content-type:image/jpeg");
		//输出到浏览器
		imagejpeg($src2);
		//输出到本地
		imagejpeg($src2,$sfh);
		imagedestroy($src2);
		imagedestroy($src);
	}

	//调用图片缩放
	tpsf("./aaa.jpeg","ppp.jpg",4);
	echo "缩放成功!";


