<?php

namespace AlibabaCloud\SmsIntl\V20180501;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SmsConversion smsConversion(array $options = [])
 * @method SendMessageWithTemplate sendMessageWithTemplate(array $options = [])
 * @method SendMessageToGlobe sendMessageToGlobe(array $options = [])
 * @method QueryMessage queryMessage(array $options = [])
 */
class SmsIntlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'sms-intl';

    /** @var string */
    public $version = '2018-05-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConversionDate()
 * @method $this withConversionDate($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SmsConversion extends Rpc
{
}

/**
 * @method string getSmsUpExtendCode()
 * @method $this withSmsUpExtendCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 */
class SendMessageWithTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getType()
 * @method $this withType($value)
 */
class SendMessageToGlobe extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryMessage extends Rpc
{
}
