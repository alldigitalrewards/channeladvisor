<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);
//6200111, 6200112, 6200117
$product = $client->getProduct('6200707');

print_r($product);
print_r($client->getErrors());
