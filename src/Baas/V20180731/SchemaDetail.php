<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class SchemaDetail extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
