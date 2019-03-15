<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getTaskNoCursor()
 * @method $this withTaskNoCursor($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCreateTimeCursor()
 * @method $this withCreateTimeCursor($value)
 */
class QueryTaskInfoHistory extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
