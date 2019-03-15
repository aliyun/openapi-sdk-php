<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getHeaderValue()
 * @method $this withHeaderValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getHeaderKey()
 * @method $this withHeaderKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyHttpHeaderConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
