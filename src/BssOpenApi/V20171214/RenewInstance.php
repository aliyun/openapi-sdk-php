<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRenewPeriod()
 * @method $this withRenewPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class RenewInstance extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';
}
