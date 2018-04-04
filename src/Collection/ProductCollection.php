<?php

namespace AllDigitalRewards\ChannelAdvisor\Collection;

use AllDigitalRewards\ChannelAdvisor\Response\Product;

class ProductCollection extends AbstractCollection
{
    public function getEntityClass(): string
    {
        return Product::class;
    }
}
