<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetReserveDomainUrl
 *
 */
class GetReserveDomainUrl extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-02-08';

    /**
     * @var string
     */
    public $action = 'GetReserveDomainUrl';

    /**
     * @var string
     */
    public $method = 'POST';
}
