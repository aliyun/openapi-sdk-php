<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getEipAddressKeeped()
 * @method $this withEipAddressKeeped($value)
 * @method string getEniNo()
 * @method $this withEniNo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEipAddressCount()
 * @method $this withEipAddressCount($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class InnerCheckEniEipOperate extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
