<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Dbs\V20190306\StartBackupPlan;
use PHPUnit\Framework\TestCase;

/**
 * Class DbsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class DbsTest extends TestCase
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
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::dbs()
                               ->v20190306()
                               ->startBackupPlan()
                               ->host('dbs-api.cn-hangzhou.aliyuncs.com')
                               ->withBackupPlanId('id')
                               ->withOwnerId('id')
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(StartBackupPlan::class, $request);
    }

}
