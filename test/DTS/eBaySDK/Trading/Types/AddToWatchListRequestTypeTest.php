<?php

use DTS\eBaySDK\Trading\Types\AddToWatchListRequestType;

class AddToWatchListRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddToWatchListRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AddToWatchListRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
