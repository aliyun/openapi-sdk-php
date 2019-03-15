<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToImageName()
 * @method $this withToImageName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToImageDesc()
 * @method $this withToImageDesc($value)
 */
class InnerCopyImageAtSameRegion extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
