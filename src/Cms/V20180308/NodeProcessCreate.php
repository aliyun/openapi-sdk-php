<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProcessUser()
 * @method $this withProcessUser($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class NodeProcessCreate extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
