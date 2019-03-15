<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Rpc;

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
    public $product = 'Dysmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    public $serviceCode = 'dysmsapi';
}
