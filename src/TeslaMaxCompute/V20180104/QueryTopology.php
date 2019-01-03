<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTopology
 *
 */
class QueryTopology extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaMaxCompute';

    /**
     * @var string
     */
    public $version = '2018-01-04';

    /**
     * @var string
     */
    public $action = 'QueryTopology';
}
