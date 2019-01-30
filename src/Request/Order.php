<?php

namespace AllDigitalRewards\ChannelAdvisor\Request;

use AllDigitalRewards\ChannelAdvisor\Response\OrderCreated;
use AllDigitalRewards\ChannelAdvisor\AbstractService;

class Order extends AbstractService
{
    public function create(array $order)
    {
        $body = [
            'ProfileID' => $order['ProfileID'],
            'BuyerEmailAddress' => $order['BuyerEmailAddress'],
            'TotalPrice' => $order['TotalPrice'],
            'Items' => [
                [
                    'Sku' => $order['Items']['Sku'],
                    'Quantity' => $order['Items']['Quantity'],
                ]
            ]
        ];

        $string = "
        {
  \"ProfileID\": 12003121,
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

        $response = $this->client->sendRequest(
            'POST',
            '/v1/Orders',
            json_decode($string)
        );

        return new OrderCreated($response);
    }

    public function list()
    {
        $response = $this->client->sendRequest(
            'GET',
            '/v1/Orders'
        );

        return $response;
    }
}
