<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsType()
 * @method $this withSmsType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmsContent()
 * @method $this withSmsContent($value)
 */
class CreateTemplate extends Rpc
{
    public $product = 'Sms';

    public $version = '2016-09-27';

    public $method = 'POST';
}
