<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "REFRESH_TOKEN",
    "APPLICATION_ID",
    "SHARED_SECRET",
    123456789
);

$fulfillment = $client->getFulfillment(12236137);

var_dump($fulfillment);
print_r($client->getErrors());
