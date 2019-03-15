<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryTaskDetailList extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
