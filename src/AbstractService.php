<?php

namespace AllDigitalRewards\ChannelAdvisor;

abstract class AbstractService
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
