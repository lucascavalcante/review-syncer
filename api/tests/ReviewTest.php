<?php

class ReviewTest extends \PHPUnit\Framework\TestCase
{
    public function testCountApps()
    {
        $app = new \Bold\Config\ShopifyApp();
        $this->assertEquals(1, count($app->getApp(['xero'])));

        $apps = new \Bold\Config\ShopifyApp();
        $this->assertEquals(3, count($apps->getApp(null)));
    }
}