<?php

use DTS\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType;

class SellerExcludeShipToLocationPreferencesTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerExcludeShipToLocationPreferencesType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
