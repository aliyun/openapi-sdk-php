<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class CccTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class CccTest extends TestCase
{
    public function setUp()
    {
        AlibabaCloud::bearerTokenClient(
            \getenv('BEARER_TOKEN')
        )->name('ccc')
                    ->regionId('cn-shanghai');
    }

    /**
     * Assert for CCC
     */
    public function testCCC()
    {
        try {
            $request = AlibabaCloud::cCC()
                                   ->v20170705()
                                   ->listPhoneNumbers()
                                   ->client('ccc')
                                   ->withInstanceId(\getenv('CCC_INSTANCE_ID'))
                                   ->withOutboundOnly(true)
                                   ->scheme('https')
                                   ->host('ccc.cn-shanghai.aliyuncs.com');

            $result  = $request->request();
            self::assertArrayHasKey('PhoneNumbers', $result);
        } catch (ClientException $e) {
            $this->assertEquals(\ALIBABA_CLOUD_SERVER_UNREACHABLE, $e->getErrorCode());
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'InvalidBearerTokenException: Bearertoken has expired',
                    'Specified bearer token is not found.',
                ]
            );
        }
    }
}
