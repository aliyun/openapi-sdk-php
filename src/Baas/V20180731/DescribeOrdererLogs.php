<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getConsortiumId()
 * @method $this withConsortiumId($value)
 * @method string getOrdererName()
 * @method $this withOrdererName($value)
 */
class DescribeOrdererLogs extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
