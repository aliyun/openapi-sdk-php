<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getCsbName()
 * @method $this withCsbName($value)
 * @method string getServices()
 * @method $this withServices($value)
 */
class CommitSuccessedServices extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';
}
