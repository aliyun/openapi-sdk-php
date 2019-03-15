<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Class Rpc
 *
 * @package AlibabaCloud
 */
class Rpc extends RpcRequest
{
    use ActionResolverTrait;
    use CallTrait;

    /**
     * @return mixed
     */
    private function &getParameterPosition()
    {
        return $this->options['query'];
    }
}
