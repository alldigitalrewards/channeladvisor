<?php

namespace AllDigitalRewards\ChannelAdvisor\Collection;

use AllDigitalRewards\ChannelAdvisor\Entities\Product;

class ProductCollection extends AbstractCollection
{
    public function getEntityClass(): string
    {
        return Product::class;
    }
}
