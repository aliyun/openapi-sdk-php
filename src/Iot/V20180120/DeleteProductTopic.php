<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class DeleteProductTopic extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
