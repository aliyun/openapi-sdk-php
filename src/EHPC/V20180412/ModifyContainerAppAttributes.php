<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class ModifyContainerAppAttributes extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
