<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 */
class CreateVulWhitelist extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
