<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Jaq\V20161123\AfsAppCheck;
use PHPUnit\Framework\TestCase;

/**
 * Class JaqTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class JaqTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-hanghou')->asGlobalClient();
    }

    public function testJaq()
    {
        $request = AlibabaCloud::jaq()->v20161123()->afsAppCheck();
        self::assertInstanceOf(AfsAppCheck::class, $request);
    }
}
