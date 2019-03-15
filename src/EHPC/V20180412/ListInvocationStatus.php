<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 */
class ListInvocationStatus extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
