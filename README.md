# ChannelAdvisor Library

This is the ADR ChannelAdvisor API Wrapper Library

## Install

Via Composer

```bash
composer config repositories.channeladvisor vcs git@bitbucket.org:alldigitalrewards/channeladvisor.git
$ composer require alldigitalrewards/channeladvisor
```

## Usage

### Create Client using construct.

```php
<?php
$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "REFRESH_TOKEN",
    "APPLICATION_ID",
    "SHARED_SECRET"
);
```

### Create Client using Factory

When secrets are defined in the following environment variables, you may use the factory
to obtain an instance of the ChannelAdvisor client.: 
* CHANNELADVISOR_REFRESH_TOKEN
* CHANNELADVISOR_APPLICATION_ID
* CHANNELADVISOR_SHARED_SECRET 
```php
<?php
$client = \AllDigitalRewards\ChannelAdvisor\ClientFactory::getClient();
```

## Fetching Products 

Create a client as seen above, then...
 
### Fetch All Products (Paginated)
```php
<?php
$productFetcher = new \AllDigitalRewards\ChannelAdvisor\ProductFetcher($client);
$next_link = null;
$counter = 0;

while(true) {
    $productCollection = $productFetcher->getProducts($next_link);

    // Do something with this page of products...
    // There should be about 100 products in the collection.
    echo count($productCollection) . " in collection {$counter}.\n";

    if($productCollection->isLastPage()) {
        // We're done iterating, break the cipher.
        break 1;
    }

    $next_link = $productCollection->getNextLink();
}

```

### Create Order
```bash
$sampleOrderConfig = [
    "ProfileID" => 12003121, //Identifies the ChannelAdvisor profile
    "SiteOrderID" => "12003121-12341234", // This should be the Transaction GUID
    "TotalPrice" => 38.41,
    "BuyerEmailAddress" => "jmuto@alldigitalrewards.com",
    "ShippingTitle" => "Mr.",
    "ShippingFirstName" => "Joseph",
    "ShippingLastName" => "Muto",
    "ShippingSuffix" => null,
    "ShippingCompanyName" => null,
    "ShippingCompanyJobTitle" => null,
    "ShippingDaytimePhone" => "123456789",
    "ShippingEveningPhone" => null,
    "ShippingAddressLine1" => "935 Bungalow Ave",
    "ShippingAddressLine2" => "",
    "ShippingCity" => "Winter Park",
    "ShippingStateOrProvince" => "FL",
    "ShippingPostalCode" => "32789",
    "Items" => [
        [
            "Sku" => "72539",
            "Quantity" => 1,
            "UnitPrice" => 38.41,
        ]
    ]
]
```
## Testing

``` bash
$ composer test
```

## Code Style

This repository implements PSR2 code style.  Please run `composer check-style` before opening PRs.  
If necessary `composer fix-style` can be used to automatically clean up issues. 

## References

 * [ChannelAdvisor Developer Network](https://developer.channeladvisor.com)
 

