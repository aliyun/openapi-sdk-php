<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEndTimeStart()
 * @method $this withEndTimeStart($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getCreateTimeEnd()
 * @method $this withCreateTimeEnd($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getEndTimeEnd()
 * @method $this withEndTimeEnd($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreateTimeStart()
 * @method $this withCreateTimeStart($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getRenewStatus()
 * @method $this withRenewStatus($value)
 */
class QueryAvailableInstancesApi extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';
}
