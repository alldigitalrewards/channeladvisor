<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class OrderItem extends AbstractEntity
{
    private $ID;
    private $ProfileID;
    private $OrderID;
    private $ProductID;
    private $SiteOrderItemID;
    private $SellerOrderItemID;
    private $SiteListingID;
    private $Sku;
    private $Title;
    private $Quantity;
    private $UnitPrice;
    private $TaxPrice;
    private $ShippingPrice;
    private $ShippingTaxPrice;
    private $RecyclingFee;
    private $UnitEstimatedShippingCost;
    private $GiftMessage;
    private $GiftNotes;
    private $GiftPrice;
    private $GiftTaxPrice;
    private $IsBundle;
    private $ItemURL;
    private $HarmonizedCode;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }

    /**
     * @param mixed $ProfileID
     */
    public function setProfileID($ProfileID)
    {
        $this->ProfileID = $ProfileID;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @param mixed $OrderID
     */
    public function setOrderID($OrderID)
    {
        $this->OrderID = $OrderID;
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param mixed $ProductID
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;
    }

    /**
     * @return mixed
     */
    public function getSiteOrderItemID()
    {
        return $this->SiteOrderItemID;
    }

    /**
     * @param mixed $SiteOrderItemID
     */
    public function setSiteOrderItemID($SiteOrderItemID)
    {
        $this->SiteOrderItemID = $SiteOrderItemID;
    }

    /**
     * @return mixed
     */
    public function getSellerOrderItemID()
    {
        return $this->SellerOrderItemID;
    }

    /**
     * @param mixed $SellerOrderItemID
     */
    public function setSellerOrderItemID($SellerOrderItemID)
    {
        $this->SellerOrderItemID = $SellerOrderItemID;
    }

    /**
     * @return mixed
     */
    public function getSiteListingID()
    {
        return $this->SiteListingID;
    }

    /**
     * @param mixed $SiteListingID
     */
    public function setSiteListingID($SiteListingID)
    {
        $this->SiteListingID = $SiteListingID;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->Sku;
    }

    /**
     * @param mixed $Sku
     */
    public function setSku($Sku)
    {
        $this->Sku = $Sku;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param mixed $Quantity
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param mixed $UnitPrice
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
    }

    /**
     * @return mixed
     */
    public function getTaxPrice()
    {
        return $this->TaxPrice;
    }

    /**
     * @param mixed $TaxPrice
     */
    public function setTaxPrice($TaxPrice)
    {
        $this->TaxPrice = $TaxPrice;
    }

    /**
     * @return mixed
     */
    public function getShippingPrice()
    {
        return $this->ShippingPrice;
    }

    /**
     * @param mixed $ShippingPrice
     */
    public function setShippingPrice($ShippingPrice)
    {
        $this->ShippingPrice = $ShippingPrice;
    }

    /**
     * @return mixed
     */
    public function getShippingTaxPrice()
    {
        return $this->ShippingTaxPrice;
    }

    /**
     * @param mixed $ShippingTaxPrice
     */
    public function setShippingTaxPrice($ShippingTaxPrice)
    {
        $this->ShippingTaxPrice = $ShippingTaxPrice;
    }

    /**
     * @return mixed
     */
    public function getRecyclingFee()
    {
        return $this->RecyclingFee;
    }

    /**
     * @param mixed $RecyclingFee
     */
    public function setRecyclingFee($RecyclingFee)
    {
        $this->RecyclingFee = $RecyclingFee;
    }

    /**
     * @return mixed
     */
    public function getUnitEstimatedShippingCost()
    {
        return $this->UnitEstimatedShippingCost;
    }

    /**
     * @param mixed $UnitEstimatedShippingCost
     */
    public function setUnitEstimatedShippingCost($UnitEstimatedShippingCost)
    {
        $this->UnitEstimatedShippingCost = $UnitEstimatedShippingCost;
    }

    /**
     * @return mixed
     */
    public function getGiftMessage()
    {
        return $this->GiftMessage;
    }

    /**
     * @param mixed $GiftMessage
     */
    public function setGiftMessage($GiftMessage)
    {
        $this->GiftMessage = $GiftMessage;
    }

    /**
     * @return mixed
     */
    public function getGiftNotes()
    {
        return $this->GiftNotes;
    }

    /**
     * @param mixed $GiftNotes
     */
    public function setGiftNotes($GiftNotes)
    {
        $this->GiftNotes = $GiftNotes;
    }

    /**
     * @return mixed
     */
    public function getGiftPrice()
    {
        return $this->GiftPrice;
    }

    /**
     * @param mixed $GiftPrice
     */
    public function setGiftPrice($GiftPrice)
    {
        $this->GiftPrice = $GiftPrice;
    }

    /**
     * @return mixed
     */
    public function getGiftTaxPrice()
    {
        return $this->GiftTaxPrice;
    }

    /**
     * @param mixed $GiftTaxPrice
     */
    public function setGiftTaxPrice($GiftTaxPrice)
    {
        $this->GiftTaxPrice = $GiftTaxPrice;
    }

    /**
     * @return mixed
     */
    public function getIsBundle()
    {
        return $this->IsBundle;
    }

    /**
     * @param mixed $IsBundle
     */
    public function setIsBundle($IsBundle)
    {
        $this->IsBundle = $IsBundle;
    }

    /**
     * @return mixed
     */
    public function getItemURL()
    {
        return $this->ItemURL;
    }

    /**
     * @param mixed $ItemURL
     */
    public function setItemURL($ItemURL)
    {
        $this->ItemURL = $ItemURL;
    }

    /**
     * @return mixed
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }

    /**
     * @param mixed $HarmonizedCode
     */
    public function setHarmonizedCode($HarmonizedCode)
    {
        $this->HarmonizedCode = $HarmonizedCode;
    }
}
