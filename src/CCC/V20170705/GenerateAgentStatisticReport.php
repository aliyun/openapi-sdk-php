<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GenerateAgentStatisticReport extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
