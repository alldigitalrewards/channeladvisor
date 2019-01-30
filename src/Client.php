<?php

namespace AllDigitalRewards\ChannelAdvisor;

use AllDigitalRewards\ChannelAdvisor\Response\AccessToken;

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
        $this->accessTokenHeader = $this->getAccessTokenAuthorizationHeader();
    }

    public function sendRequest($type, $url, $body = null): object
    {
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
