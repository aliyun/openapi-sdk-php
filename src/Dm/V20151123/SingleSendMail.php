<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getHtmlBody()
 * @method $this withHtmlBody($value)
 * @method string getFromAlias()
 * @method $this withFromAlias($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToAddress()
 * @method $this withToAddress($value)
 * @method string getClickTrace()
 * @method $this withClickTrace($value)
 * @method string getSubject()
 * @method $this withSubject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplyAddressAlias()
 * @method $this withReplyAddressAlias($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getReplyToAddress()
 * @method $this withReplyToAddress($value)
 * @method string getReplyAddress()
 * @method $this withReplyAddress($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getTextBody()
 * @method $this withTextBody($value)
 */
class SingleSendMail extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
