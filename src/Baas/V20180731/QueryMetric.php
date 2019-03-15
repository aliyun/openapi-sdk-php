<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getTimeArea()
 * @method $this withTimeArea($value)
 * @method string getInnerIp()
 * @method $this withInnerIp($value)
 */
class QueryMetric extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
