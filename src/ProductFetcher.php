<?php

namespace AllDigitalRewards\ChannelAdvisor;

use AllDigitalRewards\ChannelAdvisor\Collection\ProductCollection;
use AllDigitalRewards\ChannelAdvisor\Response\Product;
use GuzzleHttp\Psr7\Request;

class ProductFetcher extends AbstractService
{
    public function getProductsUpdatedAfter(\DateTime $dateTime)
    {
        // This expects we operate on UTC (which we do)
        $timestamp = subStr(
            $dateTime->format("c"),
            0,
            19
        ) . "Z";

        $nextLink = Client::API_URL .
            '/v1/Products?$filter=' .
            'UpdateDateUtc ge ' . $timestamp;

        echo $nextLink . "\n";

        return $this->getProducts($nextLink);
    }

    public function getProducts(string $nextLink = null)
    {
        if (is_null($nextLink)) {
            $nextLink = Client::API_URL . '/v1/Products';
        }

        $request = new Request(
            'GET',
            $nextLink
        );

        $response = $this->client->sendRequest($request);

        if (empty($response->value)) {
            // Throw an exception.
            // @todo Deal with this in the Client...
        }

        return new ProductCollection($response);
    }

    public function getProduct(string $product_id)
    {
        $request = new Request(
            'GET',
            Client::API_URL . '/v1/Products(' . $product_id . ')'
        );

        $response = $this->client->sendRequest($request);

        return new Product($response);
    }
}
