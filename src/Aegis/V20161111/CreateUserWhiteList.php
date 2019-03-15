<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getRiskIdList()
 * @method $this withRiskIdList($value)
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateUserWhiteList extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
