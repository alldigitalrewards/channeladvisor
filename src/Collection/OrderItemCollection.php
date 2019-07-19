<?php

namespace AllDigitalRewards\ChannelAdvisor\Collection;

use AllDigitalRewards\ChannelAdvisor\Entities\OrderItem;

class OrderItemCollection extends AbstractCollection
{
    public function getEntityClass(): string
    {
        return OrderItem::class;
    }
}
