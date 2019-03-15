<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getLockProductId()
 * @method $this withLockProductId($value)
 * @method string getEndStartDate()
 * @method $this withEndStartDate($value)
 * @method string getServerLockStatus()
 * @method $this withServerLockStatus($value)
 * @method string getStartExpireDate()
 * @method $this withStartExpireDate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getEndExpireDate()
 * @method $this withEndExpireDate($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getBeginStartDate()
 * @method $this withBeginStartDate($value)
 */
class ListServerLock extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
