<?php
session_start();

$font = "font.ttf";

$im = imagecreatetruecolor(110, 30);
imagefilledrectangle($im, 0, 0, 110, 30, imagecolorallocate($im, 255, 192, 0));
imagettftext($im, 40, 0, 15, 23, imagecolorallocate($im, 255, 255, 255), $font, $_SESSION['RandomSumImg']);
header('Expires: Wed, 1 Jan 1997 00:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header ('Content-type: image/gif');
imagegif($im);
imagedestroy($im);
?>