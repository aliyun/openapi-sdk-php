<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Linkedmall\V20180116\ModifyBizItems;
use PHPUnit\Framework\TestCase;

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
        $request = AlibabaCloud::linkedmall()
                               ->v20180116()
                               ->modifyBizItems()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(ModifyBizItems::class, $request);
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

        $result = AlibabaCloud::linkedmall()
                              ->v20180116()
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
