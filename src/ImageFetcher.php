<?php

namespace AllDigitalRewards\ChannelAdvisor;

use AllDigitalRewards\ChannelAdvisor\Collection\ImageCollection;

class ImageFetcher extends AbstractService
{
    public function getProductImages(string $product_id)
    {
        $response = $this->client->sendRequest(
            'GET',
            '/v1/Products(' . $product_id . ')/Images'
        );

        return new ImageCollection($response);
    }
}
