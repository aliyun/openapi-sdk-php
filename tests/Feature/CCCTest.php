<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\CCC\CCC;
use AlibabaCloud\CCC\V20170705\ListPhoneNumbers;
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
    /**
     * @var string
     */
    private $bearerToken = 'eyJhbGciOiJSUzI1NiIsImsyaWQiOiJlNE92NnVOUDhsMEY2RmVUMVhvek5wb1NBcVZLblNGRyIsImtpZCI6IkpDOXd4enJocUowZ3RhQ0V0MlFMVWZldkVVSXdsdEZodWk0TzFiaDY3dFUifQ.TjU2UldwZzFzRE1oVEN5UStjYlZLV1dzNW45cFBOSWdNRDhzQmVXYmVpLytWY012MEJqYjdTdnB3SE9LcHBiZkorUGdvclAxRy9GTjdHeldmaWZFVndoa05ueUNTem80dU0rUVFKdDFSY2V0bmFQcml5WFljTDhmNUZ2c1pFd3BhTDFOajVvRW9QVG83S1NVU3JpTFdKQmNnVHB1U094cUd4cGpCeFdXS0pDVnN0L3lzRkp4RTVlSFNzUm1Qa1FBVTVwS1lmaXE0QVFSd3lPQjdYSk1uUGFKU1BiSWhyWVFVS21WOVd5K2d3PT0.jxdCiNimyes3swDRBSxdsgaL4IlOD2Kz49Gf5w0VZ0Xap9ozUyxvSSywGzMrKvCTIoeh9QMCMjCpnt9A-nQxENj3YGAeBk8Wy19uHiT-4OVo-CiCKmKxILpzxcpOptNO-LER1swVLbt0NiTuTH4KB5CUaRwJKIFJuUwa57HcsWbvWQyZa1ms0NNOccNfGJl4177eY2LTUyyXWi4wYNA_L0YMTkZz4sOFM_Mdzks8bHXiSbGkkjfWQy0QblkLz6Bboh1OYlg3_RCLSWby_FMNoxU_eG2lGAsDnYxZDmCAq2jedY0x1RzZodo9HYRQN7DujlBhfzqm4hOBNvA3LiJfzw';

    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::bearerTokenClient(
            $this->bearerToken
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::cCC()
                                ->v20170705()
                                ->listPhoneNumbers()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = CCC::v20170705()
                       ->listPhoneNumbers()
                       ->connectTimeout(60)
                       ->timeout(65);

        $request3 = (new CCC())->v20170705()
                               ->listPhoneNumbers()
                               ->connectTimeout(60)
                               ->timeout(65);

        self::assertInstanceOf(ListPhoneNumbers::class, $request1);
        self::assertInstanceOf(ListPhoneNumbers::class, $request2);
        self::assertInstanceOf(ListPhoneNumbers::class, $request3);
        self::assertEquals($request1, $request2);
        self::assertEquals($request1, $request3);
    }

    /**
     * @throws ClientException
     */
    public function testAegis()
    {
        try {
            CCC::v20170705()
               ->listPhoneNumbers()
               ->host('ccc.cn-shanghai.aliyuncs.com')
               ->withInstanceId('id')
               ->connectTimeout(60)
               ->timeout(65)
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
