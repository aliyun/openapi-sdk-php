<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMaxQuotaLevel()
 * @method $this withMaxQuotaLevel($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetMaxQuotaLevel extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
