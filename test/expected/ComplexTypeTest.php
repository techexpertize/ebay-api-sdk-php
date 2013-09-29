<?php

use DTS\eBaySDK\FindingAPI\ComplexType;

class ComplexTypeTest extends \PHPUnit_Framework_TestCase
{
    protected $obj;

    protected function setUp()
    {
        $this->obj = new ComplexType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FindingAPI\ComplexType', $this->obj);
    }

    public function testExtendsAnotherType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FindingAPI\AnotherType', $this->obj);
    }
}