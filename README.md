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

## Testing

``` bash
$ composer test
```

## Code Style

This repository implements PSR2 code style.  Please run `composer check-style` before opening PRs.  
If necessary `composer fix-style` can be used to automatically clean up issues. 

## References

 * [ChannelAdvisor Developer Network](https://developer.channeladvisor.com)
 

 