<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "hXuiZ5xkR2zx1UaQdT15sLelZ_OE_-Q-E_hQ9X8DUiU",
    "b52z1zxbrvaw1vya168nfmmwlw8e8ouf",
    "2CKkHOXvzUKuDmN0080kyg"
);

$sampleOrder = [
    "ProfileID" => 12003121,
    "SiteOrderID" => "12003121-12341234",
    "TotalPrice" => 38.41,
    "TotalTaxPrice" => 0.00,
    "TotalShippingPrice" => 0.00,
    "TotalShippingTaxPrice" => 0.00,
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
    "ShippingCountry" => "US",
    "BillingTitle" => "Mr.",
    "BillingFirstName" => "Joseph",
    "BillingLastName" => "Muto",
    "BillingSuffix" => "",
    "BillingCompanyName" => "",
    "BillingCompanyJobTitle" => null,
    "BillingDaytimePhone" => "8664157703",
    "BillingEveningPhone" => null,
    "BillingAddressLine1" => "349 Lake Havasu Ave South",
    "BillingAddressLine2" => "Suite 104",
    "BillingCity" => "Lake Havasu City",
    "BillingStateOrProvince" => "AZ",
    "BillingPostalCode" => "86403",
    "BillingCountry" => "US",
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
