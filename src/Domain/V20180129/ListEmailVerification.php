<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getVerificationStatus()
 * @method $this withVerificationStatus($value)
 */
class ListEmailVerification extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
