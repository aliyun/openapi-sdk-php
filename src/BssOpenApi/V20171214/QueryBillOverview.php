<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getBillingCycle()
 * @method $this withBillingCycle($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class QueryBillOverview extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';
}
