<?php

namespace AlibabaCloud\Tests\Unit;

use AlibabaCloud\Client\AlibabaCloud;
use PHPUnit\Framework\TestCase;
use stdClass;

/**
 * Class VersionResolverTraitTest
 *
 * @package AlibabaCloud\Tests\Unit
 */
class VersionResolverTraitTest extends TestCase
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
     * @throws \ReflectionException
     */
    public function testGetServiceName()
    {
        $slb    = AlibabaCloud::slb();
        $ref    = new \ReflectionObject($slb);
        $method = $ref->getMethod('getServiceName');
        $method->setAccessible(true);
        self::assertEquals('Slb', $method->invokeArgs($slb, [\get_class($slb)]));
        self::assertEquals('Unit', $method->invokeArgs($slb, [\get_class($this)]));
    }

    /**
     * @throws \ReflectionException
     * @expectedException \AlibabaCloud\Client\Exception\ClientException
     * @expectedExceptionMessage Service name not found.
     */
    public function testGetServiceNameNotFound()
    {
        $slb    = AlibabaCloud::slb();
        $ref    = new \ReflectionObject($slb);
        $method = $ref->getMethod('getServiceName');
        $method->setAccessible(true);
        self::assertEquals('ApiResolverTraitTest', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }
}
