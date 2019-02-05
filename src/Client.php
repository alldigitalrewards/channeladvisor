<?php

namespace AllDigitalRewards\ChannelAdvisor;

use AllDigitalRewards\ChannelAdvisor\Collection\ImageCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\OrderCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\ProductCollection;
use AllDigitalRewards\ChannelAdvisor\Entities\AccessToken;
use AllDigitalRewards\ChannelAdvisor\Entities\OrderCreated;
use AllDigitalRewards\ChannelAdvisor\Entities\Product;

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

    private $accessTokenHeader;

    public function __construct(
        string $refresh_token,
        string $application_id,
        string $shared_secret
    ) {
        $this->refreshToken = $refresh_token;
        $this->applicationId = $application_id;
        $this->sharedSecret = $shared_secret;
    }

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
            $nextLink = '/v1/Products';
        }

        $response = $this->sendRequest('GET', $nextLink);

        if (empty($response->value)) {
            // Throw an exception.
            // @todo Deal with this in the Client...
        }

        return new ProductCollection($response);
    }

    public function getProduct(string $product_id)
    {
        $response = $this->sendRequest('GET', Client::API_URL . '/v1/Products(' . $product_id . ')');

        return new Product($response);
    }

    public function getProductImages(string $product_id)
    {
        $response = $this->sendRequest(
            'GET',
            '/v1/Products(' . $product_id . ')/Images'
        );

        return new ImageCollection($response);
    }

    /**
     * Query against all orders across accounts
     * @param string|null $nextLink
     * @return object
     */
    public function getOrders(string $nextLink = null)
    {
        $uri = '/v1/Orders';

        if (is_null($nextLink) === false) {
            $uri = $nextLink;
        }

        $response = $this->sendRequest(
            'GET',
            $uri
        );

        var_dump($response);die;
        if (empty($response->value)) {
            // Throw an exception.
            // @todo Deal with this in the Client...
        }

        return new OrderCollection($response);
    }

    /**
     * Retrieve a single order
     * @param int $id
     * @return object
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

    public function createOrder($order)
    {
        $response = $this->sendRequest(
            'POST',
            '/v1/Orders',
            $order
        );

        return new OrderCreated($response);
    }

    private function sendRequest($type, $url, $body = null): object
    {
        $this->accessTokenHeader = $this->getAccessTokenAuthorizationHeader();

        $response = $this->getHttpClient()->request(
            $type,
            $url,
            [
                'headers' => [
                    'Authorization' => $this->accessTokenHeader,
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ],
                'form_params' => $body
            ]
        );

        $jsonObj = json_decode($response->getBody());

        if (!in_array($response->getStatusCode(), [200, 201])) {
            $error = empty($jsonObj->Message) === false ? $jsonObj->Message : $jsonObj->error->message;
            if (!empty($error)) {
                throw new ClientException($error);
            }
        }

        return $jsonObj;
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

    protected function getAccessTokenAuthorizationHeader(): string
    {
        if (is_null($this->accessToken)) {
            $this->updateAccessToken();
        }

        if ($this->accessToken->isExpired()) {
            $this->updateAccessToken();
        }

        return $this->accessToken->getTokenType() . ' ' . $this->accessToken->getAccessToken();
    }

    private function updateAccessToken(): void
    {
        $client_id = base64_encode("$this->applicationId:$this->sharedSecret");

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

        $response = json_decode($response->getBody());

        $this->accessToken = new AccessToken($response);
    }

    /**
     * @param AccessToken $accessToken
     */
    public function setAccessToken(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
    }
}
