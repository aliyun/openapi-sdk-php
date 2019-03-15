<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getJobs()
 * @method $this withJobs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopJobs extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
