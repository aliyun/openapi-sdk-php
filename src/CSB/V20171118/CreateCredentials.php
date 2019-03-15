<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateCredentials extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';
}
