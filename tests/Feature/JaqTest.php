<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Jaq\Jaq;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Jaq\V20161123\AfsAppCheck;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class JaqTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class JaqTest extends TestCase
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
        $request1 = AlibabaCloud::jaq()
                                ->v20161123()
                                ->afsAppCheck()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Jaq::v20161123()
                       ->afsAppCheck()
                       ->connectTimeout(20)
                       ->timeout(25);

        self::assertInstanceOf(AfsAppCheck::class, $request1);
        self::assertInstanceOf(AfsAppCheck::class, $request2);
        self::assertEquals($request1, $request2);
    }

    public function testJaq()
    {
        $request = Jaq::v20161123()
                      ->afsAppCheck();
        self::assertInstanceOf(AfsAppCheck::class, $request);
    }
}
