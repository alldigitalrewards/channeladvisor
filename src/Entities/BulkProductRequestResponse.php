<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class BulkProductRequestResponse extends AbstractEntity
{
    private $Token;
    private $Status;
    private $StartedOnUtc;
    private $ResponseFileUrl;

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param mixed $Token
     */
    public function setToken($Token)
    {
        $this->Token = $Token;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return mixed
     */
    public function getStartedOnUtc()
    {
        return $this->StartedOnUtc;
    }

    /**
     * @param mixed $StartedOnUtc
     */
    public function setStartedOnUtc($StartedOnUtc)
    {
        $this->StartedOnUtc = $StartedOnUtc;
    }

    /**
     * @return mixed
     */
    public function getResponseFileUrl()
    {
        return $this->ResponseFileUrl;
    }

    /**
     * @param mixed $ResponseFileUrl
     */
    public function setResponseFileUrl($ResponseFileUrl)
    {
        $this->ResponseFileUrl = $ResponseFileUrl;
    }
}
