<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Airec\Airec;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;

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
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The specified instance does not exist./
     */
    public function testRoa()
    {
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
                                  ]
                              ])
                    ->withInstanceId('airec-cn-xxxxxxx')
                    ->request();
    }

    /**
     * @throws ClientException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The specified instance does not exist./
     */
    public function testAirec()
    {
        Airec::v20181012()
             ->recommend()
             ->withInstanceId('airec-cn-xxxxxxx')
             ->options([
                           'query' => [
                               'UserId'      => 0,
                               'ReturnCount' => 5,
                           ]
                       ])
             ->request();
    }
}
