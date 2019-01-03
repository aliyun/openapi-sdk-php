<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMarketCategories
 *
 */
class QueryMarketCategories extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'QueryMarketCategories';

    /**
     * @var string
     */
    public $method = 'POST';
}
