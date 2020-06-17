<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Airec\Airec;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class AirecTest
 *
 * @package AlibabaCloud\Tests\Feature
 */
class AirecTest extends TestCase
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
        )->regionId('cn-hangzhou')->asDefaultClient();
    }

    /**
     * @throws ClientException
     */
    public function testRoa()
    {
        try {
            AlibabaCloud::roa()
                        ->regionId('cn-beijing')
                        ->product('Airec')
                        ->version('2018-10-12')
                        ->action('Recommend')
                        ->serviceCode('airec')
                        ->endpointType('openAPI')
                        ->method('GET')
                        ->host('airec.cn-beijing.aliyuncs.com')
                        ->pathPattern('/openapi/instances/[InstanceId]/actions/recommend')
                        ->options([
                                      'query' => [
                                          'UserId'      => 0,
                                          'ReturnCount' => 5,
                                      ],
                                  ])
                        ->connectTimeout(60)
                        ->timeout(65)
                        ->withInstanceId('airec-cn-xxxxxxx')
                        ->request();
        } catch (ServerException $exception) {
            self::assertEquals($exception->getErrorMessage(), 'The specified instance does not exist.');
        }
    }

    /**
     * @throws ClientException
     */
    public function testAirec()
    {
        try {
            Airec::v20181012()
                 ->recommend()
                 ->withInstanceId('airec-cn-xxxxxxx')
                 ->contentType('application/json')
                 ->withItems('1557567585:article')
                 ->withUserId(0)
                 ->withReturnCount(5)
                 ->debug(true)
                 ->connectTimeout(60)
                 ->timeout(65)
                 ->request();
        } catch (ServerException $exception) {
            self::assertEquals($exception->getErrorMessage(), 'The specified instance does not exist.');
        }
    }
}
