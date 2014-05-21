<?php
Header("Content-type: image/png");
/*通知浏览器,要输出图像*/
$char1=$_GET['text1'];
$char2=$_GET['text2'];
$char3=$_GET['text3'];
//$im = imagecreate(400 , 300); 
/*如果没有指定图像，可以自定义图像的大小*/

$im = imagecreatefromjpeg("pic.jpg");

$pink = ImageColorAllocate($im, 235 , 4 , 0);

$fontfile = "fonts/wryh.ttf";
/* $fontfile 字体的路径,视操作系统而定,可以是 simhei.ttf(黑体) , SIMKAI.TTF(楷体) , SIMFANG.TTF(仿宋) ,SIMSUN.TTC(宋体&新宋体) 等 GD 支持的中文字体*/

$str1=mb_convert_encoding($char1, "html-entities", "utf-8");
$str2=mb_convert_encoding($char2, "html-entities", "utf-8");
$str3=mb_convert_encoding($char3, "html-entities", "utf-8");

ImageTTFText($im, 14,0,55,190,$pink,$fontfile,$str1);
ImageTTFText($im, 14,0,55,360,$pink,$fontfile,$str2);
ImageTTFText($im, 14,0,55,560,$pink,$fontfile,$str3);
/* 加入中文水印 */

Imagepng($im);
ImageDestroy($im);
?>