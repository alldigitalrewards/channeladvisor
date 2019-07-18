<?php

namespace AllDigitalRewards\ChannelAdvisor\Entities;

class Order extends AbstractEntity
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
     * @var mixed
     */
    private $SiteID;
    /**
     * @var mixed
     */
    private $SiteName;
    /**
     * @var mixed
     */
    private $SiteOrderID;
    /**
     * @var mixed
     */
    private $SiteAccountID;
    /**
     * @var mixed
     */
    private $Currency;
    /**
     * @var mixed
     */
    private $SecondarySiteOrderID;
    /**
     * @var mixed
     */
    private $SellerOrderID;
    /**
     * @var mixed
     */
    private $CheckoutSourceID;
    /**
     * @var mixed
     */
    private $CreateDateUtc;
    /**
     * @var mixed
     */
    private $ImportDateUtc;
    /**
     * @var mixed
     */
    private $PublicNotes;
    /**
     * @var mixed
     */
    private $PrivateNotes;
    /**
     * @var mixed
     */
    private $BuyerUserId;
    /**
     * @var mixed
     */
    private $BuyerEmailAddress;
    /**
     * @var mixed
     */
    private $SpecialInstructions;
    /**
     * @var mixed
     */
    private $TotalPrice;
    /**
     * @var mixed
     */
    private $TotalTaxPrice;
    /**
     * @var mixed
     */
    private $TotalShippingPrice;
    /**
     * @var mixed
     */
    private $TotalShippingTaxPrice;
    /**
     * @var mixed
     */
    private $TotalInsurancePrice;
    /**
     * @var mixed
     */
    private $TotalGiftOptionPrice;
    /**
     * @var mixed
     */
    private $TotalGiftOptionTaxPrice;
    /**
     * @var mixed
     */
    private $AdditionalCostOrDiscount;
    /**
     * @var mixed
     */
    private $EstimatedShipDateUtc;
    /**
     * @var mixed
     */
    private $DeliverByDateUtc;
    /**
     * @var mixed
     */
    private $RequestedShippingCarrier;
    /**
     * @var mixed
     */
    private $RequestedShippingClass;
    /**
     * @var mixed
     */
    private $ResellerID;
    /**
     * @var mixed
     */
    private $FlagID;
    /**
     * @var mixed
     */
    private $FlagDescription;
    /**
     * @var mixed
     */
    private $OrderTags;
    /**
     * @var mixed
     */
    private $DistributionCenterTypeRollup;
    /**
     * @var mixed
     */
    private $CheckoutStatus;
    /**
     * @var mixed
     */
    private $PaymentStatus;
    /**
     * @var mixed
     */
    private $ShippingStatus;
    /**
     * @var mixed
     */
    private $CheckoutDateUtc;
    /**
     * @var mixed
     */
    private $PaymentDateUtc;
    /**
     * @var mixed
     */
    private $ShippingDateUtc;
    /**
     * @var mixed
     */
    private $BuyerEmailOptIn;
    /**
     * @var mixed
     */
    private $OrderTaxType;
    /**
     * @var mixed
     */
    private $ShippingTaxType;
    /**
     * @var mixed
     */
    private $GiftOptionsTaxType;
    /**
     * @var mixed
     */
    private $PaymentMethod;
    /**
     * @var mixed
     */
    private $PaymentTransactionID;
    /**
     * @var mixed
     */
    private $PaymentPaypalAccountID;
    /**
     * @var mixed
     */
    private $PaymentCreditCardLast4;
    /**
     * @var mixed
     */
    private $PaymentMerchantReferenceNumber;
    /**
     * @var mixed
     */
    private $ShippingTitle;
    /**
     * @var mixed
     */
    private $ShippingFirstName;
    /**
     * @var mixed
     */
    private $ShippingLastName;
    /**
     * @var mixed
     */
    private $ShippingSuffix;
    /**
     * @var mixed
     */
    private $ShippingCompanyName;
    /**
     * @var mixed
     */
    private $ShippingCompanyJobTitle;
    /**
     * @var mixed
     */
    private $ShippingDaytimePhone;
    /**
     * @var mixed
     */
    private $ShippingEveningPhone;
    /**
     * @var mixed
     */
    private $ShippingAddressLine1;
    /**
     * @var mixed
     */
    private $ShippingAddressLine2;
    /**
     * @var mixed
     */
    private $ShippingCity;
    /**
     * @var mixed
     */
    private $ShippingStateOrProvince;
    /**
     * @var mixed
     */
    private $ShippingStateOrProvinceName;
    /**
     * @var mixed
     */
    private $ShippingPostalCode;
    /**
     * @var mixed
     */
    private $ShippingCountry;
    /**
     * @var mixed
     */
    private $BillingTitle;
    /**
     * @var mixed
     */
    private $BillingFirstName;
    /**
     * @var mixed
     */
    private $BillingLastName;
    /**
     * @var mixed
     */
    private $BillingSuffix;
    /**
     * @var mixed
     */
    private $BillingCompanyName;
    /**
     * @var mixed
     */
    private $BillingCompanyJobTitle;
    /**
     * @var mixed
     */
    private $BillingDaytimePhone;
    /**
     * @var mixed
     */
    private $BillingEveningPhone;
    /**
     * @var mixed
     */
    private $BillingAddressLine1;
    /**
     * @var mixed
     */
    private $BillingAddressLine2;
    /**
     * @var mixed
     */
    private $BillingCity;
    /**
     * @var mixed
     */
    private $BillingStateOrProvince;
    /**
     * @var mixed
     */
    private $BillingStateOrProvinceName;
    /**
     * @var mixed
     */
    private $BillingPostalCode;
    /**
     * @var mixed
     */
    private $BillingCountry;
    /**
     * @var mixed
     */
    private $PromotionCode;
    /**
     * @var mixed
     */
    private $PromotionAmount;

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
    public function getSiteID()
    {
        return $this->SiteID;
    }

    /**
     * @param mixed $SiteID
     */
    public function setSiteID($SiteID)
    {
        $this->SiteID = $SiteID;
    }

    /**
     * @return mixed
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param mixed $SiteName
     */
    public function setSiteName($SiteName)
    {
        $this->SiteName = $SiteName;
    }

    /**
     * @return mixed
     */
    public function getSiteOrderID()
    {
        return $this->SiteOrderID;
    }

    /**
     * @param mixed $SiteOrderID
     */
    public function setSiteOrderID($SiteOrderID)
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
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param mixed $Currency
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
    }

    /**
     * @return mixed
     */
    public function getSecondarySiteOrderID()
    {
        return $this->SecondarySiteOrderID;
    }

    /**
     * @param mixed $SecondarySiteOrderID
     */
    public function setSecondarySiteOrderID($SecondarySiteOrderID)
    {
        $this->SecondarySiteOrderID = $SecondarySiteOrderID;
    }

    /**
     * @return mixed
     */
    public function getSellerOrderID()
    {
        return $this->SellerOrderID;
    }

    /**
     * @param mixed $SellerOrderID
     */
    public function setSellerOrderID($SellerOrderID)
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
     * @return mixed
     */
    public function getPublicNotes()
    {
        return $this->PublicNotes;
    }

    /**
     * @param mixed $PublicNotes
     */
    public function setPublicNotes($PublicNotes)
    {
        $this->PublicNotes = $PublicNotes;
    }

    /**
     * @return mixed
     */
    public function getPrivateNotes()
    {
        return $this->PrivateNotes;
    }

    /**
     * @param mixed $PrivateNotes
     */
    public function setPrivateNotes($PrivateNotes)
    {
        $this->PrivateNotes = $PrivateNotes;
    }

    /**
     * @return mixed
     */
    public function getBuyerUserId()
    {
        return $this->BuyerUserId;
    }

    /**
     * @param mixed $BuyerUserId
     */
    public function setBuyerUserId($BuyerUserId)
    {
        $this->BuyerUserId = $BuyerUserId;
    }

    /**
     * @return mixed
     */
    public function getBuyerEmailAddress()
    {
        return $this->BuyerEmailAddress;
    }

    /**
     * @param mixed $BuyerEmailAddress
     */
    public function setBuyerEmailAddress($BuyerEmailAddress)
    {
        $this->BuyerEmailAddress = $BuyerEmailAddress;
    }

    /**
     * @return mixed
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }

    /**
     * @param mixed $SpecialInstructions
     */
    public function setSpecialInstructions($SpecialInstructions)
    {
        $this->SpecialInstructions = $SpecialInstructions;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }

    /**
     * @param mixed $TotalPrice
     */
    public function setTotalPrice($TotalPrice)
    {
        $this->TotalPrice = $TotalPrice;
    }

    /**
     * @return mixed
     */
    public function getTotalTaxPrice()
    {
        return $this->TotalTaxPrice;
    }

    /**
     * @param mixed $TotalTaxPrice
     */
    public function setTotalTaxPrice($TotalTaxPrice)
    {
        $this->TotalTaxPrice = $TotalTaxPrice;
    }

    /**
     * @return mixed
     */
    public function getTotalShippingPrice()
    {
        return $this->TotalShippingPrice;
    }

    /**
     * @param mixed $TotalShippingPrice
     */
    public function setTotalShippingPrice($TotalShippingPrice)
    {
        $this->TotalShippingPrice = $TotalShippingPrice;
    }

    /**
     * @return mixed
     */
    public function getTotalShippingTaxPrice()
    {
        return $this->TotalShippingTaxPrice;
    }

    /**
     * @param mixed $TotalShippingTaxPrice
     */
    public function setTotalShippingTaxPrice($TotalShippingTaxPrice)
    {
        $this->TotalShippingTaxPrice = $TotalShippingTaxPrice;
    }

    /**
     * @return mixed
     */
    public function getTotalInsurancePrice()
    {
        return $this->TotalInsurancePrice;
    }

    /**
     * @param mixed $TotalInsurancePrice
     */
    public function setTotalInsurancePrice($TotalInsurancePrice)
    {
        $this->TotalInsurancePrice = $TotalInsurancePrice;
    }

    /**
     * @return mixed
     */
    public function getTotalGiftOptionPrice()
    {
        return $this->TotalGiftOptionPrice;
    }

    /**
     * @param mixed $TotalGiftOptionPrice
     */
    public function setTotalGiftOptionPrice($TotalGiftOptionPrice)
    {
        $this->TotalGiftOptionPrice = $TotalGiftOptionPrice;
    }

    /**
     * @return mixed
     */
    public function getTotalGiftOptionTaxPrice()
    {
        return $this->TotalGiftOptionTaxPrice;
    }

    /**
     * @param mixed $TotalGiftOptionTaxPrice
     */
    public function setTotalGiftOptionTaxPrice($TotalGiftOptionTaxPrice)
    {
        $this->TotalGiftOptionTaxPrice = $TotalGiftOptionTaxPrice;
    }

    /**
     * @return mixed
     */
    public function getAdditionalCostOrDiscount()
    {
        return $this->AdditionalCostOrDiscount;
    }

    /**
     * @param mixed $AdditionalCostOrDiscount
     */
    public function setAdditionalCostOrDiscount($AdditionalCostOrDiscount)
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
     * @return mixed
     */
    public function getRequestedShippingCarrier()
    {
        return $this->RequestedShippingCarrier;
    }

    /**
     * @param mixed $RequestedShippingCarrier
     */
    public function setRequestedShippingCarrier($RequestedShippingCarrier)
    {
        $this->RequestedShippingCarrier = $RequestedShippingCarrier;
    }

    /**
     * @return mixed
     */
    public function getRequestedShippingClass()
    {
        return $this->RequestedShippingClass;
    }

    /**
     * @param mixed $RequestedShippingClass
     */
    public function setRequestedShippingClass($RequestedShippingClass)
    {
        $this->RequestedShippingClass = $RequestedShippingClass;
    }

    /**
     * @return mixed
     */
    public function getResellerID()
    {
        return $this->ResellerID;
    }

    /**
     * @param mixed $ResellerID
     */
    public function setResellerID($ResellerID)
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
     * @return mixed
     */
    public function getFlagDescription()
    {
        return $this->FlagDescription;
    }

    /**
     * @param mixed $FlagDescription
     */
    public function setFlagDescription($FlagDescription)
    {
        $this->FlagDescription = $FlagDescription;
    }

    /**
     * @return mixed
     */
    public function getOrderTags()
    {
        return $this->OrderTags;
    }

    /**
     * @param mixed $OrderTags
     */
    public function setOrderTags($OrderTags)
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
     * @return mixed
     */
    public function getBuyerEmailOptIn()
    {
        return $this->BuyerEmailOptIn;
    }

    /**
     * @param mixed $BuyerEmailOptIn
     */
    public function setBuyerEmailOptIn($BuyerEmailOptIn)
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
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param mixed $PaymentMethod
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * @return mixed
     */
    public function getPaymentTransactionID()
    {
        return $this->PaymentTransactionID;
    }

    /**
     * @param mixed $PaymentTransactionID
     */
    public function setPaymentTransactionID($PaymentTransactionID)
    {
        $this->PaymentTransactionID = $PaymentTransactionID;
    }

    /**
     * @return mixed
     */
    public function getPaymentPaypalAccountID()
    {
        return $this->PaymentPaypalAccountID;
    }

    /**
     * @param mixed $PaymentPaypalAccountID
     */
    public function setPaymentPaypalAccountID($PaymentPaypalAccountID)
    {
        $this->PaymentPaypalAccountID = $PaymentPaypalAccountID;
    }

    /**
     * @return mixed
     */
    public function getPaymentCreditCardLast4()
    {
        return $this->PaymentCreditCardLast4;
    }

    /**
     * @param mixed $PaymentCreditCardLast4
     */
    public function setPaymentCreditCardLast4($PaymentCreditCardLast4)
    {
        $this->PaymentCreditCardLast4 = $PaymentCreditCardLast4;
    }

    /**
     * @return mixed
     */
    public function getPaymentMerchantReferenceNumber()
    {
        return $this->PaymentMerchantReferenceNumber;
    }

    /**
     * @param mixed $PaymentMerchantReferenceNumber
     */
    public function setPaymentMerchantReferenceNumber($PaymentMerchantReferenceNumber)
    {
        $this->PaymentMerchantReferenceNumber = $PaymentMerchantReferenceNumber;
    }

    /**
     * @return mixed
     */
    public function getShippingTitle()
    {
        return $this->ShippingTitle;
    }

    /**
     * @param mixed $ShippingTitle
     */
    public function setShippingTitle($ShippingTitle)
    {
        $this->ShippingTitle = $ShippingTitle;
    }

    /**
     * @return mixed
     */
    public function getShippingFirstName()
    {
        return $this->ShippingFirstName;
    }

    /**
     * @param mixed $ShippingFirstName
     */
    public function setShippingFirstName($ShippingFirstName)
    {
        $this->ShippingFirstName = $ShippingFirstName;
    }

    /**
     * @return mixed
     */
    public function getShippingLastName()
    {
        return $this->ShippingLastName;
    }

    /**
     * @param mixed $ShippingLastName
     */
    public function setShippingLastName($ShippingLastName)
    {
        $this->ShippingLastName = $ShippingLastName;
    }

    /**
     * @return mixed
     */
    public function getShippingSuffix()
    {
        return $this->ShippingSuffix;
    }

    /**
     * @param mixed $ShippingSuffix
     */
    public function setShippingSuffix($ShippingSuffix)
    {
        $this->ShippingSuffix = $ShippingSuffix;
    }

    /**
     * @return mixed
     */
    public function getShippingCompanyName()
    {
        return $this->ShippingCompanyName;
    }

    /**
     * @param mixed $ShippingCompanyName
     */
    public function setShippingCompanyName($ShippingCompanyName)
    {
        $this->ShippingCompanyName = $ShippingCompanyName;
    }

    /**
     * @return mixed
     */
    public function getShippingCompanyJobTitle()
    {
        return $this->ShippingCompanyJobTitle;
    }

    /**
     * @param mixed $ShippingCompanyJobTitle
     */
    public function setShippingCompanyJobTitle($ShippingCompanyJobTitle)
    {
        $this->ShippingCompanyJobTitle = $ShippingCompanyJobTitle;
    }

    /**
     * @return mixed
     */
    public function getShippingDaytimePhone()
    {
        return $this->ShippingDaytimePhone;
    }

    /**
     * @param mixed $ShippingDaytimePhone
     */
    public function setShippingDaytimePhone($ShippingDaytimePhone)
    {
        $this->ShippingDaytimePhone = $ShippingDaytimePhone;
    }

    /**
     * @return mixed
     */
    public function getShippingEveningPhone()
    {
        return $this->ShippingEveningPhone;
    }

    /**
     * @param mixed $ShippingEveningPhone
     */
    public function setShippingEveningPhone($ShippingEveningPhone)
    {
        $this->ShippingEveningPhone = $ShippingEveningPhone;
    }

    /**
     * @return mixed
     */
    public function getShippingAddressLine1()
    {
        return $this->ShippingAddressLine1;
    }

    /**
     * @param mixed $ShippingAddressLine1
     */
    public function setShippingAddressLine1($ShippingAddressLine1)
    {
        $this->ShippingAddressLine1 = $ShippingAddressLine1;
    }

    /**
     * @return mixed
     */
    public function getShippingAddressLine2()
    {
        return $this->ShippingAddressLine2;
    }

    /**
     * @param mixed $ShippingAddressLine2
     */
    public function setShippingAddressLine2($ShippingAddressLine2)
    {
        $this->ShippingAddressLine2 = $ShippingAddressLine2;
    }

    /**
     * @return mixed
     */
    public function getShippingCity()
    {
        return $this->ShippingCity;
    }

    /**
     * @param mixed $ShippingCity
     */
    public function setShippingCity($ShippingCity)
    {
        $this->ShippingCity = $ShippingCity;
    }

    /**
     * @return mixed
     */
    public function getShippingStateOrProvince()
    {
        return $this->ShippingStateOrProvince;
    }

    /**
     * @param mixed $ShippingStateOrProvince
     */
    public function setShippingStateOrProvince($ShippingStateOrProvince)
    {
        $this->ShippingStateOrProvince = $ShippingStateOrProvince;
    }

    /**
     * @return mixed
     */
    public function getShippingStateOrProvinceName()
    {
        return $this->ShippingStateOrProvinceName;
    }

    /**
     * @param mixed $ShippingStateOrProvinceName
     */
    public function setShippingStateOrProvinceName($ShippingStateOrProvinceName)
    {
        $this->ShippingStateOrProvinceName = $ShippingStateOrProvinceName;
    }

    /**
     * @return mixed
     */
    public function getShippingPostalCode()
    {
        return $this->ShippingPostalCode;
    }

    /**
     * @param mixed $ShippingPostalCode
     */
    public function setShippingPostalCode($ShippingPostalCode)
    {
        $this->ShippingPostalCode = $ShippingPostalCode;
    }

    /**
     * @return mixed
     */
    public function getShippingCountry()
    {
        return $this->ShippingCountry;
    }

    /**
     * @param mixed $ShippingCountry
     */
    public function setShippingCountry($ShippingCountry)
    {
        $this->ShippingCountry = $ShippingCountry;
    }

    /**
     * @return mixed
     */
    public function getBillingTitle()
    {
        return $this->BillingTitle;
    }

    /**
     * @param mixed $BillingTitle
     */
    public function setBillingTitle($BillingTitle)
    {
        $this->BillingTitle = $BillingTitle;
    }

    /**
     * @return mixed
     */
    public function getBillingFirstName()
    {
        return $this->BillingFirstName;
    }

    /**
     * @param mixed $BillingFirstName
     */
    public function setBillingFirstName($BillingFirstName)
    {
        $this->BillingFirstName = $BillingFirstName;
    }

    /**
     * @return mixed
     */
    public function getBillingLastName()
    {
        return $this->BillingLastName;
    }

    /**
     * @param mixed $BillingLastName
     */
    public function setBillingLastName($BillingLastName)
    {
        $this->BillingLastName = $BillingLastName;
    }

    /**
     * @return mixed
     */
    public function getBillingSuffix()
    {
        return $this->BillingSuffix;
    }

    /**
     * @param mixed $BillingSuffix
     */
    public function setBillingSuffix($BillingSuffix)
    {
        $this->BillingSuffix = $BillingSuffix;
    }

    /**
     * @return mixed
     */
    public function getBillingCompanyName()
    {
        return $this->BillingCompanyName;
    }

    /**
     * @param mixed $BillingCompanyName
     */
    public function setBillingCompanyName($BillingCompanyName)
    {
        $this->BillingCompanyName = $BillingCompanyName;
    }

    /**
     * @return mixed
     */
    public function getBillingCompanyJobTitle()
    {
        return $this->BillingCompanyJobTitle;
    }

    /**
     * @param mixed $BillingCompanyJobTitle
     */
    public function setBillingCompanyJobTitle($BillingCompanyJobTitle)
    {
        $this->BillingCompanyJobTitle = $BillingCompanyJobTitle;
    }

    /**
     * @return mixed
     */
    public function getBillingDaytimePhone()
    {
        return $this->BillingDaytimePhone;
    }

    /**
     * @param mixed $BillingDaytimePhone
     */
    public function setBillingDaytimePhone($BillingDaytimePhone)
    {
        $this->BillingDaytimePhone = $BillingDaytimePhone;
    }

    /**
     * @return mixed
     */
    public function getBillingEveningPhone()
    {
        return $this->BillingEveningPhone;
    }

    /**
     * @param mixed $BillingEveningPhone
     */
    public function setBillingEveningPhone($BillingEveningPhone)
    {
        $this->BillingEveningPhone = $BillingEveningPhone;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressLine1()
    {
        return $this->BillingAddressLine1;
    }

    /**
     * @param mixed $BillingAddressLine1
     */
    public function setBillingAddressLine1($BillingAddressLine1)
    {
        $this->BillingAddressLine1 = $BillingAddressLine1;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressLine2()
    {
        return $this->BillingAddressLine2;
    }

    /**
     * @param mixed $BillingAddressLine2
     */
    public function setBillingAddressLine2($BillingAddressLine2)
    {
        $this->BillingAddressLine2 = $BillingAddressLine2;
    }

    /**
     * @return mixed
     */
    public function getBillingCity()
    {
        return $this->BillingCity;
    }

    /**
     * @param mixed $BillingCity
     */
    public function setBillingCity($BillingCity)
    {
        $this->BillingCity = $BillingCity;
    }

    /**
     * @return mixed
     */
    public function getBillingStateOrProvince()
    {
        return $this->BillingStateOrProvince;
    }

    /**
     * @param mixed $BillingStateOrProvince
     */
    public function setBillingStateOrProvince($BillingStateOrProvince)
    {
        $this->BillingStateOrProvince = $BillingStateOrProvince;
    }

    /**
     * @return mixed
     */
    public function getBillingStateOrProvinceName()
    {
        return $this->BillingStateOrProvinceName;
    }

    /**
     * @param mixed $BillingStateOrProvinceName
     */
    public function setBillingStateOrProvinceName($BillingStateOrProvinceName)
    {
        $this->BillingStateOrProvinceName = $BillingStateOrProvinceName;
    }

    /**
     * @return mixed
     */
    public function getBillingPostalCode()
    {
        return $this->BillingPostalCode;
    }

    /**
     * @param mixed $BillingPostalCode
     */
    public function setBillingPostalCode($BillingPostalCode)
    {
        $this->BillingPostalCode = $BillingPostalCode;
    }

    /**
     * @return mixed
     */
    public function getBillingCountry()
    {
        return $this->BillingCountry;
    }

    /**
     * @param mixed $BillingCountry
     */
    public function setBillingCountry($BillingCountry)
    {
        $this->BillingCountry = $BillingCountry;
    }

    /**
     * @return mixed
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }

    /**
     * @param mixed $PromotionCode
     */
    public function setPromotionCode($PromotionCode)
    {
        $this->PromotionCode = $PromotionCode;
    }

    /**
     * @return mixed
     */
    public function getPromotionAmount()
    {
        return $this->PromotionAmount;
    }

    /**
     * @param mixed $PromotionAmount
     */
    public function setPromotionAmount($PromotionAmount)
    {
        $this->PromotionAmount = $PromotionAmount;
    }
}
