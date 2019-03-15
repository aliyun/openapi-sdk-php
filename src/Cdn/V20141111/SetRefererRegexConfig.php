<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReferRegexs()
 * @method $this withReferRegexs($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getReferType()
 * @method $this withReferType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetRefererRegexConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
