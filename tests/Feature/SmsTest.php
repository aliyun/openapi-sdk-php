<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\DefaultAcsClient;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Profile\DefaultProfile;
use AlibabaCloud\Dysmsapi\DysmsapiV20170525;
use AlibabaCloud\Dysmsapi\V20170525\SendSms;
use PHPUnit\Framework\TestCase;

/**
 * Class SmsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class SmsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('SMS_ACCESS_KEY_ID'),
            \getenv('SMS_ACCESS_KEY_SECRET')
        )->regionId('cn-hangzhou')
                    ->asGlobalClient();
    }

    public function testSms()
    {
        try {
            $request = AlibabaCloud::dysmsapi()
                                   ->v20170525()
                                   ->sendSms()
                                   ->method('POST')
                                   ->withPhoneNumbers(\getenv('SMS_PHONE'))
                                   ->withSignName(\getenv('SMS_SIGN_NAME'))
                                   ->withTemplateCode(\getenv('SMS_CODE'))
                                   ->withTemplateParam(json_encode(
                                                           [
                                                               'score' => '100',
                                                               'bonus' => '100',
                                                           ],
                                                           JSON_UNESCAPED_UNICODE
                                                       ));

            $result = $request->request();

            self::assertEquals('OK', $result['Message']);
        } catch (ServerException $e) {
            self::assertNotEmpty($e->getMessage());
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    public function testSmsWithVersionStatic()
    {
        try {
            $request = DysmsapiV20170525::sendSms()
                                        ->method('POST')
                                        ->withPhoneNumbers(\getenv('SMS_PHONE'))
                                        ->withSignName(\getenv('SMS_SIGN_NAME'))
                                        ->withTemplateCode(\getenv('SMS_CODE'))
                                        ->withTemplateParam(json_encode(
                                                                [
                                                                    'score' => '100',
                                                                    'bonus' => '100',
                                                                ],
                                                                JSON_UNESCAPED_UNICODE
                                                            ));

            $result = $request->request();
            self::assertEquals('OK', $result['Message']);
        } catch (ServerException $e) {
            self::assertNotEmpty($e->getMessage());
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    public function testOldMethod()
    {
        $iClientProfile = DefaultProfile::getProfile(
            'cn-hangzhou',
            \getenv('SMS_ACCESS_KEY_ID'),
            \getenv('SMS_ACCESS_KEY_SECRET')
        );

        $client = new DefaultAcsClient($iClientProfile);

        $request = new SendSms();
        $request->withPhoneNumbers(\getenv('SMS_PHONE'));
        $request->withSignName(\getenv('SMS_SIGN_NAME'));
        $request->withTemplateCode(\getenv('SMS_CODE'));
        $request->withTemplateParam(json_encode(
                                        [
                                            'score' => '100',
                                            'bonus' => '100',
                                        ],
                                        JSON_UNESCAPED_UNICODE
                                    ));
        try {
            $result = $client->getAcsResponse($request);
            self::assertEquals('OK', $result['Message']);
        } catch (ServerException $e) {
            self::assertNotEmpty($e->getErrorMessage());
        } catch (ClientException $e) {
            self::assertNotEmpty($e->getErrorMessage());
        }
    }
}
