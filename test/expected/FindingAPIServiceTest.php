<?php

use DTS\eBaySDK\FindingAPI\Services\FindingAPIService;
use DTS\eBaySDK\HttpClient\HttpClient;

class FindingAPIServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindingAPIService(new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FindingAPI\Services\FindingAPIService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FindingAPI\Services\FindingAPIBaseService', $this->obj);
    }
}
