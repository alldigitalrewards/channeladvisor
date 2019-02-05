<?php

namespace AllDigitalRewards\ChannelAdvisor\Collection;

use AllDigitalRewards\ChannelAdvisor\Entities\Image;

class ImageCollection extends AbstractCollection
{
    public function getEntityClass(): string
    {
        return Image::class;
    }
}
