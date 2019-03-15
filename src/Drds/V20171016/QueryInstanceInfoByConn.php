<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class QueryInstanceInfoByConn extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';
}
