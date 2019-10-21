<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

$exported = $client->exportOrder(12236104);

var_dump($exported);
print_r($client->getErrors());
