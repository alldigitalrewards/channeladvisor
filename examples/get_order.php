<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

$order = $client->getOrder(12278055);

var_dump($order);
print_r($client->getErrors());
