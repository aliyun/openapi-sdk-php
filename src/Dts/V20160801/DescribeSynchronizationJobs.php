<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSynchronizationJobs extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}
