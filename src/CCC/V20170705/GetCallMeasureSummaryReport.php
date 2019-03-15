<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getYear()
 * @method $this withYear($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDay()
 * @method $this withDay($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetCallMeasureSummaryReport extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
