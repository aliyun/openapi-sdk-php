<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Dybaseapi\MNS\MnsClient;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Dybaseapi\MNS\Requests\BatchReceiveMessage;

/**
 * Class DyBaseApiMnsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class DyBaseApiMnsTest extends TestCase
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

    /**
     * @throws ClientException
     * @throws ServerException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessage Message not exist.
     */
    public function testMns()
    {
        AlibabaCloud::accessKeyClient(
            getenv('ACCESS_KEY_ID'),
            getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-hangzhou')->asDefaultClient();

        $response = AlibabaCloud::rpc()
                                ->product('Dybaseapi')
                                ->version('2017-05-25')
                                ->action('QueryTokenForMnsQueue')
                                ->method('POST')
                                ->host('dybaseapi.aliyuncs.com')
                                ->options([
                                              'query' => [
                                                  'MessageType' => getenv('MNS_MESSAGE_TYPE'),
                                                  'QueueName'   => getenv('MNS_QUEUE_NAME'),
                                              ],
                                          ])
                                ->connectTimeout(60)
                                ->timeout(65)
                                ->request()
                                ->toArray();

        $token  = $response['MessageTokenDTO'];
        $client = new MnsClient(
            getenv('MNS_ENDPOINT'),
            $token['AccessKeyId'],
            $token['AccessKeySecret'],
            $token['SecurityToken']
        );

        $request = new BatchReceiveMessage(10, 5);
        $request->setQueueName(getenv('MNS_QUEUE_NAME'));
        $client->sendRequest($request);
    }
}
