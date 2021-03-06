<?php

use DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType;

class QuantityRestrictionPerBuyerInfoTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new QuantityRestrictionPerBuyerInfoType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
