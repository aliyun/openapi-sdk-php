<?php

namespace AlibabaCloud\Tests\Unit;

use AlibabaCloud\Client\AlibabaCloud;
use PHPUnit\Framework\TestCase;
use stdClass;

/**
 * Class ApiResolverTraitTest
 *
 * @package AlibabaCloud\Tests\Unit
 */
class ApiResolverTraitTest extends TestCase
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
     * @expectedExceptionMessage Slb contains no notFound
     * @expectedException \AlibabaCloud\Client\Exception\ClientException
     */
    public function testApiNotFound()
    {
        AlibabaCloud::slb()->v20140515()->notFound();
    }

    /**
     * @throws \ReflectionException
     */
    public function testGetServiceName()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new \ReflectionObject($slb);
        $method = $ref->getMethod('getServiceName');
        $method->setAccessible(true);
        self::assertEquals('Slb', $method->invokeArgs($slb, [\get_class($slb)]));
        self::assertEquals('ApiResolverTraitTest', $method->invokeArgs($slb, [\get_class($this)]));
    }

    /**
     * @throws \ReflectionException
     * @expectedException \AlibabaCloud\Client\Exception\ClientException
     * @expectedExceptionMessage Service name not found.
     */
    public function testGetServiceNameNotFound()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new \ReflectionObject($slb);
        $method = $ref->getMethod('getServiceName');
        $method->setAccessible(true);
        self::assertEquals('ApiResolverTraitTest', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }

    /**
     * @throws \ReflectionException
     */
    public function testGetNamespace()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new \ReflectionObject($slb);
        $method = $ref->getMethod('getNamespace');
        $method->setAccessible(true);
        self::assertEquals('AlibabaCloud\Slb\V20140515', $method->invokeArgs($slb, [\get_class($slb)]));
        self::assertEquals('AlibabaCloud\Tests\Unit', $method->invokeArgs($slb, [\get_class($this)]));
    }

    /**
     * @throws \ReflectionException
     * @expectedException \AlibabaCloud\Client\Exception\ClientException
     * @expectedExceptionMessage Get namespace error.
     */
    public function testGetNamespaceNotFound()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new \ReflectionObject($slb);
        $method = $ref->getMethod('getNamespace');
        $method->setAccessible(true);
        self::assertEquals('ApiResolverTraitTest', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }
}
