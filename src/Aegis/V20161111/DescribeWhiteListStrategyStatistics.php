<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStrategyIds()
 * @method $this withStrategyIds($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWhiteListStrategyStatistics extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
