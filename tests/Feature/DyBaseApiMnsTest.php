<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Dybaseapi\MNS\MnsClient;
use AlibabaCloud\Dybaseapi\MNS\Requests\BatchReceiveMessage;
use PHPUnit\Framework\TestCase;

/**
 * Class DyBaseApiMnsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class DyBaseApiMnsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testMns()
    {
        AlibabaCloud::accessKeyClient(
            getenv('ACCESS_KEY_ID'),
            getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-hangzhou')->asGlobalClient();

        $response = AlibabaCloud::rpcRequest()
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
                                ->request()
                                ->toArray();

        $token  = $response['MessageTokenDTO'];
        $client = new MnsClient(
            getenv('MNS_ENDPOINT'),
            $token['AccessKeyId'],
            $token['AccessKeySecret'],
            $token['SecurityToken']
        );

        try {
            $request = new BatchReceiveMessage(10, 5);
            $request->setQueueName(getenv('MNS_QUEUE_NAME'));
            $client->sendRequest($request);
        } catch (ServerException $e) {
            self::assertEquals('Message not exist.', $e->getErrorMessage());
        }
    }
}
