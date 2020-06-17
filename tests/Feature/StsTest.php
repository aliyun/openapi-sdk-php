<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Sts\Sts;
use AlibabaCloud\Sts\V20150401\AssumeRole;
use PHPUnit\Framework\TestCase;

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
     * @throws ClientException
     */
    public function testSts()
    {
        try {
            Sts::v20150401()
               ->assumeRole()
               ->withRoleArn('acs:ram::12345678987:role/test')
               ->withRoleSessionName('RoleSessionName')
               ->connectTimeout(60)
               ->timeout(65)
               ->request();
        } catch (ServerException $exception) {
            self::assertEquals('The specified Role not exists .', $exception->getErrorMessage());
        }
    }
}
