<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class DescribeMetaData extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
