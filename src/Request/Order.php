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


        $response = $this->client->sendRequest(
            'POST',
            '/v1/Orders',
            $body
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
