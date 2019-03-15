<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryCrackEvent extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
