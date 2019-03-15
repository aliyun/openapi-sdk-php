<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyTag extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
