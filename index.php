<?php

require("./vendor/autoload.php");

use App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$obPayload = (new Payload)->setPixKey('123456789000') // key pix
                          ->setDescription('payment') // description of the pix
                          ->setMerchantName('Test Name') // name people
                          ->setMerchantCity("Ararangua") // city 
                          ->setAmount(5.00) // price of pix
                          ->setTxid('TestId'); // id pix

$payloadQrCode = $obPayload->getPayload();

$objectCode = new QrCode($payloadQrCode);

$image = (new Output\Png)->output($objectCode, 800);

header('Content-Type: image/png');
echo $image;