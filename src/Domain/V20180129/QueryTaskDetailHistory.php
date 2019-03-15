<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskDetailNoCursor()
 * @method $this withTaskDetailNoCursor($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainNameCursor()
 * @method $this withDomainNameCursor($value)
 */
class QueryTaskDetailHistory extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
