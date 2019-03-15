<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNewPlanTime()
 * @method $this withNewPlanTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewExpireTime()
 * @method $this withNewExpireTime($value)
 */
class ModifySystemEventPlanTime extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
