<?php
include('vendor/autoload.php');

use Endroid\QrCode\QrCode;

header('Content-type: image/png');  // 输出png图像
$qrCode = new QrCode();

// 生成文字
echo $qrCode
    ->setText("geo:40.71872,-73.98905,100")
    ->setSize(100)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
//    ->setLabel('www.baidu.com')
    ->setLabelFontSize(16)
    ->setVersion(10)
    ->render();