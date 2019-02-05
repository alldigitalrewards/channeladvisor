<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class OrderCreated extends AbstractEntity
{
    /**
     * @var int
     *
     * Unique identifier of the product within the ChannelAdvisor account.
     */
    private $id;
    /**
     * @var int
     *
     * Identifies the ChannelAdvisor account.
     */
    private $ProfileID;
    /**
     * @var int
     */
    private $SiteID;
    /**
     * @var string
     */
    private $SiteName;
    /**
     * @var string
     */
    private $SiteOrderID;
    /**
     * @var null|string
     */
    private $SecondarySiteOrderID;
    /**
     * @var null|string
     */
    private $SellerOrderID;
    /**
     * @var null|string
     */
    private $CheckoutSourceID;
    /**
     * @var \DateTime
     */
    private $CreateDateUtc;
    /**
     * @var \DateTime
     */
    private $ImportDateUtc;
    /**
     * @var null|string
     */
    private $PublicNotes;
    /**
     * @var null|string
     */
    private $PrivateNotes;
    /**
     * @var string
     */
    private $BuyerUserId;
    /**
     * @var string
     */
    private $BuyerEmailAddress;
}
