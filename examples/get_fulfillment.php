<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

$fulfillment = $client->getFulfillment(12236137);

var_dump($fulfillment);
print_r($client->getErrors());
