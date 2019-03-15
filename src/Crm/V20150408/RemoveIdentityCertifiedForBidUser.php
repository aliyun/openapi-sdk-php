<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Rpc;

/**
 * @method string getBidType()
 * @method $this withBidType($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class RemoveIdentityCertifiedForBidUser extends Rpc
{
    public $product = 'Crm';

    public $version = '2015-04-08';

    public $method = 'POST';

    public $serviceCode = 'crm';
}
