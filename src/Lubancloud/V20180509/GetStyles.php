<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetStyles
 *
 */
class GetStyles extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'lubancloud';

    /**
     * @var string
     */
    public $version = '2018-05-09';

    /**
     * @var string
     */
    public $action = 'GetStyles';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'luban';
}
