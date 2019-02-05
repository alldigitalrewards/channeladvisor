<?php

namespace AllDigitalRewards\ChannelAdvisor\Request;

use AllDigitalRewards\ChannelAdvisor\Response\OrderCreated;
use AllDigitalRewards\ChannelAdvisor\AbstractService;

class Order extends AbstractService
{
    public function create($order)
    {


        $response = $this->client->createOrder(
            '/v1/Orders',
            $order
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
