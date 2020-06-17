<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "REFRESH_TOKEN",
    "APPLICATION_ID",
    "SHARED_SECRET",
    123456789
);

//6200111, 6200112, 6200117
$product = $client->getProduct('1234567890');

print_r($product);
print_r($client->getErrors());
