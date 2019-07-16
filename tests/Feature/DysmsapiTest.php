<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Dysmsapi\Dysmsapi;
use AlibabaCloud\Client\AlibabaCloud;

/**
 * Class DysmsapiTest
 *
 * @package AlibabaCloud\Tests\Feature
 */
class DysmsapiTest extends TestCase
{

    public function testException()
    {
        AlibabaCloud::accessKeyClient(
            \AlibabaCloud\Client\env('ACCESS_KEY_ID'),
            \AlibabaCloud\Client\env('ACCESS_KEY_SECRET'))
                    ->regionId('cn-hangzhou')
                    ->asDefaultClient();

        $result = Dysmsapi::v20170525()
                          ->sendSms()
                          ->withPhoneNumbers('18888888888')
                          ->withSignName('SignName')
                          ->withTemplateCode('SMS_12345678')
                          ->withTemplateParam(json_encode(['code' => '111']))
                          ->connectTimeout(60)
                          ->timeout(65)
                          ->request();

        self::assertEquals(
            'isv.SMS_TEMPLATE_ILLEGAL',
            $result['Code']
        );
    }

}
