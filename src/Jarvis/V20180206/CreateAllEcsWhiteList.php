<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class CreateAllEcsWhiteList extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
