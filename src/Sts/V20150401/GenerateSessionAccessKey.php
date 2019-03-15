<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Rpc;

/**
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 */
class GenerateSessionAccessKey extends Rpc
{
    public $product = 'Sts';

    public $version = '2015-04-01';

    public $scheme = 'https';

    public $method = 'POST';
}
