<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEffectTime()
 * @method $this withEffectTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimitTime()
 * @method $this withLimitTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPlanTime()
 * @method $this withPlanTime($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEvents extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
