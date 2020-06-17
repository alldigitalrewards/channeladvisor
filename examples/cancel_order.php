<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "REFRESH_TOKEN",
    "APPLICATION_ID",
    "SHARED_SECRET",
    123456789
);
$cancelled = $client->cancelOrder(1234567);

var_dump($cancelled);
print_r($client->getErrors());
