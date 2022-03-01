<?php

namespace AllDigitalRewards\ChannelAdvisor;

use AllDigitalRewards\ChannelAdvisor\Collection\FulfillmentCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\ImageCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\OrderCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\OrderItemCollection;
use AllDigitalRewards\ChannelAdvisor\Collection\ProductCollection;
use AllDigitalRewards\ChannelAdvisor\Entities\AccessToken;
use AllDigitalRewards\ChannelAdvisor\Entities\BulkProductRequestResponse;
use AllDigitalRewards\ChannelAdvisor\Entities\Order;
use AllDigitalRewards\ChannelAdvisor\Entities\Product;
use Exception;

class Client
{
    public const API_URL = 'https://api.channeladvisor.com';

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
     * HTTP Status code of last response.
     * @var int
     */
    private $statusCode;

    /**
     * @var int
     */
    private $profileId;

    /**
     * Client constructor.
     * @param int $profileId
     * @param string $refresh_token
     * @param string $application_id
     * @param string $shared_secret
     */
    public function __construct(
        string $refresh_token,
        string $application_id,
        string $shared_secret,
        int $profileId
    ) {
        $this->refreshToken = $refresh_token;
        $this->applicationId = $application_id;
        $this->sharedSecret = $shared_secret;
        $this->profileId = $profileId;
    }

    /**
     * @param int $profileId
     */
    public function setProfileId(int $profileId): void
    {
        $this->profileId = $profileId;
    }

    /**
     * @param \DateTime $dateTime
     * @return ProductCollection
     * @throws ApiException
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

        return $this->getProducts($nextLink);
    }

    /**
     * @param string|null $nextLink
     * @return ProductCollection
     * @throws ApiException
     */
    public function getProducts(string $nextLink = null): ProductCollection
    {
        if (is_null($nextLink)) {
            $nextLink = '/v1/Products';
        }

        $response = $this->sendRequest('GET', $nextLink);

        if ($response === null || empty($response->value) === true) {
            $this->setErrors('Api Exception');
            throw new ApiException(implode(', ', $this->getErrors()));
        }

        return new ProductCollection($response);
    }

    /**
     * @throws ApiException
     * @throws Exception
     */
    public function bulkProductsRequest()
    {
        $url = 'v1/ProductExport?access_token='
            . $this->getAccessToken()->getAccessToken()
            . '&profileid=' . $this->profileId
            . '&$filter=TotalQuantity%20gt%200';

        $response = $this->getHttpClient()->post(
            $url,
            [
                'headers' => [
                    'Authorization' => $this->getAccessTokenAuthorizationHeader(),
                    'Accept' => 'application/json',
                    'Content-Type' => 'text/plain'
                ]
            ]
        );

        $jsonObj = json_decode($response->getBody());

        if ($response->getStatusCode() !== 200) {
            $this->buildErrorsArray($jsonObj);
            $this->setErrors('Api Exception');
            throw new ApiException(implode(', ', $this->getErrors()));
        }

        return new BulkProductRequestResponse($jsonObj);
    }

    /**
     * @param string $token
     * @return BulkProductRequestResponse
     * @throws ApiException
     * @throws Exception
     */
    public function bulkProductRequestStatus(string $token)
    {
        $url = 'v1/ProductExport?access_token='
            . $this->getAccessToken()->getAccessToken()
            . '&token=' . $token;

        $response = $this->getHttpClient()->get(
            $url,
            [
                'headers' => [
                    'Authorization' => $this->getAccessTokenAuthorizationHeader(),
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]
        );

        $jsonObj = json_decode($response->getBody());

        if ($response->getStatusCode() !== 200) {
            $this->buildErrorsArray($jsonObj);
            $this->setErrors('Api Exception');
            throw new ApiException(implode(', ', $this->getErrors()));
        }

        return new BulkProductRequestResponse($jsonObj);
    }

    /**
     * @param string $product_id
     * @return Product
     * @throws ApiException
     */
    public function getProduct(string $product_id): Product
    {
        $response = $this->sendRequest('GET', Client::API_URL . '/v1/Products(' . $product_id . ')');

        if ($response !== null) {
            return new Product($response);
        }

        $this->setErrors('Invalid Product Id: ' . $product_id);

        throw new ApiException(implode(', ', $this->getErrors()));
    }

    /**
     * @param string $product_id
     * @return ImageCollection
     * @throws ApiException
     */
    public function getProductImages(string $product_id): ImageCollection
    {
        $response = $this->sendRequest(
            'GET',
            '/v1/Products(' . $product_id . ')/Images'
        );

        if ($response !== null && empty($response->value) === false) {
            return new ImageCollection($response);
        }

        if (empty($response->value) === true) {
            $this->setErrors('No image available');
        }

        throw new ApiException(implode(', ', $this->getErrors()));
    }

    /**
     * @param string|null $nextLink
     * @return OrderCollection
     * @throws ApiException
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

        if ($response === null || empty($response->value) === true) {
            $this->setErrors('Api Exception');
            throw new ApiException(implode(', ', $this->getErrors()));
        }

        return new OrderCollection($response);
    }

    /**
     * @param int $id
     * @return Order|null
     */
    public function getOrder(int $id)
    {
        $response = $this->sendRequest(
            'GET',
            "/v1/Orders($id)"
        );

        if ($response !== null) {
            return new Order($response);
        }

        return null;
    }

    /**
     * When to Use:
     * To mark an order as exported because it has already
     * been imported, and avoid receiving it in future GET Order requests
     * (assuming the right parameters are in the request).
     * This request needs to be executed one order at a time and cannot be sent in a batch request.
     * Will return null and empty errors (status 204)
     *
     * @param int $id
     * @return bool
     */
    public function exportOrder(int $id)
    {
        $this->sendRequest(
            'POST',
            "/v1/Orders($id)/Export"
        );

        return $this->statusCode === 204;
    }

    /**
     * @param int $orderId
     * @return bool
     * @throws Exception
     */
    public function cancelOrder(int $orderId)
    {
        $this->sendRequest(
            'POST',
            "/v1/Orders($orderId)/Adjust?access_token=" . $this->getAccessToken()->getAccessToken()
        );

        return $this->statusCode === 204;
    }

    /**
     * When to use:
     * Fetch Orders by exported or not
     *
     * @param bool $exported
     * @return OrderCollection|null
     */
    public function getExportedOrders(bool $exported = false)
    {
        $exported = $exported === true ? 'true' : 'false';

        $response = $this->sendRequest(
            'GET',
            "/v1/Orders?exported=$exported"
        );

        if ($response !== null && empty($response->value) === false) {
            return new OrderCollection($response);
        }

        return null;
    }

    /**
     * @param int $id
     * @return OrderItemCollection
     * @throws Exception
     */
    public function getOrderItems(int $id)
    {
        $response = $this->sendRequest(
            'GET',
            "/v1/Orders($id)/Items"
        );

        if ($response !== null && empty($response->value) === false) {
            return new OrderItemCollection($response);
        }

        $this->setErrors('Invalid Order Id: ' . $id);

        throw new ApiException(implode(', ', $this->getErrors()));
    }

    /**
     * @return FulfillmentCollection|null
     * @throws Exception
     */
    public function getFulfillments()
    {
        $response = $this->sendRequest(
            'GET',
            "/v1/Fulfillments?access_token=" . $this->getAccessToken()->getAccessToken()
        );
        if ($response !== null && empty($response->value) === false) {
            return new FulfillmentCollection($response);
        }

        return null;
    }

    /**
     * @param int $orderId
     * @return FulfillmentCollection|null
     * @throws Exception
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

        if ($response !== null && empty($response->value) === false) {
            return new FulfillmentCollection($response);
        }

        return null;
    }

    /**
     * @param $order
     * @return Order
     * @throws ApiException
     * @throws Exception
     */
    public function createOrder($order)
    {
        $order['TotalTaxPrice'] = 0.00;
        $order['TotalShippingPrice'] = 0.00;
        $order['TotalShippingTaxPrice'] = 0.00;
        $order['ShippingCountry'] = "US";
        $order['BillingTitle'] = "";
        $order['BillingFirstName'] = "All Digital Rewards";
        $order['BillingLastName'] = "All Digital Rewards";
        $order['BillingSuffix'] = "";
        $order['BillingCompanyName'] = "";
        $order['BillingCompanyJobTitle'] = null;
        $order['BillingDaytimePhone'] = "8664157703";
        $order['BillingEveningPhone'] = null;
        $order['BillingAddressLine1'] = "349 Lake Havasu Ave South";
        $order['BillingAddressLine2'] = "Suite 104";
        $order['BillingCity'] = "Lake Havasu City";
        $order['BillingStateOrProvince'] = "AZ";
        $order['BillingPostalCode'] = "86403";
        $order['BillingCountry'] = "US";
        $order['CheckoutStatus'] = "Completed";
        $order['PaymentStatus'] = "Cleared";

        $response = $this->sendRequest(
            'POST',
            '/v1/Orders?access_token=' . $this->getAccessToken()->getAccessToken(),
            $order
        );
        if ($response !== null) {
            return new Order($response);
        }

        throw new ApiException(implode(', ', $this->getErrors()));
    }

    /**
     * @param $type
     * @param $url
     * @param null $body
     * @return mixed|null
     */
    private function sendRequest($type, $url, $body = null)
    {
        try {
            $this->errors = [];

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
            $this->statusCode = $response->getStatusCode();

            if ($response->getStatusCode() >= 200 && $response->getStatusCode() <= 299) {
                return $jsonObj;
            }

            $this->buildErrorsArray($jsonObj);
        } catch (Exception $e) {
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

    /**
     * @param AccessToken $token
     */
    public function setAccessToken(AccessToken $token)
    {
        $this->accessToken = $token;
    }

    /**
     * @return AccessToken
     * @throws Exception
     */
    public function getAccessToken()
    {
        if ($this->accessToken === null || $this->accessToken->isExpired()) {
            $this->accessToken = $this->requestAccessToken();
        }

        return $this->accessToken;
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getAccessTokenAuthorizationHeader(): string
    {
        return $this->getAccessToken()->getTokenType() . ' ' . $this->getAccessToken()->getAccessToken();
    }

    /**
     * @return AccessToken
     * @throws Exception
     */
    private function requestAccessToken(): AccessToken
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

        $token = json_decode($response->getBody());
        $this->validateResponse($token);
        return new AccessToken($token);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param string $msg
     */
    public function setErrors(string $msg)
    {
        $this->errors = empty($this->getErrors()) === true
            ? [$msg]
            : $this->getErrors();
    }

    protected function buildErrorsArray($arr)
    {
        $array = json_decode(json_encode($arr), true);

        if (!is_array($array)) {
            //sometimes comes back NULL
            $this->errors[] = $array ?? 'No error message available. Status Code: ' . $this->statusCode;
            return;
        }
        foreach ($array as $k => $v) {
            if ($k === 'Message' || empty($v['message']) === false) {
                $this->errors[] = $k === 'Message' ? $v : $v['message'];
                continue;
            }
        }
    }

    /**
     * @throws Exception
     */
    private function validateResponse($token)
    {
        if (isset($token->error)) {
            throw new Exception($token->error);
        }
        if (empty($token->accessToken)) {
            throw new Exception('Failed to fetch Access Token');
        }
    }
}
