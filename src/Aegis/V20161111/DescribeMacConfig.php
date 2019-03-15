<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExtern()
 * @method $this withExtern($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class DescribeMacConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
