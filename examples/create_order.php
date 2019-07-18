<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "hXuiZ5xkR2zx1UaQdT15sLelZ_OE_-Q-E_hQ9X8DUiU",
    "b52z1zxbrvaw1vya168nfmmwlw8e8ouf",
    "2CKkHOXvzUKuDmN0080kyg"
);

$sampleOrder = [
    "ProfileID" => 12003121,
    "BuyerEmailAddress" => "jmuto@alldigitalrewards.com",
    "TotalPrice" => 38.41,
    "Items" => [
        [
            "Sku" => "72539",
            "Quantity" => 1,
            "UnitPrice" => 38.41,
        ]
    ]
];

$response = $client->createOrder($sampleOrder);

print_r($response);
print_r($client->getErrors());
