<?php

namespace AlibabaCloud\Tests\Unit;

use stdClass;
use ReflectionObject;
use ReflectionException;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;

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
     * @throws ReflectionException
     */
    public function testGetServiceName()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
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
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new ReflectionObject($slb);
        $method = $ref->getMethod('getProductName');
        $method->setAccessible(true);
        self::assertEquals('Slb', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetNamespace()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new ReflectionObject($slb);
        $method = $ref->getMethod('getNamespace');
        $method->setAccessible(true);
        self::assertEquals('AlibabaCloud\Slb\V20140515', $method->invokeArgs($slb, [\get_class($slb)]));
        self::assertEquals('AlibabaCloud\Slb\V20140515', $method->invokeArgs($slb, [\get_class($this)]));
    }

    /**
     * @throws ReflectionException
     */
    public function testGetNamespaceNotFound()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new ReflectionObject($slb);
        $method = $ref->getMethod('getNamespace');
        $method->setAccessible(true);
        self::assertEquals('AlibabaCloud\Slb\V20140515', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }
}
