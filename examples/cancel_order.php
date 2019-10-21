<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

$cancelled = $client->cancelOrder(12242713);

var_dump($cancelled);
print_r($client->getErrors());
