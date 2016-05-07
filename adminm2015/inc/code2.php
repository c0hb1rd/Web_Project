<?php
//$font_dir   = $_SERVER ["DOCUMENT_ROOT"] . "your_ttf_file.ttf";	// 字体库
$font_dir   = "../../inc/arial.ttf";	// 字体库
$img_w      = 60;   // 设置图片宽
$img_h      = 20;   // 设置图片高
$font_size  = 12;   // 字体大小
$angle_l    = -10;  // 左偏角
$angle_r    = 10;   // 右偏角
$code_str   = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
$word_len   = 4;    // 验证码位数
$padding    = 5;    // 每两个文字之间间隔
$margin     = 2;    // 左侧边距
$base_line  = 15;   // 文字基线位置
$base_line_offset = 2;  // 基准线偏移量
$pixel_num  = 3;    // 杂点数目基数
$pixel_color= 8;    // 杂点只有 $pixel_color 种颜色  总的杂点数为$pixel_num*$pixel_color
$noise_font_size = 1; // 杂点字体大小
$session_key= "codea";	//自定义session键名

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
header("Cache-control: private");
header('Content-Type: image/png');

session_start();
$word = "";
$code_str_len = strlen($code_str) - 1;
for ($i = 0; $i < $word_len; $i++) {
	$word.= $code_str[rand(0, $code_str_len)];
}
$_SESSION [$session_key] = strtolower($word);
$image = imagecreatetruecolor($img_w, $img_h);
imagefilledrectangle($image, 0, 0, $img_w - 1, $img_h - 1, imagecolorallocate($image, mt_rand(235, 255), mt_rand(235, 255), mt_rand(235, 255)));

//绘制杂点
for($i = 0; $i < $pixel_color; $i++){
	$noise_color = imagecolorallocate( $image, mt_rand(150,225), mt_rand(150,225), mt_rand(150,225) );
	for($j = 0; $j < $pixel_num; $j++) {
		imagestring( $image,  $noise_font_size, mt_rand(-10, $img_w), mt_rand(-10, $img_h), $code_str[mt_rand(0, $code_str_len)], $noise_color );
	}
}

//绘制文字
for ($i = 0; $i < $word_len; ++$i) {
	$color = imagecolorallocate($image, mt_rand(0, 100), mt_rand(20, 120), mt_rand(50, 150));
	imagettftext($image, $font_size, mt_rand($angle_l, $angle_r), $margin, mt_rand($base_line-$base_line_offset, $base_line+$base_line_offset), $color, $font_dir, mb_substr($word, $i, 1, 'utf-8'));
	$margin += (imagefontwidth($font_size) + $padding);
}

imagepng($image);
imagedestroy($image);
?>
