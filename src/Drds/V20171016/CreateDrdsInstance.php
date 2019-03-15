<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * @method string getIsAutoRenew()
 * @method $this withIsAutoRenew($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getIsHa()
 * @method $this withIsHa($value)
 * @method string getInstanceSeries()
 * @method $this withInstanceSeries($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateDrdsInstance extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';
}
