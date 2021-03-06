<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "REFRESH_TOKEN",
    "APPLICATION_ID",
    "SHARED_SECRET",
    123456789
);

$orderItems = $client->getOrderItems(123456789);

print_r($orderItems);
print_r($client->getErrors());
