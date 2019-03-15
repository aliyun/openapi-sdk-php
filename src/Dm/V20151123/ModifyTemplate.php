<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsType()
 * @method $this withSmsType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateText()
 * @method $this withTemplateText($value)
 * @method string getTemplateNickName()
 * @method $this withTemplateNickName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTemplateSubject()
 * @method $this withTemplateSubject($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getSmsContent()
 * @method $this withSmsContent($value)
 */
class ModifyTemplate extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
