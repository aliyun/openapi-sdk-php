<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getConditions()
 * @method $this withConditions($value)
 * @method string getQueryDetail()
 * @method $this withQueryDetail($value)
 */
class CreateLogQuery extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
