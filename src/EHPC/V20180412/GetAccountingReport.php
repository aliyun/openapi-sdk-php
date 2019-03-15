<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getReportType()
 * @method $this withReportType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetAccountingReport extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
