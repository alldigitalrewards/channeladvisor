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
    "BuyerEmailAddress" => "jhoughtelin@alldigitalrewards.com",
    "ShippingTitle" => "Mr.",
    "ShippingFirstName" => "Josh",
    "ShippingLastName" => "Houghtelin",
    "ShippingSuffix" => null,
    "ShippingCompanyName" => null,
    "ShippingCompanyJobTitle" => null,
    "ShippingDaytimePhone" => "123456789",
    "ShippingEveningPhone" => null,
    "ShippingAddressLine1" => "8407 E Chaparral Rd",
    "ShippingAddressLine2" => "",
    "ShippingCity" => "Scottsdale",
    "ShippingStateOrProvince" => "AZ",
    "ShippingPostalCode" => "85250",
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
