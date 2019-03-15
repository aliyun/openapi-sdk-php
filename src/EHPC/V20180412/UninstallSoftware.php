<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UninstallSoftware extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
