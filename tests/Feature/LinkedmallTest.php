<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Linkedmall\Linkedmall;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Linkedmall\V20180116\ModifyBizItems;

/**
 * Class LinkedmallTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class LinkedmallTest extends TestCase
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
        )->regionId('cn-hanghou')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::linkedmall()
                                ->v20180116()
                                ->modifyBizItems()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Linkedmall::v20180116()
                              ->modifyBizItems()
                              ->connectTimeout(20)
                              ->timeout(25);

        self::assertInstanceOf(ModifyBizItems::class, $request1);
        self::assertInstanceOf(ModifyBizItems::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testLinkedmall()
    {
        $item1 = [
            'ItemId'  => 123,
            'SkuList' => [
                [
                    'SkuId'        => 1,
                    'StatusAction' => 1,
                    'PriceCent'    => 123,
                    'PointsAmount' => 456,
                    'Quantity'     => 0,
                    'BenefitId'    => 'testId',
                    'Points'       => 100,
                ],
            ],
        ];

        $item2 = [
            'ItemId'  => 456,
            'SkuList' => [
                [
                    'SkuId'        => 4,
                    'StatusAction' => 1,
                    'PriceCent'    => 234,
                    'PointsAmount' => 234,
                    'Quantity'     => 0,
                    'BenefitId'    => 'testId',
                    'Points'       => 200,
                ],
            ],
        ];

        $items = [
            $item1,
            $item2,
        ];

        $result = Linkedmall::v20180116()
                            ->modifyBizItems()
                            ->withBizId('BizId')
                            ->withSubBizId('SubBizId')
                            ->withItemList($items)
                            ->debug(false)
                            ->connectTimeout(25)
                            ->timeout(30)
                            ->host('linkedmall.aliyuncs.com')
                            ->request();
        self::assertArrayHasKey('Message', $result);
        self::assertEquals('没有权限', $result['Message']);
    }
}
