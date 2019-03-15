<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getLoginOffset()
 * @method $this withLoginOffset($value)
 * @method string getProcessSnapshotOffset()
 * @method $this withProcessSnapshotOffset($value)
 * @method string getPortSnapshotOffset()
 * @method $this withPortSnapshotOffset($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getNetworkOffset()
 * @method $this withNetworkOffset($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAccountSnapshotOffset()
 * @method $this withAccountSnapshotOffset($value)
 * @method string getProcessOffset()
 * @method $this withProcessOffset($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCrackOffset()
 * @method $this withCrackOffset($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeLogItems extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
