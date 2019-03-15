<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 */
class DescribeTieringJobs extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $serviceCode = 'nas';
}
