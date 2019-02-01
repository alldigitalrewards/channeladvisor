<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "hXuiZ5xkR2zx1UaQdT15sLelZ_OE_-Q-E_hQ9X8DUiU",
    "b52z1zxbrvaw1vya168nfmmwlw8e8ouf",
    "2CKkHOXvzUKuDmN0080kyg"
);

$string = "
        {
  \"SiteOrderID\": \"1234567-8901234\",
  \"TotalPrice\": 77.38,
  \"TotalTaxPrice\": 6.19,
  \"TotalShippingPrice\": 4.99,
  \"TotalShippingTaxPrice\": 0.1,
  \"EstimatedShipDateUtc\": \"2019-02-01T12:00:00Z\",
  \"CheckoutStatus\": \"Completed\",
  \"PaymentStatus\": \"Submitted\",
  \"ShippingStatus\": \"Unshipped\",
  \"BuyerUserId\": \"sample_buyer_user_id\",
  \"BuyerEmailAddress\": \"jmuto@alldigitalrewards.com\",
  \"PaymentMethod\": \"Visa\",
  \"PaymentCreditCardLast4\": \"4586\",
  \"PaymentMerchantReferenceNumber\": \"8dk4299j18llmn4298529ivkvelw14830\",
  \"ShippingTitle\": \"Mr.\",
  \"ShippingFirstName\": \"Joseph\",
  \"ShippingLastName\": \"Muto\",
  \"ShippingSuffix\": null,
  \"ShippingCompanyName\": null,
  \"ShippingCompanyJobTitle\": null,
  \"ShippingDaytimePhone\": \"4074583861\",
  \"ShippingEveningPhone\": null,
  \"ShippingAddressLine1\": \"935 Bungalow Ave\",
  \"ShippingAddressLine2\": \"\",
  \"ShippingCity\": \"Winter Park\",
  \"ShippingStateOrProvince\": \"FL\",
  \"ShippingPostalCode\": \"32789\",
  \"ShippingCountry\": \"US\",
  \"BillingTitle\": \"Mr.\",
  \"BillingFirstName\": \"Joseph\",
  \"BillingLastName\": \"Muto\",
  \"BillingSuffix\": \"\",
  \"BillingCompanyName\": \"\",
  \"BillingCompanyJobTitle\": null,
  \"BillingDaytimePhone\": \"4074583861\",
  \"BillingEveningPhone\": null,
  \"BillingAddressLine1\": \"935 Bungalow Ave\",
  \"BillingAddressLine2\": \"\",
  \"BillingCity\": \"Winter Park\",
  \"BillingStateOrProvince\": \"FL\",
  \"BillingPostalCode\": \"32789\",
  \"BillingCountry\": \"US\",
  \"Items\": [
    {
      \"Sku\": \"CAN.01/BL\",
      \"Quantity\": 1,
      \"UnitPrice\": 77.38,
      \"TaxPrice\": 6.19,
      \"ShippingPrice\": 4.99,
      \"ShippingTaxPrice\": 0.1
    }
  ]
}
        ";
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
