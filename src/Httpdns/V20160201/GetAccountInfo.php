<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetAccountInfo
 *
 */
class GetAccountInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Httpdns';

    /**
     * @var string
     */
    public $version = '2016-02-01';

    /**
     * @var string
     */
    public $action = 'GetAccountInfo';

    /**
     * @var string
     */
    public $method = 'POST';
}
