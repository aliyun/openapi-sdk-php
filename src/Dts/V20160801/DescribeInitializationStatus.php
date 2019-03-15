<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInitializationStatus extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}
