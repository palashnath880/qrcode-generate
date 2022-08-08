<?php

require_once 'src/QRCode.php';

use nguyenary\QRCodeMonkey\QRCode;

$qrcode = new QRCode('Hey i am palash');

// $qrcode->setConfig([
//     'bgColor' => '#FFFFFF',
//     'body' => 'square',
//     'bodyColor' => '#0277bd',
//     'brf1' => [],
//     'brf2' => [],
//     'brf3' => [],
//     'erf1' => [],
//     'erf2' => [],
//     'erf3' => [],
//     'eye' => 'frame0',
//     'eye1Color' => '#000000',
//     'eye2Color' => '#000000',
//     'eye3Color' => '#000000',
//     'eyeBall' => 'ball0',
//     'eyeBall1Color' => '#000000',
//     'eyeBall2Color' => '#000000',
//     'eyeBall3Color' => '#000000',
//     'gradientColor1' => '#0277bd',
//     'gradientColor2' => '#000000',
//     'gradientOnEyes' => 'true',
//     'gradientType' => 'linear',
// ]);

// // Support png, svg, jpg, pdf, eps
$qrcode->setFileType('png');

// // Size limit is 3480 pixel
$qrcode->setSize(200);

// Example output is file
$url = $qrcode->create();
