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
    "TotalPrice" => 14,
    "Items" => [
        "Sku" => "40724",
        "Quantity" => 1
  ]
];

$order = new \AllDigitalRewards\ChannelAdvisor\Request\Order($client);

try {
   $response = $order->create($sampleOrder);
   print_r($response);
} catch (\AllDigitalRewards\ChannelAdvisor\ClientException $exception) {
    print_r($exception->getMessage());
}
