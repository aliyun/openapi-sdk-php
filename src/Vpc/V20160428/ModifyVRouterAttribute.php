<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getVRouterName()
 * @method $this withVRouterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyVRouterAttribute extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
