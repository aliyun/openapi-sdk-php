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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class DescribeMachineConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
