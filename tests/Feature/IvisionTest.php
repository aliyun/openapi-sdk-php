<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Ivision\V20190308\DescribeProjects;

/**
 * Class IvisionTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class IvisionTest extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-beijing')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::ivision()
                               ->v20190308()
                               ->describeProjects()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(DescribeProjects::class, $request);
    }

    /**
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /Your account has not opened service yet./
     * @throws ClientException
     * @throws ServerException
     */
    public function testIvision()
    {
        $result = AlibabaCloud::ivision()
                              ->v20190308()
                              ->describeProjects()
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->withCurrentPage(1)
                              ->withPageSize(10)
                              ->request();

        self::assertArrayHasKey('Data', $result);
    }
}
