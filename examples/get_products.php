<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "fKPsNTG2OjXeMWIYtH9HDfvfcMjSlF3UJkuBZFCOZzA",
    "b52z1zxbrvaw1vya168nfmmwlw8e8ouf",
    "2CKkHOXvzUKuDmN0080kyg"
);

$productFetcher = new \AllDigitalRewards\ChannelAdvisor\ProductFetcher($client);

print_r($productFetcher->getProduct('6200201'));