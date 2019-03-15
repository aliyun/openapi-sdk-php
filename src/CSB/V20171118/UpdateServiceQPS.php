<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getQps()
 * @method $this withQps($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateServiceQPS extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';
}
