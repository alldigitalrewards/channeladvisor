<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

$fulfillments = $client->getFulfillments();

print_r($fulfillments);
print_r($client->getErrors());
