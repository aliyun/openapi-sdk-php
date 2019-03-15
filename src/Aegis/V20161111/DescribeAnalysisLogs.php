<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 */
class DescribeAnalysisLogs extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
