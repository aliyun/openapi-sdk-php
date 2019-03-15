<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Rpc;

/**
 * @method string getModule()
 * @method $this withModule($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetOpLog extends Rpc
{
    public $product = 'dms-enterprise';

    public $version = '2018-11-01';

    public $serviceCode = 'dmsenterprise';
}
