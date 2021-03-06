<?php

use DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType;

class Group1MaxFlatShippingCostDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Group1MaxFlatShippingCostDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\Group1MaxFlatShippingCostDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
