<?php

namespace AlibabaCloud\Dysmsapi;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Dysmsapi based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Dysmsapi
 *
 * @method static V20170525\QuerySendDetails querySendDetails(array $options = [])
 * @method static V20170525\SendBatchSms sendBatchSms(array $options = [])
 * @method static V20170525\SendSms sendSms(array $options = [])
 */
class DysmsapiV20170525
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Dysmsapi\\V20170525';
}
