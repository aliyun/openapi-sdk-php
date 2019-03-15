<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataProtocol()
 * @method $this withDataProtocol($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainUsageData extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
