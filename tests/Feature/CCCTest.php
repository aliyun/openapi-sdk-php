<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class CCCTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class CCCTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::bearerTokenClient(
            \getenv('BEARER_TOKEN')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    /**
     * @throws ClientException
     */
    public function testAegis()
    {
        try {
            AlibabaCloud::cCC()
                        ->v20170705()
                        ->listPhoneNumbers()
                        ->host('ccc.cn-shanghai.aliyuncs.com')
                        ->withInstanceId('id')
                        ->connectTimeout(20)
                        ->timeout(25)
                        ->request();
        } catch (ServerException $e) {
            $result = $e->getResult();
            self::assertArrayHasKey('Message', $result);
            self::assertEquals(
                'InvalidBearerTokenException: Bearertoken has expired',
                $result['Message']
            );
        }
    }
}
