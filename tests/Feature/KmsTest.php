<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class KmsTest
 *
 * @package AlibabaCloud\Kms\Tests\Feature
 */
class KmsTest extends TestCase
{
    /**
     * @var string
     */
    protected static $keyId;

    /**
     * @var string
     */
    protected static $keyIdExternal;

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public static function tearDownAfterClass()
    {
        parent::tearDownAfterClass();
        self::deleteKeys(1);
        self::deleteKeys(2);
    }

    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            getenv('ACCESS_KEY_ID'),
            getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-hangzhou')->asDefaultClient();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testDescribeRegions()
    {
        $result = AlibabaCloud::kms()->v20160120()->describeRegions()->request();
        self::assertArrayHasKey('Regions', $result);
    }

    /**
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public function testCreateKey()
    {
        if (self::$keyId !== null) {
            return self::$keyId;
        }

        $result = AlibabaCloud::kms()
                              ->v20160120()
                              ->createKey()
                              ->withOrigin('Aliyun_KMS')
                              ->withDescription('unit test create key ' . time())
                              ->withKeyUsage('ENCRYPT/DECRYPT')
                              ->request();

        if ($result['Code'] === 'Rejected.LimitExceeded') {
            self::$keyId = getenv('KEY_ID');
        } else {
            self::assertArrayHasKey('KeyMetadata', $result);
            self::$keyId = $result['KeyMetadata']['KeyId'];
        }
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testListKeys()
    {
        $result = AlibabaCloud::kms()
                              ->v20160120()
                              ->listKeys()
                              ->withPageNumber(1)
                              ->withPageSize(1)
                              ->request();

        self::assertArrayHasKey('Keys', $result);
    }

    /**
     * @depends testCreateKey
     * @throws ClientException
     * @throws ServerException
     */
    public function testDescribeKey()
    {
        $result = AlibabaCloud::kms()
                              ->v20160120()
                              ->describeKey()
                              ->withKeyId(self::$keyId)
                              ->request();

        self::assertArrayHasKey('KeyMetadata', $result);
    }

    /**
     * @depends testCreateKey
     * @throws ClientException
     * @throws ServerException
     */
    public function testDisableKey()
    {
        AlibabaCloud::kms()
                    ->v20160120()
                    ->disableKey()
                    ->withKeyId(self::$keyId)
                    ->request();

        $result = AlibabaCloud::kms()
                              ->v20160120()
                              ->describeKey()
                              ->withKeyId(self::$keyId)
                              ->request();

        self::assertEquals('Disabled', $result['KeyMetadata']['KeyState']);
    }

    /**
     * @param $pageNumber
     *
     * @throws ClientException
     * @throws ServerException
     */
    private static function deleteKeys($pageNumber)
    {
        $list = AlibabaCloud::kms()
                            ->v20160120()
                            ->listKeys()
                            ->withPageNumber($pageNumber)
                            ->withPageSize(100)
                            ->request();

        foreach ($list['Keys']['Key'] as $item) {
            try {
                AlibabaCloud::kms()
                            ->v20160120()
                            ->scheduleKeyDeletion()
                            ->withKeyId($item['KeyId'])
                            ->withPendingWindowInDays(7)
                            ->request();
            } catch (Exception $exception) {
            }
        }
    }
}
