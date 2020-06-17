<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class Fulfillment extends AbstractEntity
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
     * @var mixed
     */
    private $CreatedDateUtc;
    /**
     * @var mixed
     */
    private $UpdatedDateUtc;
    /**
     * @var mixed
     */
    private $Type;
    /**
     * @var mixed
     */
    private $DeliveryStatus;
    /**
     * @var string|null
     */
    private $TrackingNumber;
    /**
     * @var string|null
     */
    private $ShippingCarrier;
    /**
     * @var string|null
     */
    private $ShippingClass;
    /**
     * @var int
     */
    private $DistributionCenterID;
    /**
     * @var string|null
     */
    private $ExternalFulfillmentCenterCode;
    /**
     * @var float|null
     */
    private $ShippingCost;
    /**
     * @var float|null
     */
    private $InsuranceCost;
    /**
     * @var float|null
     */
    private $TaxCost;
    /**
     * @var mixed
     */
    private $ShippedDateUtc;
    /**
     * @var string|null
     */
    private $SellerFulfillmentID;
    /**
     * @var boolean
     */
    private $HasShippingLabel;
    /**
     * @var mixed
     */
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
     * @return string|null
     */
    public function getTrackingNumber(): string
    {
        return $this->TrackingNumber;
    }

    /**
     * @param string|null $TrackingNumber
     */
    public function setTrackingNumber(string $TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
    }

    /**
     * @return string|null
     */
    public function getShippingCarrier(): string
    {
        return $this->ShippingCarrier;
    }

    /**
     * @param string|null $ShippingCarrier
     */
    public function setShippingCarrier(string $ShippingCarrier)
    {
        $this->ShippingCarrier = $ShippingCarrier;
    }

    /**
     * @return string|null
     */
    public function getShippingClass(): string
    {
        return $this->ShippingClass;
    }

    /**
     * @param string|null $ShippingClass
     */
    public function setShippingClass(string $ShippingClass)
    {
        $this->ShippingClass = $ShippingClass;
    }

    /**
     * @return int
     */
    public function getDistributionCenterID(): int
    {
        return $this->DistributionCenterID;
    }

    /**
     * @param int $DistributionCenterID
     */
    public function setDistributionCenterID(int $DistributionCenterID)
    {
        $this->DistributionCenterID = $DistributionCenterID;
    }

    /**
     * @return string|null
     */
    public function getExternalFulfillmentCenterCode(): string
    {
        return $this->ExternalFulfillmentCenterCode;
    }

    /**
     * @param string|null $ExternalFulfillmentCenterCode
     */
    public function setExternalFulfillmentCenterCode(string $ExternalFulfillmentCenterCode)
    {
        $this->ExternalFulfillmentCenterCode = $ExternalFulfillmentCenterCode;
    }

    /**
     * @return float|null
     */
    public function getShippingCost(): float
    {
        return $this->ShippingCost;
    }

    /**
     * @param float|null $ShippingCost
     */
    public function setShippingCost(float $ShippingCost)
    {
        $this->ShippingCost = $ShippingCost;
    }

    /**
     * @return float|null
     */
    public function getInsuranceCost(): float
    {
        return $this->InsuranceCost;
    }

    /**
     * @param float|null $InsuranceCost
     */
    public function setInsuranceCost(float $InsuranceCost)
    {
        $this->InsuranceCost = $InsuranceCost;
    }

    /**
     * @return float|null
     */
    public function getTaxCost(): float
    {
        return $this->TaxCost;
    }

    /**
     * @param float|null $TaxCost
     */
    public function setTaxCost(float $TaxCost)
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
     * @return string|null
     */
    public function getSellerFulfillmentID(): string
    {
        return $this->SellerFulfillmentID;
    }

    /**
     * @param string|null $SellerFulfillmentID
     */
    public function setSellerFulfillmentID(string $SellerFulfillmentID)
    {
        $this->SellerFulfillmentID = $SellerFulfillmentID;
    }

    /**
     * @return bool
     */
    public function isHasShippingLabel(): bool
    {
        return $this->HasShippingLabel;
    }

    /**
     * @param bool $HasShippingLabel
     */
    public function setHasShippingLabel(bool $HasShippingLabel)
    {
        $this->HasShippingLabel = $HasShippingLabel;
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
