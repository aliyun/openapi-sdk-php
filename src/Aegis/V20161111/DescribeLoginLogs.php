<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class DescribeLoginLogs extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
