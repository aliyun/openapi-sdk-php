<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getRecNum()
 * @method $this withRecNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getParamString()
 * @method $this withParamString($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class SingleSendSms extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
