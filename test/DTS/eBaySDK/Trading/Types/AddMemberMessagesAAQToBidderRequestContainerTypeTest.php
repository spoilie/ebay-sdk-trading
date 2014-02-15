<?php

use DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderRequestContainerType;

class AddMemberMessagesAAQToBidderRequestContainerTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddMemberMessagesAAQToBidderRequestContainerType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AddMemberMessagesAAQToBidderRequestContainerType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
