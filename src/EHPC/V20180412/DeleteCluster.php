<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getReleaseInstance()
 * @method $this withReleaseInstance($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
