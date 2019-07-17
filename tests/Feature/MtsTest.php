<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Mts\Mts;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Mts\V20140618\QueryFpImportResult;

/**
 * Class MtsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class MtsTest extends TestCase
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
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::mts()
                                ->v20140618()
                                ->queryFpImportResult()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Mts::v20140618()
                       ->queryFpImportResult()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(QueryFpImportResult::class, $request1);
        self::assertInstanceOf(QueryFpImportResult::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testMts()
    {
        $result = Mts::v20140618()
                     ->queryFpImportResult()
                     ->format('JSON')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();
        self::assertArrayHasKey('PageInfo', $result);
    }
}
