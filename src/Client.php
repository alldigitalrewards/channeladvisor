<?php

namespace AllDigitalRewards\ChannelAdvisor;

use AllDigitalRewards\ChannelAdvisor\Collection\FulfillmentCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\ImageCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\OrderCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\ProductCollection;
use AllDigitalRewards\ChannelAdvisor\Entities\AccessToken;
use AllDigitalRewards\ChannelAdvisor\Entities\Fulfillment;
use AllDigitalRewards\ChannelAdvisor\Entities\Order;
use AllDigitalRewards\ChannelAdvisor\Entities\Product;
use GuzzleHttp\Exception\RequestException;

class Client
{
    const API_URL = 'https://api.channeladvisor.com';

    /**
     * @var string
     */
    private $refreshToken;
    /**
     * @var string
     */
    private $applicationId;
    /**
     * @var string
     */
    private $sharedSecret;
    /**
     * @var AccessToken
     */
    private $accessToken;
    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;
    /**
     * @var array
     */
    private $errors = [];

    /**
     * Client constructor.
     * @param string $refresh_token
     * @param string $application_id
     * @param string $shared_secret
     */
    public function __construct(
        string $refresh_token,
        string $application_id,
        string $shared_secret
    )
    {
        $this->refreshToken = $refresh_token;
        $this->applicationId = $application_id;
        $this->sharedSecret = $shared_secret;

        $this->setAccessToken();
    }

    /**
     * @param \DateTime $dateTime
     * @return ProductCollection
     */
    public function getProductsUpdatedAfter(\DateTime $dateTime): ProductCollection
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

    /**
     * @param string|null $nextLink
     * @return ProductCollection
     */
    public function getProducts(string $nextLink = null): ProductCollection
    {
        if (is_null($nextLink)) {
            $nextLink = '/v1/Products';
        }

        $response = $this->sendRequest('GET', $nextLink);

        if (empty($response->value)) {
            // Throw an exception.
            // @todo Deal with this in the Client...
        }

        return new ProductCollection($response);
    }

    /**
     * @param string $product_id
     * @return Product
     * @throws ClientException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getProduct(string $product_id): Product
    {
        $response = $this->sendRequest('GET', Client::API_URL . '/v1/Products(' . $product_id . ')');

        return new Product($response);
    }

    /**
     * @param string $product_id
     * @return ImageCollection
     */
    public function getProductImages(string $product_id): ImageCollection
    {
        $response = $this->sendRequest(
            'GET',
            '/v1/Products(' . $product_id . ')/Images'
        );

        return new ImageCollection($response);
    }

    /**
     * @param string|null $nextLink
     * @return OrderCollection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrders(string $nextLink = null): OrderCollection
    {
        $uri = '/v1/Orders';

        if (is_null($nextLink) === false) {
            $uri = $nextLink;
        }

        $response = $this->sendRequest(
            'GET',
            $uri
        );

        return new OrderCollection($response);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrder(int $id)
    {
        $response = $this->sendRequest(
            'GET',
            "/v1/Orders($id)"
        );

        return $response;
    }

    /**
     * Retrieve all items for a single order
     * @param int $id
     * @return object
     */
    public function getOrderItems(int $id)
    {
        $response = $this->sendRequest(
            'GET',
            "/v1/Orders($id)/Items"
        );

        return $response;
    }

    /**
     * @return FulfillmentCollection|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFulfillments()
    {
        $response = $this->sendRequest(
            'GET',
            "/v1/Fulfillments?access_token=" . $this->getAccessToken()->getAccessToken()
        );
        if ($response->value) {
            return new FulfillmentCollection($response);
        }

        return null;
    }

    /**
     * @param int $orderId
     * @return FulfillmentCollection|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFulfillment(int $orderId)
    {
        $response = $this->sendRequest(
            'GET',
            "/v1/Fulfillments?access_token="
            . $this->getAccessToken()->getAccessToken()
            . '&$filter=OrderID'
            . '%20eq%20'
            . $orderId
            . '&$expand=Items'
        );
        if ($response->value) {
            return new FulfillmentCollection($response);
        }

        return null;
    }

    public function createOrder($order)
    {
        $response = $this->sendRequest(
            'POST',
            '/v1/Orders?access_token=' . $this->getAccessToken()->getAccessToken(),
            $order
        );

        return new Order($response);
    }

    /**
     * @param $type
     * @param $url
     * @param null $body
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function sendRequest($type, $url, $body = null)
    {
        try {
            $response = $this->getHttpClient()->request(
                $type,
                $url,
                [
                    'headers' => [
                        'Authorization' => $this->getAccessTokenAuthorizationHeader(),
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json'
                    ],
                    'body' => json_encode($body)
                ]
            );

            $jsonObj = json_decode($response->getBody());
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() <= 299) {
                return $jsonObj;
            }
            $this->buildErrorsArray($jsonObj);
        } catch (\Exception $e) {
            $this->errors[] = $e->getMessage();
        }
        return null;
    }

    public function setHttpClient(\GuzzleHttp\Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    protected function getHttpClient(): \GuzzleHttp\Client
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new \GuzzleHttp\Client([
                'base_uri' => self::API_URL,
                'http_errors' => false
            ]);
        }

        return $this->httpClient;
    }

    protected function setAccessToken()
    {
        if ($this->accessToken === null || $this->accessToken->isExpired()) {
            $this->accessToken = $this->requestAccessToken();
        }
    }

    /**
     * @return AccessToken
     */
    protected function getAccessToken()
    {
        $this->setAccessToken();
        return $this->accessToken;
    }

    /**
     * @return string
     */
    protected function getAccessTokenAuthorizationHeader(): string
    {
        return $this->getAccessToken()->getTokenType() . ' ' . $this->getAccessToken()->getAccessToken();
    }

    /**
     * @return AccessToken|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function requestAccessToken(): ?AccessToken
    {
        $client_id = base64_encode("$this->applicationId:$this->sharedSecret");

        try {
            $response = $this->getHttpClient()->request(
                'POST',
                self::API_URL . '/oauth2/token',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'text/plain',
                        'Authorization' => 'Basic ' . $client_id,
                        'Cache-Control' => 'no-cache'
                    ],
                    'form_params' => [
                        'grant_type' => 'refresh_token',
                        'refresh_token' => $this->refreshToken
                    ]
                ]
            );

            $token = json_decode($response->getBody());
            return new AccessToken($token);
        } catch (\Exception $exception) {
            $this->errors[] = $exception->getMessage();
        }
        return null;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    protected function buildErrorsArray($arr)
    {
        $array = json_decode(json_encode($arr), true);

        if (!is_array($array)) {
            //sometimes comes back NULL
            $this->errors[] = $array ?? 'No error message available.';
            return;
        }
        foreach ($array as $k => $v) {
            if ($k === 'Message' || $v['message']) {
                $this->errors[] = $k === 'Message' ? $v : $v['message'];
                continue;
            }
        }
    }
}
