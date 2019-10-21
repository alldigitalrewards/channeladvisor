<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "get from shared notes",
    "get from shared notes",
    "get from shared notes"
);

//B72731-9EBE7
$request = $client->bulkProductRequestStatus('B72731-9EBE7');
print_r($request);
