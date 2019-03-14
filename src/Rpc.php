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
}
