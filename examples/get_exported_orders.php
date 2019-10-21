<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

$list = $client->getExportedOrders(true);

var_dump($list);
print_r($client->getErrors());

$list = $client->getExportedOrders();
var_dump($list);
print_r($client->getErrors());

