<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getHsmDeviceType()
 * @method $this withHsmDeviceType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getHsmOem()
 * @method $this withHsmOem($value)
 */
class CreateInstance extends Rpc
{
    public $product = 'hsm';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'hsm';
}
