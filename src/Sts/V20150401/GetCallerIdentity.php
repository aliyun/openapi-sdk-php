<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetCallerIdentity
 *
 */
class GetCallerIdentity extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sts';

    /**
     * @var string
     */
    public $version = '2015-04-01';

    /**
     * @var string
     */
    public $action = 'GetCallerIdentity';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';
}
