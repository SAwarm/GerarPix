<?php

require("./vendor/autoload.php");

use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$obPayload = (new Payload)->setPixKey('11041265913')
                          ->setDescription('Pagamento')
                          ->setMerchantName('Jonas da Silva Elias')
                          ->setMerchantCity("Ararangua")
                          ->setAmount(5.00)
                          ->setTxid('teste');

$payloadQrCode = $obPayload->getPayload();

$objectCode = new QrCode($payloadQrCode);

$image = (new Output\Png)->output($objectCode, 800);

header('Content-Type: image/png');
echo $image;