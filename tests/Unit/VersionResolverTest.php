<?php

namespace AlibabaCloud\Tests\Unit;

use stdClass;
use ReflectionObject;
use ReflectionException;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;

class VersionResolverTest extends TestCase
{
    public function testApi()
    {
        AlibabaCloud::slb()->v20140515()->describeRegions();
    }

    public function testApiWithParameters()
    {
        AlibabaCloud::slb()->v20140515()->describeRegions(['a' => 'a']);
    }

    /**
     * @expectedExceptionMessage Slb Versions contains no BadVersion
     * @expectedException \AlibabaCloud\Client\Exception\ClientException
     */
    public function testVersionNotFound()
    {
        AlibabaCloud::slb()->badVersion();
    }

    /**
     * @throws ReflectionException
     */
    public function testGetServiceName()
    {
        $slb    = AlibabaCloud::slb();
        $ref    = new ReflectionObject($slb);
        $method = $ref->getMethod('getProductName');
        $method->setAccessible(true);
        self::assertEquals('Slb', $method->invokeArgs($slb, [\get_class($slb)]));
        self::assertEquals('Slb', $method->invokeArgs($slb, [\get_class($this)]));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetServiceNameNotFound()
    {
        $slb    = AlibabaCloud::slb();
        $ref    = new ReflectionObject($slb);
        $method = $ref->getMethod('getProductName');
        $method->setAccessible(true);
        self::assertEquals('Slb', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }
}
