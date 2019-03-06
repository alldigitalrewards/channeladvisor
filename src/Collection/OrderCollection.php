<?php

namespace AllDigitalRewards\ChannelAdvisor\Collection;

use AllDigitalRewards\ChannelAdvisor\Entities\Order;

class OrderCollection extends AbstractCollection
{
    public function getEntityClass(): string
    {
        return Order::class;
    }
}
