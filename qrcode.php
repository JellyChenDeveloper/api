<?php
include('vendor/autoload.php');

use Endroid\QrCode\QrCode;

header('Content-type: image/png');  // 输出png图像
$qrCode = new QrCode();

// 生成文字
$qrCode
    ->setText("Life is too short to be generating QR codes + 汉字爱神的箭藕节")
    ->setSize(100)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('My label')
    ->setLabelFontSize(16)
    ->render();