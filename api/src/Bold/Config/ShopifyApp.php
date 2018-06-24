<?php

namespace Bold\Config;

class ShopifyApp
{
    private $apps = [
        'product-upsell',
        'product-discount',
        'xero'
    ];

    public function getApp(array $app = null)
    {
        if($app[0] !== null) {
            return in_array($app[0], $this->apps) ? $this->apps[array_search($app[0], $this->apps)] : null;
        } else {
            return $this->apps;
        }
    }

}