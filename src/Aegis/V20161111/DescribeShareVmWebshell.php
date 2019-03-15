<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSecureToken()
 * @method $this withSecureToken($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeShareVmWebshell extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
