<?php

namespace AlibabaCloud\Tests\Unit;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Ecs\EcsV20140526;
use AlibabaCloud\Ecs\V20140526\DescribeRegions;
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
    }

    /**
     * @throws \ReflectionException
     */
    public function testGetServiceNameNotFound()
    {
        $slb    = AlibabaCloud::slb()->v20140515();
        $ref    = new \ReflectionObject($slb);
        $method = $ref->getMethod('getServiceName');
        $method->setAccessible(true);
        self::assertEquals('Slb', $method->invokeArgs($slb, [\get_class(new stdClass())]));
    }

    public function testGetServiceName2()
    {
        $ecs = EcsV20140526::describeRegions();
        self::assertInstanceOf(DescribeRegions::class, $ecs);
    }
}
