<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 */
class QueryChangeLogList extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
