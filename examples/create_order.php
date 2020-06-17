<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "REFRESH_TOKEN",
    "APPLICATION_ID",
    "SHARED_SECRET",
    123456789
);

$sampleOrder = [
    "ProfileID" => 123456789, //Identifies the ChannelAdvisor profile
    "SiteOrderID" => "3287e65e-3f46-11e8-ab01-42010a800002", // This should be the Transaction GUID
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

print_r($response->toArray());
print_r($client->getErrors());
