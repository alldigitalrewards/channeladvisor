<?php

namespace AllDigitalRewards\CashStar;

use AllDigitalRewards\ChannelAdvisor\Client;
use AllDigitalRewards\ChannelAdvisor\Collection\ImageCollection;
use AllDigitalRewards\ChannelAdvisor\ImageFetcher;
use AllDigitalRewards\ChannelAdvisor\Response\AccessToken;
use AllDigitalRewards\ChannelAdvisor\Response\Image;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ImageFetcherTest extends TestCase
{
    public function testImageFetcherReturnsImageCollection()
    {
        $imageFetcher = $this->getImageFetcher();

        $imageCollection = $imageFetcher->getProductImages('PRODUCT-ID');

        $this->assertInstanceOf(ImageCollection::class, $imageCollection);
    }

    public function testImageDataMapsCorrectly()
    {
        $imageFetcher = $this->getImageFetcher();

        $imageCollection = $imageFetcher->getProductImages('PRODUCT-ID');
        $imageDataFromJson = json_decode(
            file_get_contents(__DIR__ . '/fixtures/image_response.json')
        )->value[0];

        /**
         * @var Image $image
         */
        $image = $imageCollection[0];

        $this->assertSame($imageDataFromJson->ProductID, $image->getProductID());
        $this->assertSame($imageDataFromJson->ProfileID, $image->getProfileID());
        $this->assertSame($imageDataFromJson->PlacementName, $image->getPlacementName());
        $this->assertSame($imageDataFromJson->Abbreviation, $image->getAbbreviation());
        $this->assertSame($imageDataFromJson->Url, $image->getUrl());
    }

    private function getImageFetcher()
    {
        $mockHandler = new MockHandler([
            new Response(
                200,
                [],
                file_get_contents(__DIR__ . '/fixtures/image_response.json')
            )
        ]);

        $guzzleClient = new GuzzleClient(
            [
                'handler' => HandlerStack::create($mockHandler)
            ]
        );

        $client = new Client(
            'refresh-token',
            'application-id',
            'shared-secret'
        );

        $client->setHttpClient($guzzleClient);

        $accessToken = new AccessToken(
            [
                'expiresIn' => 600,
                'tokenType' => 'fake-type',
                'accessToken' => 'fake-token'
            ]
        );

        $client->setAccessToken($accessToken);

        return new ImageFetcher($client);
    }
}

