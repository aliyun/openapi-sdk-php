<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Rpc;

/**
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQuotaId()
 * @method $this withQuotaId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getQuotaName()
 * @method $this withQuotaName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetQuotaInstance extends Rpc
{
    public $product = 'TeslaMaxCompute';

    public $version = '2018-01-04';
}
