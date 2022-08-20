<?php

require("./vendor/autoload.php");

use App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$obPayload = (new Payload)->setPixKey('12345678910') // key pix
    ->setDescription("") // description of the pix
    ->setMerchantName("") // name people
    ->setMerchantCity("") // city 
    ->setAmount(5.00) // price of pix
    ->setTxid(""); // id pix

$payloadQrCode = $obPayload->getPayload();

$objectCode = new QrCode($payloadQrCode);

$image = (new Output\Png)->output($objectCode, 800);

header('Content-Type: image/png');
echo $image;
