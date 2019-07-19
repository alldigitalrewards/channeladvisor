<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "hXuiZ5xkR2zx1UaQdT15sLelZ_OE_-Q-E_hQ9X8DUiU",
    "b52z1zxbrvaw1vya168nfmmwlw8e8ouf",
    "2CKkHOXvzUKuDmN0080kyg"
);

$orderItems = $client->getOrderItems(12236104);

print_r($orderItems);
print_r($client->getErrors());
