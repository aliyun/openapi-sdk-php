<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNeedFactor()
 * @method $this withNeedFactor($value)
 */
class InnerDescribeInstanceTypes extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
