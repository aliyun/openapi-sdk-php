<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getOperations()
 * @method $this withOperations($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class OperationCustomizeReportChart extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
