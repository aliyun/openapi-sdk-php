<?php

namespace AlibabaCloud\Tests\Unit;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Slb\Slb;
use AlibabaCloud\Slb\V20140515\DescribeRegions;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionObject;
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
        $res = Slb::v20140515()->describeRegions();
        self::assertEquals(get_class($res), DescribeRegions::class);
    }

    public function testApiWithParameters()
    {
        AlibabaCloud::slb()->v20140515()->describeRegions(['a' => 'a']);
        $res = Slb::v20140515()->describeRegions(['a' => 'a']);
        self::assertEquals(get_class($res), DescribeRegions::class);
    }


    public function testApiNotFound()
    {
        try {
            AlibabaCloud::slb()->v20140515()->notFound();
            Slb::v20140515()->notFound();
        } catch (ClientException $exception) {
            self::assertEquals('Slb contains no notFound', $exception->getMessage());
        }
    }

    /**
     * @throws ReflectionException
     */
    public function testGetServiceName()
    {
        $slb    = Slb::v20140515();
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
        $slb    = Slb::v20140515();
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
        $slb    = Slb::v20140515();
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
        $slb    = Slb::v20140515();
        $ref    = new ReflectionObject($slb);
        $method = $ref->getMethod('getNamespace');
        $method->setAccessible(true);
        self::assertEquals('AlibabaCloud\Slb\V20140515', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }
}
