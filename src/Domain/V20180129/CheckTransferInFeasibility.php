<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getTransferAuthorizationCode()
 * @method $this withTransferAuthorizationCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckTransferInFeasibility extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
