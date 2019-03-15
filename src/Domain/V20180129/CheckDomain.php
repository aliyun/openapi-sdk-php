<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getFeeCurrency()
 * @method $this withFeeCurrency($value)
 * @method string getFeePeriod()
 * @method $this withFeePeriod($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getFeeCommand()
 * @method $this withFeeCommand($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckDomain extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
