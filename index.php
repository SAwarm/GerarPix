<?php

require("./vendor/autoload.php");

use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$obPayload = (new Payload)->setPixKey('123456789000')
                          ->setDescription('payment')
                          ->setMerchantName('Test Name')
                          ->setMerchantCity("Ararangua")
                          ->setAmount(5.00)
                          ->setTxid('TestId');

$payloadQrCode = $obPayload->getPayload();

$objectCode = new QrCode($payloadQrCode);

$image = (new Output\Png)->output($objectCode, 800);

header('Content-Type: image/png');
echo $image;