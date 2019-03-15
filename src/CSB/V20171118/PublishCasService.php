<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getData()
 * @method $this withData($value)
 */
class PublishCasService extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';
}
