<?php

namespace AlibabaCloud\Lubancloud\V20180509;

use AlibabaCloud\Rpc;

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryCutoutTaskResult extends Rpc
{
    public $product = 'lubancloud';

    public $version = '2018-05-09';

    public $method = 'POST';

    public $serviceCode = 'luban';
}
