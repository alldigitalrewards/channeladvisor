<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class Order extends AbstractEntity
{
    /**
     * @var int
     *
     * Unique identifier of the product within the ChannelAdvisor account.
     */
    protected $id;

    protected $OrderId;
    /**
     * @var int
     *
     * Identifies the ChannelAdvisor account.
     */
    protected $ProfileID;
    /**
     * @var int
     */
    protected $SiteID;
    /**
     * @var string
     */
    protected $SiteName;
    /**
     * @var string
     */
    protected $SiteOrderID;
    /**
     * @var mixed
     */
    protected $SiteAccountID;
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var string|null
     */
    protected $SecondarySiteOrderID;
    /**
     * @var string|null
     */
    protected $SellerOrderID;
    /**
     * @var mixed
     */
    protected $CheckoutSourceID;
    /**
     * @var mixed
     */
    protected $CreateDateUtc;
    /**
     * @var mixed
     */
    protected $ImportDateUtc;
    /**
     * @var string|null
     */
    protected $PublicNotes;
    /**
     * @var string|null
     */
    protected $PrivateNotes;
    /**
     * @var string|null
     */
    protected $BuyerUserId;
    /**
     * @var string
     */
    protected $BuyerEmailAddress;
    /**
     * @var string|null
     */
    protected $SpecialInstructions;
    /**
     * @var float
     */
    protected $TotalPrice;
    /**
     * @var float|null
     */
    protected $TotalTaxPrice;
    /**
     * @var float|null
     */
    protected $TotalShippingPrice;
    /**
     * @var float|null
     */
    protected $TotalShippingTaxPrice;
    /**
     * @var float|null
     */
    protected $TotalInsurancePrice;
    /**
     * @var float|null
     */
    protected $TotalGiftOptionPrice;
    /**
     * @var float|null
     */
    protected $TotalGiftOptionTaxPrice;
    /**
     * @var float|null
     */
    protected $AdditionalCostOrDiscount;
    /**
     * @var mixed
     */
    protected $EstimatedShipDateUtc;
    /**
     * @var mixed
     */
    protected $DeliverByDateUtc;
    /**
     * @var string|null
     */
    protected $RequestedShippingCarrier;
    /**
     * @var string|null
     */
    protected $RequestedShippingClass;
    /**
     * @var string|null
     */
    protected $ResellerID;
    /**
     * @var mixed
     */
    protected $FlagID;
    /**
     * @var string|null
     */
    protected $FlagDescription;
    /**
     * @var string|null
     */
    protected $OrderTags;
    /**
     * @var mixed
     */
    protected $DistributionCenterTypeRollup;
    /**
     * @var mixed
     */
    protected $CheckoutStatus;
    /**
     * @var mixed
     */
    protected $PaymentStatus;
    /**
     * @var mixed
     */
    protected $ShippingStatus;
    /**
     * @var mixed
     */
    protected $CheckoutDateUtc;
    /**
     * @var mixed
     */
    protected $PaymentDateUtc;
    /**
     * @var mixed
     */
    protected $ShippingDateUtc;
    /**
     * @var boolean
     */
    protected $BuyerEmailOptIn;
    /**
     * @var mixed
     */
    protected $OrderTaxType;
    /**
     * @var mixed
     */
    protected $ShippingTaxType;
    /**
     * @var mixed
     */
    protected $GiftOptionsTaxType;
    /**
     * @var string
     */
    protected $PaymentMethod;
    /**
     * @var string|null
     */
    protected $PaymentTransactionID;
    /**
     * @var string|null
     */
    protected $PaymentPaypalAccountID;
    /**
     * @var string|null
     */
    protected $PaymentCreditCardLast4;
    /**
     * @var string|null
     */
    protected $PaymentMerchantReferenceNumber;
    /**
     * @var string|null
     */
    protected $ShippingTitle;
    /**
     * @var string|null
     */
    protected $ShippingFirstName;
    /**
     * @var string|null
     */
    protected $ShippingLastName;
    /**
     * @var string|null
     */
    protected $ShippingSuffix;
    /**
     * @var string|null
     */
    protected $ShippingCompanyName;
    /**
     * @var string|null
     */
    protected $ShippingCompanyJobTitle;
    /**
     * @var string|null
     */
    protected $ShippingDaytimePhone;
    /**
     * @var string|null
     */
    protected $ShippingEveningPhone;
    /**
     * @var string|null
     */
    protected $ShippingAddressLine1;
    /**
     * @var string|null
     */
    protected $ShippingAddressLine2;
    /**
     * @var string|null
     */
    protected $ShippingCity;
    /**
     * @var string|null
     */
    protected $ShippingStateOrProvince;
    /**
     * @var string|null
     */
    protected $ShippingStateOrProvinceName;
    /**
     * @var string|null
     */
    protected $ShippingPostalCode;
    /**
     * @var string|null
     */
    protected $ShippingCountry;
    /**
     * @var string|null
     */
    protected $BillingTitle;
    /**
     * @var string|null
     */
    protected $BillingFirstName;
    /**
     * @var string|null
     */
    protected $BillingLastName;
    /**
     * @var string|null
     */
    protected $BillingSuffix;
    /**
     * @var string|null
     */
    protected $BillingCompanyName;
    /**
     * @var string|null
     */
    protected $BillingCompanyJobTitle;
    /**
     * @var string|null
     */
    protected $BillingDaytimePhone;
    /**
     * @var string|null
     */
    protected $BillingEveningPhone;
    /**
     * @var string|null
     */
    protected $BillingAddressLine1;
    /**
     * @var string|null
     */
    protected $BillingAddressLine2;
    /**
     * @var string|null
     */
    protected $BillingCity;
    /**
     * @var string|null
     */
    protected $BillingStateOrProvince;
    /**
     * @var string|null
     */
    protected $BillingStateOrProvinceName;
    /**
     * @var string|null
     */
    protected $BillingPostalCode;
    /**
     * @var string|null
     */
    protected $BillingCountry;
    /**
     * @var string|null
     */
    protected $PromotionCode;
    /**
     * @var float|null
     */
    protected $PromotionAmount;

    /**
     * Order constructor.
     * @param null $data
     */
    public function __construct($data = null)
    {
        parent::__construct($data);

        $this->OrderId = $this->id;
    }

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
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param mixed $OrderId
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;
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
    public function getSiteID(): int
    {
        return $this->SiteID;
    }

    /**
     * @param int $SiteID
     */
    public function setSiteID(int $SiteID)
    {
        $this->SiteID = $SiteID;
    }

    /**
     * @return string
     */
    public function getSiteName(): string
    {
        return $this->SiteName;
    }

    /**
     * @param string $SiteName
     */
    public function setSiteName(string $SiteName)
    {
        $this->SiteName = $SiteName;
    }

    /**
     * @return string
     */
    public function getSiteOrderID(): string
    {
        return $this->SiteOrderID;
    }

    /**
     * @param string $SiteOrderID
     */
    public function setSiteOrderID(string $SiteOrderID)
    {
        $this->SiteOrderID = $SiteOrderID;
    }

    /**
     * @return mixed
     */
    public function getSiteAccountID()
    {
        return $this->SiteAccountID;
    }

    /**
     * @param mixed $SiteAccountID
     */
    public function setSiteAccountID($SiteAccountID)
    {
        $this->SiteAccountID = $SiteAccountID;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     */
    public function setCurrency(string $Currency)
    {
        $this->Currency = $Currency;
    }

    /**
     * @return string|null
     */
    public function getSecondarySiteOrderID(): string
    {
        return $this->SecondarySiteOrderID;
    }

    /**
     * @param string|null $SecondarySiteOrderID
     */
    public function setSecondarySiteOrderID(string $SecondarySiteOrderID)
    {
        $this->SecondarySiteOrderID = $SecondarySiteOrderID;
    }

    /**
     * @return string|null
     */
    public function getSellerOrderID(): string
    {
        return $this->SellerOrderID;
    }

    /**
     * @param string|null $SellerOrderID
     */
    public function setSellerOrderID(string $SellerOrderID)
    {
        $this->SellerOrderID = $SellerOrderID;
    }

    /**
     * @return mixed
     */
    public function getCheckoutSourceID()
    {
        return $this->CheckoutSourceID;
    }

    /**
     * @param mixed $CheckoutSourceID
     */
    public function setCheckoutSourceID($CheckoutSourceID)
    {
        $this->CheckoutSourceID = $CheckoutSourceID;
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
     * @return mixed
     */
    public function getImportDateUtc()
    {
        return $this->ImportDateUtc;
    }

    /**
     * @param mixed $ImportDateUtc
     */
    public function setImportDateUtc($ImportDateUtc)
    {
        $this->ImportDateUtc = $ImportDateUtc;
    }

    /**
     * @return string|null
     */
    public function getPublicNotes(): string
    {
        return $this->PublicNotes;
    }

    /**
     * @param string|null $PublicNotes
     */
    public function setPublicNotes(string $PublicNotes)
    {
        $this->PublicNotes = $PublicNotes;
    }

    /**
     * @return string|null
     */
    public function getPrivateNotes(): string
    {
        return $this->PrivateNotes;
    }

    /**
     * @param string|null $PrivateNotes
     */
    public function setPrivateNotes(string $PrivateNotes)
    {
        $this->PrivateNotes = $PrivateNotes;
    }

    /**
     * @return string|null
     */
    public function getBuyerUserId(): string
    {
        return $this->BuyerUserId;
    }

    /**
     * @param string|null $BuyerUserId
     */
    public function setBuyerUserId(string $BuyerUserId)
    {
        $this->BuyerUserId = $BuyerUserId;
    }

    /**
     * @return string
     */
    public function getBuyerEmailAddress(): string
    {
        return $this->BuyerEmailAddress;
    }

    /**
     * @param string $BuyerEmailAddress
     */
    public function setBuyerEmailAddress(string $BuyerEmailAddress)
    {
        $this->BuyerEmailAddress = $BuyerEmailAddress;
    }

    /**
     * @return string|null
     */
    public function getSpecialInstructions(): string
    {
        return $this->SpecialInstructions;
    }

    /**
     * @param string|null $SpecialInstructions
     */
    public function setSpecialInstructions(string $SpecialInstructions)
    {
        $this->SpecialInstructions = $SpecialInstructions;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->TotalPrice;
    }

    /**
     * @param float $TotalPrice
     */
    public function setTotalPrice(float $TotalPrice)
    {
        $this->TotalPrice = $TotalPrice;
    }

    /**
     * @return float|null
     */
    public function getTotalTaxPrice(): float
    {
        return $this->TotalTaxPrice;
    }

    /**
     * @param float|null $TotalTaxPrice
     */
    public function setTotalTaxPrice(float $TotalTaxPrice)
    {
        $this->TotalTaxPrice = $TotalTaxPrice;
    }

    /**
     * @return float|null
     */
    public function getTotalShippingPrice(): float
    {
        return $this->TotalShippingPrice;
    }

    /**
     * @param float|null $TotalShippingPrice
     */
    public function setTotalShippingPrice(float $TotalShippingPrice)
    {
        $this->TotalShippingPrice = $TotalShippingPrice;
    }

    /**
     * @return float|null
     */
    public function getTotalShippingTaxPrice(): float
    {
        return $this->TotalShippingTaxPrice;
    }

    /**
     * @param float|null $TotalShippingTaxPrice
     */
    public function setTotalShippingTaxPrice(float $TotalShippingTaxPrice)
    {
        $this->TotalShippingTaxPrice = $TotalShippingTaxPrice;
    }

    /**
     * @return float|null
     */
    public function getTotalInsurancePrice(): float
    {
        return $this->TotalInsurancePrice;
    }

    /**
     * @param float|null $TotalInsurancePrice
     */
    public function setTotalInsurancePrice(float $TotalInsurancePrice)
    {
        $this->TotalInsurancePrice = $TotalInsurancePrice;
    }

    /**
     * @return float|null
     */
    public function getTotalGiftOptionPrice(): float
    {
        return $this->TotalGiftOptionPrice;
    }

    /**
     * @param float|null $TotalGiftOptionPrice
     */
    public function setTotalGiftOptionPrice(float $TotalGiftOptionPrice)
    {
        $this->TotalGiftOptionPrice = $TotalGiftOptionPrice;
    }

    /**
     * @return float|null
     */
    public function getTotalGiftOptionTaxPrice(): float
    {
        return $this->TotalGiftOptionTaxPrice;
    }

    /**
     * @param float|null $TotalGiftOptionTaxPrice
     */
    public function setTotalGiftOptionTaxPrice(float $TotalGiftOptionTaxPrice)
    {
        $this->TotalGiftOptionTaxPrice = $TotalGiftOptionTaxPrice;
    }

    /**
     * @return float|null
     */
    public function getAdditionalCostOrDiscount(): float
    {
        return $this->AdditionalCostOrDiscount;
    }

    /**
     * @param float|null $AdditionalCostOrDiscount
     */
    public function setAdditionalCostOrDiscount(float $AdditionalCostOrDiscount)
    {
        $this->AdditionalCostOrDiscount = $AdditionalCostOrDiscount;
    }

    /**
     * @return mixed
     */
    public function getEstimatedShipDateUtc()
    {
        return $this->EstimatedShipDateUtc;
    }

    /**
     * @param mixed $EstimatedShipDateUtc
     */
    public function setEstimatedShipDateUtc($EstimatedShipDateUtc)
    {
        $this->EstimatedShipDateUtc = $EstimatedShipDateUtc;
    }

    /**
     * @return mixed
     */
    public function getDeliverByDateUtc()
    {
        return $this->DeliverByDateUtc;
    }

    /**
     * @param mixed $DeliverByDateUtc
     */
    public function setDeliverByDateUtc($DeliverByDateUtc)
    {
        $this->DeliverByDateUtc = $DeliverByDateUtc;
    }

    /**
     * @return string|null
     */
    public function getRequestedShippingCarrier(): string
    {
        return $this->RequestedShippingCarrier;
    }

    /**
     * @param string|null $RequestedShippingCarrier
     */
    public function setRequestedShippingCarrier(string $RequestedShippingCarrier)
    {
        $this->RequestedShippingCarrier = $RequestedShippingCarrier;
    }

    /**
     * @return string|null
     */
    public function getRequestedShippingClass(): string
    {
        return $this->RequestedShippingClass;
    }

    /**
     * @param string|null $RequestedShippingClass
     */
    public function setRequestedShippingClass(string $RequestedShippingClass)
    {
        $this->RequestedShippingClass = $RequestedShippingClass;
    }

    /**
     * @return string|null
     */
    public function getResellerID(): string
    {
        return $this->ResellerID;
    }

    /**
     * @param string|null $ResellerID
     */
    public function setResellerID(string $ResellerID)
    {
        $this->ResellerID = $ResellerID;
    }

    /**
     * @return mixed
     */
    public function getFlagID()
    {
        return $this->FlagID;
    }

    /**
     * @param mixed $FlagID
     */
    public function setFlagID($FlagID)
    {
        $this->FlagID = $FlagID;
    }

    /**
     * @return string|null
     */
    public function getFlagDescription(): string
    {
        return $this->FlagDescription;
    }

    /**
     * @param string|null $FlagDescription
     */
    public function setFlagDescription(string $FlagDescription)
    {
        $this->FlagDescription = $FlagDescription;
    }

    /**
     * @return string|null
     */
    public function getOrderTags(): string
    {
        return $this->OrderTags;
    }

    /**
     * @param string|null $OrderTags
     */
    public function setOrderTags(string $OrderTags)
    {
        $this->OrderTags = $OrderTags;
    }

    /**
     * @return mixed
     */
    public function getDistributionCenterTypeRollup()
    {
        return $this->DistributionCenterTypeRollup;
    }

    /**
     * @param mixed $DistributionCenterTypeRollup
     */
    public function setDistributionCenterTypeRollup($DistributionCenterTypeRollup)
    {
        $this->DistributionCenterTypeRollup = $DistributionCenterTypeRollup;
    }

    /**
     * @return mixed
     */
    public function getCheckoutStatus()
    {
        return $this->CheckoutStatus;
    }

    /**
     * @param mixed $CheckoutStatus
     */
    public function setCheckoutStatus($CheckoutStatus)
    {
        $this->CheckoutStatus = $CheckoutStatus;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }

    /**
     * @param mixed $PaymentStatus
     */
    public function setPaymentStatus($PaymentStatus)
    {
        $this->PaymentStatus = $PaymentStatus;
    }

    /**
     * @return mixed
     */
    public function getShippingStatus()
    {
        return $this->ShippingStatus;
    }

    /**
     * @param mixed $ShippingStatus
     */
    public function setShippingStatus($ShippingStatus)
    {
        $this->ShippingStatus = $ShippingStatus;
    }

    /**
     * @return mixed
     */
    public function getCheckoutDateUtc()
    {
        return $this->CheckoutDateUtc;
    }

    /**
     * @param mixed $CheckoutDateUtc
     */
    public function setCheckoutDateUtc($CheckoutDateUtc)
    {
        $this->CheckoutDateUtc = $CheckoutDateUtc;
    }

    /**
     * @return mixed
     */
    public function getPaymentDateUtc()
    {
        return $this->PaymentDateUtc;
    }

    /**
     * @param mixed $PaymentDateUtc
     */
    public function setPaymentDateUtc($PaymentDateUtc)
    {
        $this->PaymentDateUtc = $PaymentDateUtc;
    }

    /**
     * @return mixed
     */
    public function getShippingDateUtc()
    {
        return $this->ShippingDateUtc;
    }

    /**
     * @param mixed $ShippingDateUtc
     */
    public function setShippingDateUtc($ShippingDateUtc)
    {
        $this->ShippingDateUtc = $ShippingDateUtc;
    }

    /**
     * @return bool
     */
    public function getBuyerEmailOptIn(): bool
    {
        return $this->BuyerEmailOptIn;
    }

    /**
     * @return bool
     */
    public function isBuyerEmailOptIn(): bool
    {
        return $this->BuyerEmailOptIn;
    }

    /**
     * @param bool $BuyerEmailOptIn
     */
    public function setBuyerEmailOptIn(bool $BuyerEmailOptIn)
    {
        $this->BuyerEmailOptIn = $BuyerEmailOptIn;
    }

    /**
     * @return mixed
     */
    public function getOrderTaxType()
    {
        return $this->OrderTaxType;
    }

    /**
     * @param mixed $OrderTaxType
     */
    public function setOrderTaxType($OrderTaxType)
    {
        $this->OrderTaxType = $OrderTaxType;
    }

    /**
     * @return mixed
     */
    public function getShippingTaxType()
    {
        return $this->ShippingTaxType;
    }

    /**
     * @param mixed $ShippingTaxType
     */
    public function setShippingTaxType($ShippingTaxType)
    {
        $this->ShippingTaxType = $ShippingTaxType;
    }

    /**
     * @return mixed
     */
    public function getGiftOptionsTaxType()
    {
        return $this->GiftOptionsTaxType;
    }

    /**
     * @param mixed $GiftOptionsTaxType
     */
    public function setGiftOptionsTaxType($GiftOptionsTaxType)
    {
        $this->GiftOptionsTaxType = $GiftOptionsTaxType;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     */
    public function setPaymentMethod(string $PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * @return string|null
     */
    public function getPaymentTransactionID(): string
    {
        return $this->PaymentTransactionID;
    }

    /**
     * @param string|null $PaymentTransactionID
     */
    public function setPaymentTransactionID(string $PaymentTransactionID)
    {
        $this->PaymentTransactionID = $PaymentTransactionID;
    }

    /**
     * @return string|null
     */
    public function getPaymentPaypalAccountID(): string
    {
        return $this->PaymentPaypalAccountID;
    }

    /**
     * @param string|null $PaymentPaypalAccountID
     */
    public function setPaymentPaypalAccountID(string $PaymentPaypalAccountID)
    {
        $this->PaymentPaypalAccountID = $PaymentPaypalAccountID;
    }

    /**
     * @return string|null
     */
    public function getPaymentCreditCardLast4(): string
    {
        return $this->PaymentCreditCardLast4;
    }

    /**
     * @param string|null $PaymentCreditCardLast4
     */
    public function setPaymentCreditCardLast4(string $PaymentCreditCardLast4)
    {
        $this->PaymentCreditCardLast4 = $PaymentCreditCardLast4;
    }

    /**
     * @return string|null
     */
    public function getPaymentMerchantReferenceNumber(): string
    {
        return $this->PaymentMerchantReferenceNumber;
    }

    /**
     * @param string|null $PaymentMerchantReferenceNumber
     */
    public function setPaymentMerchantReferenceNumber(string $PaymentMerchantReferenceNumber)
    {
        $this->PaymentMerchantReferenceNumber = $PaymentMerchantReferenceNumber;
    }

    /**
     * @return string|null
     */
    public function getShippingTitle(): string
    {
        return $this->ShippingTitle;
    }

    /**
     * @param string|null $ShippingTitle
     */
    public function setShippingTitle(string $ShippingTitle)
    {
        $this->ShippingTitle = $ShippingTitle;
    }

    /**
     * @return string|null
     */
    public function getShippingFirstName(): string
    {
        return $this->ShippingFirstName;
    }

    /**
     * @param string|null $ShippingFirstName
     */
    public function setShippingFirstName(string $ShippingFirstName)
    {
        $this->ShippingFirstName = $ShippingFirstName;
    }

    /**
     * @return string|null
     */
    public function getShippingLastName(): string
    {
        return $this->ShippingLastName;
    }

    /**
     * @param string|null $ShippingLastName
     */
    public function setShippingLastName(string $ShippingLastName)
    {
        $this->ShippingLastName = $ShippingLastName;
    }

    /**
     * @return string|null
     */
    public function getShippingSuffix(): string
    {
        return $this->ShippingSuffix;
    }

    /**
     * @param string|null $ShippingSuffix
     */
    public function setShippingSuffix(string $ShippingSuffix)
    {
        $this->ShippingSuffix = $ShippingSuffix;
    }

    /**
     * @return string|null
     */
    public function getShippingCompanyName(): string
    {
        return $this->ShippingCompanyName;
    }

    /**
     * @param string|null $ShippingCompanyName
     */
    public function setShippingCompanyName(string $ShippingCompanyName)
    {
        $this->ShippingCompanyName = $ShippingCompanyName;
    }

    /**
     * @return string|null
     */
    public function getShippingCompanyJobTitle(): string
    {
        return $this->ShippingCompanyJobTitle;
    }

    /**
     * @param string|null $ShippingCompanyJobTitle
     */
    public function setShippingCompanyJobTitle(string $ShippingCompanyJobTitle)
    {
        $this->ShippingCompanyJobTitle = $ShippingCompanyJobTitle;
    }

    /**
     * @return string|null
     */
    public function getShippingDaytimePhone(): string
    {
        return $this->ShippingDaytimePhone;
    }

    /**
     * @param string|null $ShippingDaytimePhone
     */
    public function setShippingDaytimePhone(string $ShippingDaytimePhone)
    {
        $this->ShippingDaytimePhone = $ShippingDaytimePhone;
    }

    /**
     * @return string|null
     */
    public function getShippingEveningPhone(): string
    {
        return $this->ShippingEveningPhone;
    }

    /**
     * @param string|null $ShippingEveningPhone
     */
    public function setShippingEveningPhone(string $ShippingEveningPhone)
    {
        $this->ShippingEveningPhone = $ShippingEveningPhone;
    }

    /**
     * @return string|null
     */
    public function getShippingAddressLine1(): string
    {
        return $this->ShippingAddressLine1;
    }

    /**
     * @param string|null $ShippingAddressLine1
     */
    public function setShippingAddressLine1(string $ShippingAddressLine1)
    {
        $this->ShippingAddressLine1 = $ShippingAddressLine1;
    }

    /**
     * @return string|null
     */
    public function getShippingAddressLine2(): string
    {
        return $this->ShippingAddressLine2;
    }

    /**
     * @param string|null $ShippingAddressLine2
     */
    public function setShippingAddressLine2(string $ShippingAddressLine2)
    {
        $this->ShippingAddressLine2 = $ShippingAddressLine2;
    }

    /**
     * @return string|null
     */
    public function getShippingCity(): string
    {
        return $this->ShippingCity;
    }

    /**
     * @param string|null $ShippingCity
     */
    public function setShippingCity(string $ShippingCity)
    {
        $this->ShippingCity = $ShippingCity;
    }

    /**
     * @return string|null
     */
    public function getShippingStateOrProvince(): string
    {
        return $this->ShippingStateOrProvince;
    }

    /**
     * @param string|null $ShippingStateOrProvince
     */
    public function setShippingStateOrProvince(string $ShippingStateOrProvince)
    {
        $this->ShippingStateOrProvince = $ShippingStateOrProvince;
    }

    /**
     * @return string|null
     */
    public function getShippingStateOrProvinceName(): string
    {
        return $this->ShippingStateOrProvinceName;
    }

    /**
     * @param string|null $ShippingStateOrProvinceName
     */
    public function setShippingStateOrProvinceName(string $ShippingStateOrProvinceName)
    {
        $this->ShippingStateOrProvinceName = $ShippingStateOrProvinceName;
    }

    /**
     * @return string|null
     */
    public function getShippingPostalCode(): string
    {
        return $this->ShippingPostalCode;
    }

    /**
     * @param string|null $ShippingPostalCode
     */
    public function setShippingPostalCode(string $ShippingPostalCode)
    {
        $this->ShippingPostalCode = $ShippingPostalCode;
    }

    /**
     * @return string|null
     */
    public function getShippingCountry(): string
    {
        return $this->ShippingCountry;
    }

    /**
     * @param string|null $ShippingCountry
     */
    public function setShippingCountry(string $ShippingCountry)
    {
        $this->ShippingCountry = $ShippingCountry;
    }

    /**
     * @return string|null
     */
    public function getBillingTitle(): string
    {
        return $this->BillingTitle;
    }

    /**
     * @param string|null $BillingTitle
     */
    public function setBillingTitle(string $BillingTitle)
    {
        $this->BillingTitle = $BillingTitle;
    }

    /**
     * @return string|null
     */
    public function getBillingFirstName(): string
    {
        return $this->BillingFirstName;
    }

    /**
     * @param string|null $BillingFirstName
     */
    public function setBillingFirstName(string $BillingFirstName)
    {
        $this->BillingFirstName = $BillingFirstName;
    }

    /**
     * @return string|null
     */
    public function getBillingLastName(): string
    {
        return $this->BillingLastName;
    }

    /**
     * @param string|null $BillingLastName
     */
    public function setBillingLastName(string $BillingLastName)
    {
        $this->BillingLastName = $BillingLastName;
    }

    /**
     * @return string|null
     */
    public function getBillingSuffix(): string
    {
        return $this->BillingSuffix;
    }

    /**
     * @param string|null $BillingSuffix
     */
    public function setBillingSuffix(string $BillingSuffix)
    {
        $this->BillingSuffix = $BillingSuffix;
    }

    /**
     * @return string|null
     */
    public function getBillingCompanyName(): string
    {
        return $this->BillingCompanyName;
    }

    /**
     * @param string|null $BillingCompanyName
     */
    public function setBillingCompanyName(string $BillingCompanyName)
    {
        $this->BillingCompanyName = $BillingCompanyName;
    }

    /**
     * @return string|null
     */
    public function getBillingCompanyJobTitle(): string
    {
        return $this->BillingCompanyJobTitle;
    }

    /**
     * @param string|null $BillingCompanyJobTitle
     */
    public function setBillingCompanyJobTitle(string $BillingCompanyJobTitle)
    {
        $this->BillingCompanyJobTitle = $BillingCompanyJobTitle;
    }

    /**
     * @return string|null
     */
    public function getBillingDaytimePhone(): string
    {
        return $this->BillingDaytimePhone;
    }

    /**
     * @param string|null $BillingDaytimePhone
     */
    public function setBillingDaytimePhone(string $BillingDaytimePhone)
    {
        $this->BillingDaytimePhone = $BillingDaytimePhone;
    }

    /**
     * @return string|null
     */
    public function getBillingEveningPhone(): string
    {
        return $this->BillingEveningPhone;
    }

    /**
     * @param string|null $BillingEveningPhone
     */
    public function setBillingEveningPhone(string $BillingEveningPhone)
    {
        $this->BillingEveningPhone = $BillingEveningPhone;
    }

    /**
     * @return string|null
     */
    public function getBillingAddressLine1(): string
    {
        return $this->BillingAddressLine1;
    }

    /**
     * @param string|null $BillingAddressLine1
     */
    public function setBillingAddressLine1(string $BillingAddressLine1)
    {
        $this->BillingAddressLine1 = $BillingAddressLine1;
    }

    /**
     * @return string|null
     */
    public function getBillingAddressLine2(): string
    {
        return $this->BillingAddressLine2;
    }

    /**
     * @param string|null $BillingAddressLine2
     */
    public function setBillingAddressLine2(string $BillingAddressLine2)
    {
        $this->BillingAddressLine2 = $BillingAddressLine2;
    }

    /**
     * @return string|null
     */
    public function getBillingCity(): string
    {
        return $this->BillingCity;
    }

    /**
     * @param string|null $BillingCity
     */
    public function setBillingCity(string $BillingCity)
    {
        $this->BillingCity = $BillingCity;
    }

    /**
     * @return string|null
     */
    public function getBillingStateOrProvince(): string
    {
        return $this->BillingStateOrProvince;
    }

    /**
     * @param string|null $BillingStateOrProvince
     */
    public function setBillingStateOrProvince(string $BillingStateOrProvince)
    {
        $this->BillingStateOrProvince = $BillingStateOrProvince;
    }

    /**
     * @return string|null
     */
    public function getBillingStateOrProvinceName(): string
    {
        return $this->BillingStateOrProvinceName;
    }

    /**
     * @param string|null $BillingStateOrProvinceName
     */
    public function setBillingStateOrProvinceName(string $BillingStateOrProvinceName)
    {
        $this->BillingStateOrProvinceName = $BillingStateOrProvinceName;
    }

    /**
     * @return string|null
     */
    public function getBillingPostalCode(): string
    {
        return $this->BillingPostalCode;
    }

    /**
     * @param string|null $BillingPostalCode
     */
    public function setBillingPostalCode(string $BillingPostalCode)
    {
        $this->BillingPostalCode = $BillingPostalCode;
    }

    /**
     * @return string|null
     */
    public function getBillingCountry(): string
    {
        return $this->BillingCountry;
    }

    /**
     * @param string|null $BillingCountry
     */
    public function setBillingCountry(string $BillingCountry)
    {
        $this->BillingCountry = $BillingCountry;
    }

    /**
     * @return string|null
     */
    public function getPromotionCode(): string
    {
        return $this->PromotionCode;
    }

    /**
     * @param string|null $PromotionCode
     */
    public function setPromotionCode(string $PromotionCode)
    {
        $this->PromotionCode = $PromotionCode;
    }

    /**
     * @return float|null
     */
    public function getPromotionAmount(): float
    {
        return $this->PromotionAmount;
    }

    /**
     * @param float|null $PromotionAmount
     */
    public function setPromotionAmount(float $PromotionAmount)
    {
        $this->PromotionAmount = $PromotionAmount;
    }
}
