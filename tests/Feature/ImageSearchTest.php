<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class ImageSearchTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class ImageSearchTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-hangzhou')->asGlobalClient();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testAddItem()
    {
        $result = AlibabaCloud::imageSearch()
                              ->v20180120()
                              ->addItem()
                              ->withInstanceName('name')
                              ->options([
                                            'form_params' => [
                                                'item_id'      => 'item_id',
                                                'cat_id'       => 'cat_id',
                                                'crop'         => 'crop',
                                                'region'       => 'region',
                                                'cust_content' => 'cust_content',
                                            ],
                                        ])
                              ->request();
        self::assertArrayHasKey('RequestId', $result);
    }
}
