<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteForwardEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
