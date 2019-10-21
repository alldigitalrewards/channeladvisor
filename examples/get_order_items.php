<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

$orderItems = $client->getOrderItems(12236104);

print_r($orderItems);
print_r($client->getErrors());
