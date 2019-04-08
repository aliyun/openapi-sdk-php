<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Ram\V20150501\ListAccessKeys;
use PHPUnit\Framework\TestCase;

/**
 * Class RamTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class RamTest extends TestCase
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
        $request = AlibabaCloud::ram()
                               ->v20150501()
                               ->listAccessKeys()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(ListAccessKeys::class, $request);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testRam()
    {
        $result = AlibabaCloud::ram()
                              ->v20150501()
                              ->listAccessKeys()
                              ->options([
                                            'verify' => false,
                                        ])
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertEquals(
            \getenv('ACCESS_KEY_ID'),
            $result['AccessKeys']['AccessKey'][0]['AccessKeyId']
        );
    }
}
