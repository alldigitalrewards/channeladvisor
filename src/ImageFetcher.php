<?php

namespace AllDigitalRewards\ChannelAdvisor;

use AllDigitalRewards\ChannelAdvisor\Collection\ImageCollection;
use GuzzleHttp\Psr7\Request;

class ImageFetcher extends AbstractService
{
    public function getProductImages(string $product_id)
    {
        $request = new Request(
            'GET',
            Client::API_URL . '/v1/Products(' . $product_id . ')/Images'
        );

        $response = $this->client->sendRequest($request);

        return new ImageCollection($response);
    }
}
