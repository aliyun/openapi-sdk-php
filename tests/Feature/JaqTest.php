<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Jaq\V20161123\AfsAppCheck;
use PHPUnit\Framework\TestCase;

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
        $request = AlibabaCloud::jaq()
                               ->v20161123()
                               ->afsAppCheck()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(AfsAppCheck::class, $request);
    }

    public function testJaq()
    {
        $request = AlibabaCloud::jaq()
                               ->v20161123()
                               ->afsAppCheck();
        self::assertInstanceOf(AfsAppCheck::class, $request);
    }
}
