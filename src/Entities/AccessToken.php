<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class AccessToken extends AbstractEntity
{
    /**
     * @var string
     *
     * Authorization access token.
     */
    private $accessToken;
    /**
     * @var string
     *
     * Authorization header type (usually bearer)
     */
    private $tokenType;
    /**
     * @var int
     *
     * Seconds to expiration from creation time.
     */
    private $expiresIn;
    /**
     * @var int
     *
     * unix timestamp for creation time.
     */
    private $createdOn;

    public function __construct($data = null)
    {
        $this->createdOn = time();
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType(string $tokenType)
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    /**
     * @param int $expiresIn
     */
    public function setExpiresIn(int $expiresIn)
    {
        $this->expiresIn = $expiresIn;
    }

    public function isExpired()
    {
        // Add 3 seconds as a buffer to expiration.
        if (($this->expiresIn + $this->createdOn + 3) < time()) {
            return true;
        }

        return false;
    }
}
