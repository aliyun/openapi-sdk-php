<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getTopicFullName()
 * @method $this withTopicFullName($value)
 * @method string getQos()
 * @method $this withQos($value)
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class Pub extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
