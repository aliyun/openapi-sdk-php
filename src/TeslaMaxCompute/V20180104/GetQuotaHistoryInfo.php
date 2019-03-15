<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Rpc;

/**
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getQuotaName()
 * @method $this withQuotaName($value)
 */
class GetQuotaHistoryInfo extends Rpc
{
    public $product = 'TeslaMaxCompute';

    public $version = '2018-01-04';
}
