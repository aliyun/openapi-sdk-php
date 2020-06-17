<?php

namespace AlibabaCloud\Tests\Unit;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Slb\V20140515\DescribeRegions;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use ReflectionObject;
use stdClass;

class VersionResolverTest extends TestCase
{
    public function testApi()
    {
        $res = AlibabaCloud::slb()->v20140515()->describeRegions();
        self::assertEquals(get_class($res), DescribeRegions::class);
    }

    public function testApiWithParameters()
    {
        $res = AlibabaCloud::slb()->v20140515()->describeRegions(['a' => 'a']);
        self::assertEquals(get_class($res), DescribeRegions::class);
    }

    public function testVersionNotFound()
    {

        try {
            AlibabaCloud::slb()->badVersion();
        } catch (ClientException $exception) {
            self::assertEquals('Slb Versions contains no BadVersion', $exception->getMessage());
        }
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
