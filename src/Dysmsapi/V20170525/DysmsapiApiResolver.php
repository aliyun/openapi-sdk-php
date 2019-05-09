<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SendBatchSms sendBatchSms(array $options = [])
 * @method SendSms sendSms(array $options = [])
 * @method QuerySendDetails querySendDetails(array $options = [])
 */
class DysmsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dysmsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dysmsapi';
}

/**
 * @method string getTemplateParamJson()
 * @method $this withTemplateParamJson($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSmsUpExtendCodeJson()
 * @method $this withSmsUpExtendCodeJson($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSignNameJson()
 * @method $this withSignNameJson($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getPhoneNumberJson()
 * @method $this withPhoneNumberJson($value)
 */
class SendBatchSms extends Rpc
{
}

/**
 * @method string getSmsUpExtendCode()
 * @method $this withSmsUpExtendCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 */
class SendSms extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSendDate()
 * @method $this withSendDate($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySendDetails extends Rpc
{
}
