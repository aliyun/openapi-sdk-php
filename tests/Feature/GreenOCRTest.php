<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Green\Green;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Green\V20180509\ImageSyncScan;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class GreenOCRTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class GreenOCRTest extends TestCase
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
        $request1 = AlibabaCloud::green()
                                ->v20180509()
                                ->imageSyncScan()
                                ->host('green.cn-shanghai.aliyuncs.com')
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Green::v20180509()
                         ->imageSyncScan()
                         ->host('green.cn-shanghai.aliyuncs.com')
                         ->connectTimeout(60)
                         ->timeout(65);

        self::assertInstanceOf(ImageSyncScan::class, $request1);
        self::assertInstanceOf(ImageSyncScan::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * 传图片url检测示例代码
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testImageSyncScan()
    {
        $task1  = [
            'dataId' => uniqid('', true),
            'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/id-card-front.jpeg',
        ];
        $result = Green::v20180509()
                       ->imageSyncScan()
                       ->jsonBody([
                                      'tasks'  => [$task1],
                                      'scenes' => ['ocr'],
                                      'extras' => [['card' => 'id-card-front']],
                                  ])
                       ->host('green.cn-shanghai.aliyuncs.com')
                       ->connectTimeout(60)
                       ->timeout(65)
                       ->request();

        self::assertEquals('ocr', $result['data'][0]['results'][0]['scene']);
        self::assertEquals('review', $result['data'][0]['results'][0]['suggestion']);
        self::assertEquals('北京市东城区景山前街4号紫禁城乾清宫', $result['data'][0]['results'][0]['idCardInfo']['address']);
    }
}
