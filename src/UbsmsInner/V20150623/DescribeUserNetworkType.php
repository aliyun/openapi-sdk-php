<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Rpc;

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeUserNetworkType extends Rpc
{
    public $product = 'Ubsms-inner';

    public $version = '2015-06-23';

    public $method = 'POST';
}
