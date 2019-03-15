<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getSchemeOrigin()
 * @method $this withSchemeOrigin($value)
 * @method string getSchemeOriginPort()
 * @method $this withSchemeOriginPort($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetForwardSchemeConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
