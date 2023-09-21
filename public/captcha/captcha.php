<?php
session_start();
$width = 160;
$height = 60;
$count = 4;
$count_small = 40;
$font_size = 16;

$font = './cour.ttf';
$letters = array("G", "W", "L", "Q", "R", "4", "5", "Z", "2");
$colors = array("90", "110", "130", "150", "170", "190", "210");

$img = imagecreatetruecolor($width, $height);
$fon = imagecolorallocate($img, 250, 250, 250);
imagefill($img, 0, 0, $fon);


for ($i = 0; $i < $count_small; $i++) {
    $size = rand($font_size - 2, $font_size + 2);
    $ange = rand(0, 45);
    $x = (int)(rand($width * 0.1, $width - $width * 0.1));
    $y = (int)(rand($height * 0.2, $height));
    $color = imagecolorallocatealpha($img, rand(0, 255), rand(0, 255), rand(0, 255), 70);
    $text = $letters[rand('0', sizeof($letters) - 1)];
    imagettftext($img, $size, $ange, $x, $y, $color, $font, $text);
}
$captcha = [];
for ($i = 0; $i < $count; $i++) {
    $size = rand($font_size * 2 - 2, $font_size * 2 + 2);
    $ange = rand(-10, 15);
    $x = (int)(($i + 1) * $size);
    $y = (int)($height / 2 + $size / 2);
    $color = imagecolorallocatealpha($img, $colors[rand(0, sizeof($colors) - 1)], $colors[rand(0, sizeof($colors) - 1)], $colors[rand(0, sizeof($colors) - 1)], 20);
    $text = $letters[rand('0', sizeof($letters) - 1)];
    $captcha[] = $text;
    imagettftext($img, $size, $ange, $x, $y, $color, $font, $text);
}
$captcha = strtolower(implode("", $captcha));

header("Content-type: image/gif");
$_SESSION["captcha"] =
    ($captcha);
imagegif($img);


