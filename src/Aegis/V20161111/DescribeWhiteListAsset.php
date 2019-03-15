<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLastMaxId()
 * @method $this withLastMaxId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeWhiteListAsset extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
