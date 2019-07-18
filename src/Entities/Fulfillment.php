<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class Fulfillment extends AbstractEntity
{
    private $ID;
    private $ProfileID;
    private $OrderID;
    private $CreatedDateUtc;
    private $UpdatedDateUtc;
    private $Type;
    private $DeliveryStatus;
    private $TrackingNumber;
    private $ShippingCarrier;
    private $ShippingClass;
    private $DistributionCenterID;
    private $ExternalFulfillmentCenterCode;
    private $ShippingCost;
    private $InsuranceCost;
    private $TaxCost;
    private $ShippedDateUtc;
    private $SellerFulfillmentID;
    private $HasShippingLabel;
    private $LabelFormat;
    private $Items;

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
    public function getCreatedDateUtc()
    {
        return $this->CreatedDateUtc;
    }

    /**
     * @param mixed $CreatedDateUtc
     */
    public function setCreatedDateUtc($CreatedDateUtc)
    {
        $this->CreatedDateUtc = $CreatedDateUtc;
    }

    /**
     * @return mixed
     */
    public function getUpdatedDateUtc()
    {
        return $this->UpdatedDateUtc;
    }

    /**
     * @param mixed $UpdatedDateUtc
     */
    public function setUpdatedDateUtc($UpdatedDateUtc)
    {
        $this->UpdatedDateUtc = $UpdatedDateUtc;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @return mixed
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }

    /**
     * @param mixed $DeliveryStatus
     */
    public function setDeliveryStatus($DeliveryStatus)
    {
        $this->DeliveryStatus = $DeliveryStatus;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param mixed $TrackingNumber
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
    }

    /**
     * @return mixed
     */
    public function getShippingCarrier()
    {
        return $this->ShippingCarrier;
    }

    /**
     * @param mixed $ShippingCarrier
     */
    public function setShippingCarrier($ShippingCarrier)
    {
        $this->ShippingCarrier = $ShippingCarrier;
    }

    /**
     * @return mixed
     */
    public function getShippingClass()
    {
        return $this->ShippingClass;
    }

    /**
     * @param mixed $ShippingClass
     */
    public function setShippingClass($ShippingClass)
    {
        $this->ShippingClass = $ShippingClass;
    }

    /**
     * @return mixed
     */
    public function getDistributionCenterID()
    {
        return $this->DistributionCenterID;
    }

    /**
     * @param mixed $DistributionCenterID
     */
    public function setDistributionCenterID($DistributionCenterID)
    {
        $this->DistributionCenterID = $DistributionCenterID;
    }

    /**
     * @return mixed
     */
    public function getExternalFulfillmentCenterCode()
    {
        return $this->ExternalFulfillmentCenterCode;
    }

    /**
     * @param mixed $ExternalFulfillmentCenterCode
     */
    public function setExternalFulfillmentCenterCode($ExternalFulfillmentCenterCode)
    {
        $this->ExternalFulfillmentCenterCode = $ExternalFulfillmentCenterCode;
    }

    /**
     * @return mixed
     */
    public function getShippingCost()
    {
        return $this->ShippingCost;
    }

    /**
     * @param mixed $ShippingCost
     */
    public function setShippingCost($ShippingCost)
    {
        $this->ShippingCost = $ShippingCost;
    }

    /**
     * @return mixed
     */
    public function getInsuranceCost()
    {
        return $this->InsuranceCost;
    }

    /**
     * @param mixed $InsuranceCost
     */
    public function setInsuranceCost($InsuranceCost)
    {
        $this->InsuranceCost = $InsuranceCost;
    }

    /**
     * @return mixed
     */
    public function getTaxCost()
    {
        return $this->TaxCost;
    }

    /**
     * @param mixed $TaxCost
     */
    public function setTaxCost($TaxCost)
    {
        $this->TaxCost = $TaxCost;
    }

    /**
     * @return mixed
     */
    public function getShippedDateUtc()
    {
        return $this->ShippedDateUtc;
    }

    /**
     * @param mixed $ShippedDateUtc
     */
    public function setShippedDateUtc($ShippedDateUtc)
    {
        $this->ShippedDateUtc = $ShippedDateUtc;
    }

    /**
     * @return mixed
     */
    public function getSellerFulfillmentID()
    {
        return $this->SellerFulfillmentID;
    }

    /**
     * @param mixed $SellerFulfillmentID
     */
    public function setSellerFulfillmentID($SellerFulfillmentID)
    {
        $this->SellerFulfillmentID = $SellerFulfillmentID;
    }

    /**
     * @return mixed
     */
    public function getHasShippingLabel()
    {
        return $this->HasShippingLabel;
    }

    /**
     * @param mixed $HasShippingLabel
     */
    public function setHasShippingLabel($HasShippingLabel)
    {
        $this->HasShippingLabel = $HasShippingLabel;
    }

    /**
     * @return mixed
     */
    public function getLabelFormat()
    {
        return $this->LabelFormat;
    }

    /**
     * @param mixed $LabelFormat
     */
    public function setLabelFormat($LabelFormat)
    {
        $this->LabelFormat = $LabelFormat;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * @param mixed $Items
     */
    public function setItems($Items)
    {
        $this->Items = $Items;
    }
}
