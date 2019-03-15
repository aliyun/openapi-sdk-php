<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeAccountProfileByKeyWord extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

    public $method = 'POST';
}
