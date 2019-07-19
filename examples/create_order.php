<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "hXuiZ5xkR2zx1UaQdT15sLelZ_OE_-Q-E_hQ9X8DUiU",
    "b52z1zxbrvaw1vya168nfmmwlw8e8ouf",
    "2CKkHOXvzUKuDmN0080kyg"
);

$sampleOrder = [
    "ProfileID" => 12003121, //Identifies the ChannelAdvisor profile
    "SiteOrderID" => "12003121-1234123457", // This should be the Transaction GUID
    "TotalPrice" => 38.41,
    "BuyerEmailAddress" => "jmuto@alldigitalrewards.com",
    "ShippingTitle" => "Mr.",
    "ShippingFirstName" => "Joseph",
    "ShippingLastName" => "Muto",
    "ShippingSuffix" => null,
    "ShippingCompanyName" => null,
    "ShippingCompanyJobTitle" => null,
    "ShippingDaytimePhone" => "123456789",
    "ShippingEveningPhone" => null,
    "ShippingAddressLine1" => "935 Bungalow Ave",
    "ShippingAddressLine2" => "",
    "ShippingCity" => "Winter Park",
    "ShippingStateOrProvince" => "FL",
    "ShippingPostalCode" => "32789",
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
