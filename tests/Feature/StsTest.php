<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Sts\Sts;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Sts\V20150401\AssumeRole;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class StsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class StsTest extends TestCase
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
        )->regionId(\getenv('REGION_ID'))->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::sts()
                                ->v20150401()
                                ->assumeRole()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Sts::v20150401()
                       ->assumeRole()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(AssumeRole::class, $request1);
        self::assertInstanceOf(AssumeRole::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /EntityNotExist.Role: The specified Role not exists/
     * @throws ClientException
     * @throws ServerException
     */
    public function testSts()
    {
        Sts::v20150401()
           ->assumeRole()
           ->withRoleArn('acs:ram::12345678987:role/test')
           ->withRoleSessionName('RoleSessionName')
           ->connectTimeout(60)
           ->timeout(65)
           ->request();
    }
}
