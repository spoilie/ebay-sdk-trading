<?php

use DTS\eBaySDK\Trading\Enums\HandlingNameCodeType;

class HandlingNameCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new HandlingNameCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\HandlingNameCodeType', $this->obj);
    }
}
