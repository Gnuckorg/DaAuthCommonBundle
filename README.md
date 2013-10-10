DaAuthCommonBundle
==================

DaAuthCommonBundle is a Symfony2's bundle sharing commons for DaOAuth* and DaApi* bundles.

Installation
------------

Installation is a quick 2 steps process.

### Step 1: Add in composer

Add the bundle in the composer.json file:

``` js
// composer.json

"require": {
    // ...
    "da/auth-common-bundle": "dev-master"
},
```

And update your vendors:

``` bash
composer update      # WIN
composer.phar update # LINUX
```

### Step 2: Declare in the kernel

Declare the bundle in your kernel:

``` php
// app/AppKernel.php

$bundles = array(
    // ...
    new Da\AuthCommonBundle\DaAuthCommonBundle(),
);
```