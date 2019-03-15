<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDiagnosticReportList extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
