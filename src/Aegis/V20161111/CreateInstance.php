<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getIsAutoRenew()
 * @method $this withIsAutoRenew($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVmNumber()
 * @method $this withVmNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 */
class CreateInstance extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
