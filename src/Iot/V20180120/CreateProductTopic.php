<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTopicShortName()
 * @method $this withTopicShortName($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateProductTopic extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
