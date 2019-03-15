<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeVulNumStatistics extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
