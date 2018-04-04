<?php

namespace AllDigitalRewards\ChannelAdvisor\Response;

use AllDigitalRewards\ChannelAdvisor\AbstractEntity;

class Product extends AbstractEntity
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
     * @var \DateTime
     *
     * The date the product was created in the ChannelAdvisor system.
     */
    private $CreateDateUtc;
    /**
     * @var boolean
     *
     * Whether or not the product is in a parent/child relationship.
     * Parents and children will be true, standalone products will be false.
     */
    private $IsInRelationship;
    /**
     * @var boolean
     *
     * True if the product is a parent with children.
     */
    private $IsParent;
    /**
     * @var string
     *
     * If the product is in a relationship, this value represents the relationship type.
     * The types are user-defined within ChannelAdvisor.
     */
    private $RelationshipName;
    /**
     * @var int
     *
     * If the product is a child, this will contain the ID of the parent product.
     */
    private $ParentProductID;
    /**
     * @var boolean
     * @depreciated
     *
     * Ignore. Deprecated Field.
     */
    private $IsAvailableInStore;
    /**
     * @var boolean
     *
     * A blocked product will not list on a marketplace
     */
    private $IsBlocked;
    /**
     * If true, will prevent listing and fulfillment from Externally-Managed DCs.
     *
     * @var boolean
     */
    private $IsExternalQuantityBlocked;
    /**
     * @var string
     *
     * Comment field associated with IsBlocked property.
     */
    private $BlockComment;
    /**
     * @var \DateTime
     */
    private $BlockedDateUtc;
    /**
     * @var \DateTime
     *
     * The date the product was received in inventory.
     */
    private $ReceivedDateUtc;
    /**
     * @var \DateTime
     *
     * The date the product was last sold.
     */
    private $LastSaleDateUtc;
    /**
     * @var \DateTime
     *
     * The date the product was last updated.
     */
    private $UpdateDateUtc;
    /**
     * @var \DateTime
     *
     * The date any quantity of the product was last updated.
     */
    private $QuantityUpdateDateUtc;
    /**
     * @var string
     *
     * Amazon Standard Identification Number
     */
    private $ASIN;
    /**
     * @var string
     */
    private $Brand;
    /**
     * @var string
     *
     * "New", "Used", "Refurbished", "Reconditioned", or "Like New" are the only valid values for this field.
     */
    private $Condition;
    /**
     * @var string
     */
    private $Description;
    /**
     * @var string
     *
     * European Article Number (Now called International Article Number)
     */
    private $EAN;
    /**
     * @var string
     *
     * Provides a short description of the flag associated with this product.
     */
    private $FlagDescription;
    /**
     * @var string
     *
     * Sets the flag style on a product
     */
    private $Flag;
    /**
     * @var string
     */
    private $HarmonizedCode;
    /**
     * @var string
     *
     * International Standard Book Number
     */
    private $ISBN;
    /**
     * @var string
     */
    private $Manufacturer;
    /**
     * @var string
     *
     * Manufacturer Part Number
     */
    private $MPN;
    /**
     * @var string
     */
    private $ShortDescription;
    /**
     * @var string
     */
    private $Sku;
    /**
     * @var string
     */
    private $Subtitle;
    /**
     * @var string
     *
     * Tax product code for this item (for reseller use, NOT sales tax).
     * Limited length - can also store in an attribute.
     */
    private $TaxProductCode;
    /**
     * @var string
     */
    private $Title;
    /**
     * @var string
     *
     * Universal Product Code
     */
    private $UPC;
    /**
     * @var string
     */
    private $WarehouseLocation;
    /**
     * @var string
     */
    private $Warranty;
    /**
     * @var float
     *
     * Default unit in US profiles is "Inches".
     * All other locales are "Centimeters".
     */
    private $Height;
    /**
     * @var float
     *
     * Default unit in US profiles is "Inches".
     * All other locales are "Centimeters".
     */
    private $Length;
    /**
     * @var float
     *
     * Default unit in US profiles is "Inches".
     * All other locales are "Centimeters".
     */
    private $Width;
    /**
     * @var float
     *
     * Default unit in US profiles is "Pounds".
     * All other locales are "Kilograms".
     */
    private $Weight;
    /**
     * @var float
     *
     * The price that the seller paid for this item.
     */
    private $Cost;
    /**
     * @var float
     *
     * Profit margin for a product.
     */
    private $Margin;
    /**
     * @var float
     *
     * Retail price for this item.
     */
    private $RetailPrice;
    /**
     * @var float
     *
     * For an eBay listing, the initial bid starting point.
     */
    private $StartingPrice;
    /**
     * @var float
     *
     * For an eBay listing, the minimum price for an auction to sell.
     */
    private $ReservePrice;
    /**
     * @var float
     *
     * Selling price of a product.
     */
    private $BuyItNowPrice;
    /**
     * @var float
     */
    private $StorePrice;
    /**
     * @var float
     *
     * Price above which you wish to offer underbidders of this item a second chance offer.
     */
    private $SecondChancePrice;
    /**
     * @var string
     *
     * The name of the supplier for this item
     */
    private $SupplierName;
    /**
     * @var string
     *
     * Code for the supplier of this item (must be created in ChannelAdvisor prior to use)
     */
    private $SupplierCode;
    /**
     * @var string
     *
     * Purchase Order associated with this supplier
     */
    private $SupplierPO;
    /**
     * @var string
     *
     * The inventory classification you would like to assign to this item;
     * you do not need to have the classification set up beforehand.
     */
    private $Classification;
    /**
     * @var boolean
     * @depreciated
     *
     * Ignore. Deprecated Field.
     */
    private $IsDisplayInStore;
    /**
     * @var string
     * @depreciated
     *
     * Ignore. Deprecated Field.
     */
    private $StoreTitle;
    /**
     * @var string
     * @depreciated
     *
     * Ignore. Deprecated Field.
     */
    private $StoreDescription;
    /**
     * @var string
     *
     * None = Not a bundle
     * BundleComponent = Is a component in at least 1 bundle
     * BundleItem = Is a bundle
     */
    private $BundleType;
    /**
     * @var int
     */
    private $TotalAvailableQuantity;
    /**
     * @var int
     */
    private $OpenAllocatedQuantity;
    /**
     * @var int
     */
    private $OpenAllocatedQuantityPooled;
    /**
     * @var int
     */
    private $PendingCheckoutQuantity;
    /**
     * @var int
     */
    private $PendingCheckoutQuantityPooled;
    /**
     * @var int
     */
    private $PendingPaymentQuantity;
    /**
     * @var int
     */
    private $PendingPaymentQuantityPooled;
    /**
     * @var int
     */
    private $PendingShipmentQuantity;
    /**
     * @var int
     */
    private $PendingShipmentQuantityPooled;
    /**
     * @var int
     */
    private $TotalQuantity;
    /**
     * @var int
     */
    private $TotalQuantityPooled;
    /**
     * @var array
     */
    private $Attributes;
    /**
     * @var array
     *
     * Quantity by Distribution Center
     */
    private $DCQuantities;
    /**
     * @var array
     */
    private $Images;
    /**
     * @var array
     *
     * List of labels on the product
     */
    private $Labels;
    /**
     * @var array
     */
    private $BundleComponents;
    /**
     * @var array
     *
     * Child Product ID information - only visible when retrieving parent by Product ID.
     */
    private $Children;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     * @return mixed
     */
    public function getCreateDateUtc()
    {
        return $this->CreateDateUtc;
    }

    /**
     * @param mixed $CreateDateUtc
     */
    public function setCreateDateUtc($CreateDateUtc)
    {
        $this->CreateDateUtc = $CreateDateUtc;
    }

    /**
     * @return bool
     */
    public function isInRelationship(): bool
    {
        return $this->IsInRelationship;
    }

    /**
     * @param bool $IsInRelationship
     */
    public function setIsInRelationship(bool $IsInRelationship)
    {
        $this->IsInRelationship = $IsInRelationship;
    }

    /**
     * @return bool
     */
    public function isParent(): bool
    {
        return $this->IsParent;
    }

    /**
     * @param bool $IsParent
     */
    public function setIsParent(bool $IsParent)
    {
        $this->IsParent = $IsParent;
    }

    /**
     * @return string
     */
    public function getRelationshipName(): string
    {
        return $this->RelationshipName;
    }

    /**
     * @param string $RelationshipName
     */
    public function setRelationshipName(string $RelationshipName)
    {
        $this->RelationshipName = $RelationshipName;
    }

    /**
     * @return int
     */
    public function getParentProductID(): int
    {
        return $this->ParentProductID;
    }

    /**
     * @param int $ParentProductID
     */
    public function setParentProductID(int $ParentProductID)
    {
        $this->ParentProductID = $ParentProductID;
    }

    /**
     * @return bool
     */
    public function isAvailableInStore(): bool
    {
        return $this->IsAvailableInStore;
    }

    /**
     * @param bool $IsAvailableInStore
     */
    public function setIsAvailableInStore(bool $IsAvailableInStore)
    {
        $this->IsAvailableInStore = $IsAvailableInStore;
    }

    /**
     * @return bool
     */
    public function isBlocked(): bool
    {
        return $this->IsBlocked;
    }

    /**
     * @param bool $IsBlocked
     */
    public function setIsBlocked(bool $IsBlocked)
    {
        $this->IsBlocked = $IsBlocked;
    }

    /**
     * @return bool
     */
    public function isExternalQuantityBlocked(): bool
    {
        return $this->IsExternalQuantityBlocked;
    }

    /**
     * @param bool $IsExternalQuantityBlocked
     */
    public function setIsExternalQuantityBlocked(bool $IsExternalQuantityBlocked)
    {
        $this->IsExternalQuantityBlocked = $IsExternalQuantityBlocked;
    }

    /**
     * @return string
     */
    public function getBlockComment(): string
    {
        return $this->BlockComment;
    }

    /**
     * @param string $BlockComment
     */
    public function setBlockComment(string $BlockComment)
    {
        $this->BlockComment = $BlockComment;
    }

    /**
     * @return \DateTime
     */
    public function getBlockedDateUtc(): \DateTime
    {
        return $this->BlockedDateUtc;
    }

    /**
     * @param \DateTime $BlockedDateUtc
     */
    public function setBlockedDateUtc(\DateTime $BlockedDateUtc)
    {
        $this->BlockedDateUtc = $BlockedDateUtc;
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDateUtc(): \DateTime
    {
        return $this->ReceivedDateUtc;
    }

    /**
     * @param \DateTime $ReceivedDateUtc
     */
    public function setReceivedDateUtc(\DateTime $ReceivedDateUtc)
    {
        $this->ReceivedDateUtc = $ReceivedDateUtc;
    }

    /**
     * @return \DateTime
     */
    public function getLastSaleDateUtc(): \DateTime
    {
        return $this->LastSaleDateUtc;
    }

    /**
     * @param \DateTime $LastSaleDateUtc
     */
    public function setLastSaleDateUtc(\DateTime $LastSaleDateUtc)
    {
        $this->LastSaleDateUtc = $LastSaleDateUtc;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDateUtc(): \DateTime
    {
        return $this->UpdateDateUtc;
    }

    /**
     * @param \DateTime $UpdateDateUtc
     */
    public function setUpdateDateUtc(\DateTime $UpdateDateUtc)
    {
        $this->UpdateDateUtc = $UpdateDateUtc;
    }

    /**
     * @return \DateTime
     */
    public function getQuantityUpdateDateUtc(): \DateTime
    {
        return $this->QuantityUpdateDateUtc;
    }

    /**
     * @param \DateTime $QuantityUpdateDateUtc
     */
    public function setQuantityUpdateDateUtc(\DateTime $QuantityUpdateDateUtc)
    {
        $this->QuantityUpdateDateUtc = $QuantityUpdateDateUtc;
    }

    /**
     * @return string
     */
    public function getASIN(): string
    {
        return $this->ASIN;
    }

    /**
     * @param string $ASIN
     */
    public function setASIN(string $ASIN)
    {
        $this->ASIN = $ASIN;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->Brand;
    }

    /**
     * @param string $Brand
     */
    public function setBrand(string $Brand)
    {
        $this->Brand = $Brand;
    }

    /**
     * @return string
     */
    public function getCondition(): string
    {
        return $this->Condition;
    }

    /**
     * @param string $Condition
     */
    public function setCondition(string $Condition)
    {
        $this->Condition = $Condition;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     */
    public function setDescription(string $Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getEAN(): string
    {
        return $this->EAN;
    }

    /**
     * @param string $EAN
     */
    public function setEAN(string $EAN)
    {
        $this->EAN = $EAN;
    }

    /**
     * @return string
     */
    public function getFlagDescription(): string
    {
        return $this->FlagDescription;
    }

    /**
     * @param string $FlagDescription
     */
    public function setFlagDescription(string $FlagDescription)
    {
        $this->FlagDescription = $FlagDescription;
    }

    /**
     * @return string
     */
    public function getFlag(): string
    {
        return $this->Flag;
    }

    /**
     * @param string $Flag
     */
    public function setFlag(string $Flag)
    {
        $this->Flag = $Flag;
    }

    /**
     * @return string
     */
    public function getHarmonizedCode(): string
    {
        return $this->HarmonizedCode;
    }

    /**
     * @param string $HarmonizedCode
     */
    public function setHarmonizedCode(string $HarmonizedCode)
    {
        $this->HarmonizedCode = $HarmonizedCode;
    }

    /**
     * @return string
     */
    public function getISBN(): string
    {
        return $this->ISBN;
    }

    /**
     * @param string $ISBN
     */
    public function setISBN(string $ISBN)
    {
        $this->ISBN = $ISBN;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->Manufacturer;
    }

    /**
     * @param string $Manufacturer
     */
    public function setManufacturer(string $Manufacturer)
    {
        $this->Manufacturer = $Manufacturer;
    }

    /**
     * @return string
     */
    public function getMPN(): string
    {
        return $this->MPN;
    }

    /**
     * @param string $MPN
     */
    public function setMPN(string $MPN)
    {
        $this->MPN = $MPN;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->ShortDescription;
    }

    /**
     * @param string $ShortDescription
     */
    public function setShortDescription(string $ShortDescription)
    {
        $this->ShortDescription = $ShortDescription;
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
    public function getSubtitle(): string
    {
        return $this->Subtitle;
    }

    /**
     * @param string $Subtitle
     */
    public function setSubtitle(string $Subtitle)
    {
        $this->Subtitle = $Subtitle;
    }

    /**
     * @return string
     */
    public function getTaxProductCode(): string
    {
        return $this->TaxProductCode;
    }

    /**
     * @param string $TaxProductCode
     */
    public function setTaxProductCode(string $TaxProductCode)
    {
        $this->TaxProductCode = $TaxProductCode;
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
     * @return string
     */
    public function getUPC(): string
    {
        return $this->UPC;
    }

    /**
     * @param string $UPC
     */
    public function setUPC(string $UPC)
    {
        $this->UPC = $UPC;
    }

    /**
     * @return string
     */
    public function getWarehouseLocation(): string
    {
        return $this->WarehouseLocation;
    }

    /**
     * @param string $WarehouseLocation
     */
    public function setWarehouseLocation(string $WarehouseLocation)
    {
        $this->WarehouseLocation = $WarehouseLocation;
    }

    /**
     * @return string
     */
    public function getWarranty(): string
    {
        return $this->Warranty;
    }

    /**
     * @param string $Warranty
     */
    public function setWarranty(string $Warranty)
    {
        $this->Warranty = $Warranty;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->Height;
    }

    /**
     * @param float $Height
     */
    public function setHeight(float $Height)
    {
        $this->Height = $Height;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->Length;
    }

    /**
     * @param float $Length
     */
    public function setLength(float $Length)
    {
        $this->Length = $Length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->Width;
    }

    /**
     * @param float $Width
     */
    public function setWidth(float $Width)
    {
        $this->Width = $Width;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     */
    public function setWeight(float $Weight)
    {
        $this->Weight = $Weight;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->Cost;
    }

    /**
     * @param float $Cost
     */
    public function setCost(float $Cost)
    {
        $this->Cost = $Cost;
    }

    /**
     * @return float
     */
    public function getMargin(): float
    {
        return $this->Margin;
    }

    /**
     * @param float $Margin
     */
    public function setMargin(float $Margin)
    {
        $this->Margin = $Margin;
    }

    /**
     * @return float
     */
    public function getRetailPrice(): float
    {
        return $this->RetailPrice;
    }

    /**
     * @param float $RetailPrice
     */
    public function setRetailPrice(float $RetailPrice)
    {
        $this->RetailPrice = $RetailPrice;
    }

    /**
     * @return float
     */
    public function getStartingPrice(): float
    {
        return $this->StartingPrice;
    }

    /**
     * @param float $StartingPrice
     */
    public function setStartingPrice(float $StartingPrice)
    {
        $this->StartingPrice = $StartingPrice;
    }

    /**
     * @return float
     */
    public function getReservePrice(): float
    {
        return $this->ReservePrice;
    }

    /**
     * @param float $ReservePrice
     */
    public function setReservePrice(float $ReservePrice)
    {
        $this->ReservePrice = $ReservePrice;
    }

    /**
     * @return float
     */
    public function getBuyItNowPrice(): float
    {
        return $this->BuyItNowPrice;
    }

    /**
     * @param float $BuyItNowPrice
     */
    public function setBuyItNowPrice(float $BuyItNowPrice)
    {
        $this->BuyItNowPrice = $BuyItNowPrice;
    }

    /**
     * @return float
     */
    public function getStorePrice(): float
    {
        return $this->StorePrice;
    }

    /**
     * @param float $StorePrice
     */
    public function setStorePrice(float $StorePrice)
    {
        $this->StorePrice = $StorePrice;
    }

    /**
     * @return float
     */
    public function getSecondChancePrice(): float
    {
        return $this->SecondChancePrice;
    }

    /**
     * @param float $SecondChancePrice
     */
    public function setSecondChancePrice(float $SecondChancePrice)
    {
        $this->SecondChancePrice = $SecondChancePrice;
    }

    /**
     * @return string
     */
    public function getSupplierName(): string
    {
        return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     */
    public function setSupplierName(string $SupplierName)
    {
        $this->SupplierName = $SupplierName;
    }

    /**
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     */
    public function setSupplierCode(string $SupplierCode)
    {
        $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return string
     */
    public function getSupplierPO(): string
    {
        return $this->SupplierPO;
    }

    /**
     * @param string $SupplierPO
     */
    public function setSupplierPO(string $SupplierPO)
    {
        $this->SupplierPO = $SupplierPO;
    }

    /**
     * @return string
     */
    public function getClassification(): string
    {
        return $this->Classification;
    }

    /**
     * @param string $Classification
     */
    public function setClassification(string $Classification)
    {
        $this->Classification = $Classification;
    }

    /**
     * @return bool
     */
    public function isDisplayInStore(): bool
    {
        return $this->IsDisplayInStore;
    }

    /**
     * @param bool $IsDisplayInStore
     */
    public function setIsDisplayInStore(bool $IsDisplayInStore)
    {
        $this->IsDisplayInStore = $IsDisplayInStore;
    }

    /**
     * @return string
     */
    public function getStoreTitle(): string
    {
        return $this->StoreTitle;
    }

    /**
     * @param string $StoreTitle
     */
    public function setStoreTitle(string $StoreTitle)
    {
        $this->StoreTitle = $StoreTitle;
    }

    /**
     * @return string
     */
    public function getStoreDescription(): string
    {
        return $this->StoreDescription;
    }

    /**
     * @param string $StoreDescription
     */
    public function setStoreDescription(string $StoreDescription)
    {
        $this->StoreDescription = $StoreDescription;
    }

    /**
     * @return string
     */
    public function getBundleType(): string
    {
        return $this->BundleType;
    }

    /**
     * @param string $BundleType
     */
    public function setBundleType(string $BundleType)
    {
        $this->BundleType = $BundleType;
    }

    /**
     * @return int
     */
    public function getTotalAvailableQuantity(): int
    {
        return $this->TotalAvailableQuantity;
    }

    /**
     * @param int $TotalAvailableQuantity
     */
    public function setTotalAvailableQuantity(int $TotalAvailableQuantity)
    {
        $this->TotalAvailableQuantity = $TotalAvailableQuantity;
    }

    /**
     * @return int
     */
    public function getOpenAllocatedQuantity(): int
    {
        return $this->OpenAllocatedQuantity;
    }

    /**
     * @param int $OpenAllocatedQuantity
     */
    public function setOpenAllocatedQuantity(int $OpenAllocatedQuantity)
    {
        $this->OpenAllocatedQuantity = $OpenAllocatedQuantity;
    }

    /**
     * @return int
     */
    public function getOpenAllocatedQuantityPooled(): int
    {
        return $this->OpenAllocatedQuantityPooled;
    }

    /**
     * @param int $OpenAllocatedQuantityPooled
     */
    public function setOpenAllocatedQuantityPooled(int $OpenAllocatedQuantityPooled)
    {
        $this->OpenAllocatedQuantityPooled = $OpenAllocatedQuantityPooled;
    }

    /**
     * @return int
     */
    public function getPendingCheckoutQuantity(): int
    {
        return $this->PendingCheckoutQuantity;
    }

    /**
     * @param int $PendingCheckoutQuantity
     */
    public function setPendingCheckoutQuantity(int $PendingCheckoutQuantity)
    {
        $this->PendingCheckoutQuantity = $PendingCheckoutQuantity;
    }

    /**
     * @return int
     */
    public function getPendingCheckoutQuantityPooled(): int
    {
        return $this->PendingCheckoutQuantityPooled;
    }

    /**
     * @param int $PendingCheckoutQuantityPooled
     */
    public function setPendingCheckoutQuantityPooled(int $PendingCheckoutQuantityPooled)
    {
        $this->PendingCheckoutQuantityPooled = $PendingCheckoutQuantityPooled;
    }

    /**
     * @return int
     */
    public function getPendingPaymentQuantity(): int
    {
        return $this->PendingPaymentQuantity;
    }

    /**
     * @param int $PendingPaymentQuantity
     */
    public function setPendingPaymentQuantity(int $PendingPaymentQuantity)
    {
        $this->PendingPaymentQuantity = $PendingPaymentQuantity;
    }

    /**
     * @return int
     */
    public function getPendingPaymentQuantityPooled(): int
    {
        return $this->PendingPaymentQuantityPooled;
    }

    /**
     * @param int $PendingPaymentQuantityPooled
     */
    public function setPendingPaymentQuantityPooled(int $PendingPaymentQuantityPooled)
    {
        $this->PendingPaymentQuantityPooled = $PendingPaymentQuantityPooled;
    }

    /**
     * @return int
     */
    public function getPendingShipmentQuantity(): int
    {
        return $this->PendingShipmentQuantity;
    }

    /**
     * @param int $PendingShipmentQuantity
     */
    public function setPendingShipmentQuantity(int $PendingShipmentQuantity)
    {
        $this->PendingShipmentQuantity = $PendingShipmentQuantity;
    }

    /**
     * @return int
     */
    public function getPendingShipmentQuantityPooled(): int
    {
        return $this->PendingShipmentQuantityPooled;
    }

    /**
     * @param int $PendingShipmentQuantityPooled
     */
    public function setPendingShipmentQuantityPooled(int $PendingShipmentQuantityPooled)
    {
        $this->PendingShipmentQuantityPooled = $PendingShipmentQuantityPooled;
    }

    /**
     * @return int
     */
    public function getTotalQuantity(): int
    {
        return $this->TotalQuantity;
    }

    /**
     * @param int $TotalQuantity
     */
    public function setTotalQuantity(int $TotalQuantity)
    {
        $this->TotalQuantity = $TotalQuantity;
    }

    /**
     * @return int
     */
    public function getTotalQuantityPooled(): int
    {
        return $this->TotalQuantityPooled;
    }

    /**
     * @param int $TotalQuantityPooled
     */
    public function setTotalQuantityPooled(int $TotalQuantityPooled)
    {
        $this->TotalQuantityPooled = $TotalQuantityPooled;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->Attributes;
    }

    /**
     * @param array $Attributes
     */
    public function setAttributes(array $Attributes)
    {
        $this->Attributes = $Attributes;
    }

    /**
     * @return array
     */
    public function getDCQuantities(): array
    {
        return $this->DCQuantities;
    }

    /**
     * @param array $DCQuantities
     */
    public function setDCQuantities(array $DCQuantities)
    {
        $this->DCQuantities = $DCQuantities;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->Images;
    }

    /**
     * @param array $Images
     */
    public function setImages(array $Images)
    {
        $this->Images = $Images;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->Labels;
    }

    /**
     * @param array $Labels
     */
    public function setLabels(array $Labels)
    {
        $this->Labels = $Labels;
    }

    /**
     * @return array
     */
    public function getBundleComponents(): array
    {
        return $this->BundleComponents;
    }

    /**
     * @param array $BundleComponents
     */
    public function setBundleComponents(array $BundleComponents)
    {
        $this->BundleComponents = $BundleComponents;
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->Children;
    }

    /**
     * @param array $Children
     */
    public function setChildren(array $Children)
    {
        $this->Children = $Children;
    }
}
