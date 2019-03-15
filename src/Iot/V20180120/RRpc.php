<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRequestBase64Byte()
 * @method $this withRequestBase64Byte($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 */
class RRpc extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
