<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileID()
 * @method $this withRegistrantProfileID($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryFailReasonForRegistrantProfileRealNameVerification extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
