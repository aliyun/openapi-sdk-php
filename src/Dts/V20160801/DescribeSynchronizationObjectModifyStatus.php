<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSynchronizationObjectModifyStatus extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}
