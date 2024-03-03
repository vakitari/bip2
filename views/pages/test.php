<?php
$filename = __DIR__ . '/images.gif';
$info = getimagesize($filename);
switch ($info[2]) { 
	case 1: 
		$img = imageCreateFromGif($filename);
		break;					
	case 2: 
		$img = imageCreateFromJpeg($filename); 
		break;	
	case 3: 
		$img = imageCreateFromPng($filename); 
		break;
}
 
$width = ImageSX($img);
$height = ImageSY($img);
 
$thumb = imagecreatetruecolor(1, 1); 
imagecopyresampled($thumb, $img, 0, 0, 0, 0, 1, 1, $width, $height);
$color = '#' . dechex(imagecolorat($thumb, 0, 0));
 
imageDestroy($img);
imageDestroy($thumb);
 
echo $color;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .color{
      background: #5e1720;
      height: 100px;
    }
  </style>
</head>
<body>
  <div class="color"></div>
</body>
</html>