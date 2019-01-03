<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryUserAvailableCreditAmount
 *
 */
class QueryUserAvailableCreditAmount extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'QueryUserAvailableCreditAmount';

    /**
     * @var string
     */
    public $method = 'POST';
}
