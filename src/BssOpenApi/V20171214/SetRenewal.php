<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getInstanceIDs()
 * @method $this withInstanceIDs($value)
 * @method string getSubscriptionType()
 * @method $this withSubscriptionType($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getRenewalPeriodUnit()
 * @method $this withRenewalPeriodUnit($value)
 * @method string getRenewalPeriod()
 * @method $this withRenewalPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class SetRenewal extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';
}
