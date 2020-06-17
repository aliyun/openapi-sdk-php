<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Ivision\Ivision;
use AlibabaCloud\Ivision\V20190308\DescribeFaceGroups;
use AlibabaCloud\Ivision\V20190308\DescribeProjects;
use PHPUnit\Framework\TestCase;

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
        $request1 = AlibabaCloud::ivision()
                                ->v20190308()
                                ->describeFaceGroups()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Ivision::v20190308()
                           ->describeFaceGroups()
                           ->connectTimeout(60)
                           ->timeout(65);

        self::assertInstanceOf(DescribeFaceGroups::class, $request1);
        self::assertInstanceOf(DescribeFaceGroups::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testIvision()
    {
        try {
            Ivision::v20190308()
                   ->describeFaceGroups()
                   ->withCurrentPage(1)
                   ->withPageSize(10)
                   ->connectTimeout(60)
                   ->timeout(65)
                   ->request();
        } catch (ServerException $exception) {
            self::assertEquals('Your account has not opened service yet.', $exception->getErrorMessage());
        }
    }
}
