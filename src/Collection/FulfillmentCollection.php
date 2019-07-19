<?php

namespace AllDigitalRewards\ChannelAdvisor\Collection;

use AllDigitalRewards\ChannelAdvisor\Entities\Fulfillment;

class FulfillmentCollection extends AbstractCollection
{
    public function getEntityClass(): string
    {
        return Fulfillment::class;
    }
}
