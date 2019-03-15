<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class DownloadSignedData extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
