<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class OrderItem extends AbstractEntity
{
    /**
     * @var int
     */
    private $ID;
    /**
     * @var int
     */
    private $ProfileID;
    /**
     * @var int
     */
    private $OrderID;
    /**
     * @var int
     */
    private $ProductID;
    /**
     * @var string|null
     */
    private $SiteOrderItemID;
    /**
     * @var string|null
     */
    private $SellerOrderItemID;
    /**
     * @var string|null
     */
    private $SiteListingID;
    /**
     * @var string
     */
    private $Sku;
    /**
     * @var string
     */
    private $Title;
    /**
     * @var int
     */
    private $Quantity;
    /**
     * @var float
     */
    private $UnitPrice;
    /**
     * @var float|null
     */
    private $TaxPrice;
    /**
     * @var float|null
     */
    private $ShippingPrice;
    /**
     * @var float|null
     */
    private $ShippingTaxPrice;
    /**
     * @var float|null
     */
    private $RecyclingFee;
    /**
     * @var string|null
     */
    private $GiftMessage;
    /**
     * @var string|null
     */
    private $GiftNotes;
    /**
     * @var float|null
     */
    private $GiftPrice;
    /**
     * @var string|null
     */
    private $GiftTaxPrice;
    /**
     * @var boolean|null
     */
    private $IsBundle;
    /**
     * @var string|null
     */
    private $ItemURL;
    /**
     * @var string|null
     */
    private $HarmonizedCode;

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setID(int $ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getProfileID(): int
    {
        return $this->ProfileID;
    }

    /**
     * @param int $ProfileID
     */
    public function setProfileID(int $ProfileID)
    {
        $this->ProfileID = $ProfileID;
    }

    /**
     * @return int
     */
    public function getOrderID(): int
    {
        return $this->OrderID;
    }

    /**
     * @param int $OrderID
     */
    public function setOrderID(int $OrderID)
    {
        $this->OrderID = $OrderID;
    }

    /**
     * @return int
     */
    public function getProductID(): int
    {
        return $this->ProductID;
    }

    /**
     * @param int $ProductID
     */
    public function setProductID(int $ProductID)
    {
        $this->ProductID = $ProductID;
    }

    /**
     * @return string|null
     */
    public function getSiteOrderItemID(): string
    {
        return $this->SiteOrderItemID;
    }

    /**
     * @param string|null $SiteOrderItemID
     */
    public function setSiteOrderItemID(string $SiteOrderItemID)
    {
        $this->SiteOrderItemID = $SiteOrderItemID;
    }

    /**
     * @return string|null
     */
    public function getSellerOrderItemID(): string
    {
        return $this->SellerOrderItemID;
    }

    /**
     * @param string|null $SellerOrderItemID
     */
    public function setSellerOrderItemID(string $SellerOrderItemID)
    {
        $this->SellerOrderItemID = $SellerOrderItemID;
    }

    /**
     * @return string|null
     */
    public function getSiteListingID(): string
    {
        return $this->SiteListingID;
    }

    /**
     * @param string|null $SiteListingID
     */
    public function setSiteListingID(string $SiteListingID)
    {
        $this->SiteListingID = $SiteListingID;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->Sku;
    }

    /**
     * @param string $Sku
     */
    public function setSku(string $Sku)
    {
        $this->Sku = $Sku;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     */
    public function setTitle(string $Title)
    {
        $this->Title = $Title;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     */
    public function setQuantity(int $Quantity)
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     */
    public function setUnitPrice(float $UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
    }

    /**
     * @return float|null
     */
    public function getTaxPrice(): float
    {
        return $this->TaxPrice;
    }

    /**
     * @param float|null $TaxPrice
     */
    public function setTaxPrice(float $TaxPrice)
    {
        $this->TaxPrice = $TaxPrice;
    }

    /**
     * @return float|null
     */
    public function getShippingPrice(): float
    {
        return $this->ShippingPrice;
    }

    /**
     * @param float|null $ShippingPrice
     */
    public function setShippingPrice(float $ShippingPrice)
    {
        $this->ShippingPrice = $ShippingPrice;
    }

    /**
     * @return float|null
     */
    public function getShippingTaxPrice(): float
    {
        return $this->ShippingTaxPrice;
    }

    /**
     * @param float|null $ShippingTaxPrice
     */
    public function setShippingTaxPrice(float $ShippingTaxPrice)
    {
        $this->ShippingTaxPrice = $ShippingTaxPrice;
    }

    /**
     * @return float|null
     */
    public function getRecyclingFee(): float
    {
        return $this->RecyclingFee;
    }

    /**
     * @param float|null $RecyclingFee
     */
    public function setRecyclingFee(float $RecyclingFee)
    {
        $this->RecyclingFee = $RecyclingFee;
    }

    /**
     * @return string|null
     */
    public function getGiftMessage(): string
    {
        return $this->GiftMessage;
    }

    /**
     * @param string|null $GiftMessage
     */
    public function setGiftMessage(string $GiftMessage)
    {
        $this->GiftMessage = $GiftMessage;
    }

    /**
     * @return string|null
     */
    public function getGiftNotes(): string
    {
        return $this->GiftNotes;
    }

    /**
     * @param string|null $GiftNotes
     */
    public function setGiftNotes(string $GiftNotes)
    {
        $this->GiftNotes = $GiftNotes;
    }

    /**
     * @return float|null
     */
    public function getGiftPrice(): float
    {
        return $this->GiftPrice;
    }

    /**
     * @param float|null $GiftPrice
     */
    public function setGiftPrice(float $GiftPrice)
    {
        $this->GiftPrice = $GiftPrice;
    }

    /**
     * @return string|null
     */
    public function getGiftTaxPrice(): string
    {
        return $this->GiftTaxPrice;
    }

    /**
     * @param string|null $GiftTaxPrice
     */
    public function setGiftTaxPrice(string $GiftTaxPrice)
    {
        $this->GiftTaxPrice = $GiftTaxPrice;
    }

    /**
     * @return bool|null
     */
    public function getIsBundle(): bool
    {
        return $this->IsBundle;
    }

    /**
     * @param bool|null $IsBundle
     */
    public function setIsBundle(bool $IsBundle)
    {
        $this->IsBundle = $IsBundle;
    }

    /**
     * @return string|null
     */
    public function getItemURL(): string
    {
        return $this->ItemURL;
    }

    /**
     * @param string|null $ItemURL
     */
    public function setItemURL(string $ItemURL)
    {
        $this->ItemURL = $ItemURL;
    }

    /**
     * @return string|null
     */
    public function getHarmonizedCode(): string
    {
        return $this->HarmonizedCode;
    }

    /**
     * @param string|null $HarmonizedCode
     */
    public function setHarmonizedCode(string $HarmonizedCode)
    {
        $this->HarmonizedCode = $HarmonizedCode;
    }
}
