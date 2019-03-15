<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplyAddress()
 * @method $this withReplyAddress($value)
 * @method string getSendtype()
 * @method $this withSendtype($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMailAddress extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
