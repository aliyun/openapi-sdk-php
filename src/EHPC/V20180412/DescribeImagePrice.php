<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getSkuCode()
 * @method $this withSkuCode($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeImagePrice extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
