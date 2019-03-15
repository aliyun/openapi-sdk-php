<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getDynamicOrigin()
 * @method $this withDynamicOrigin($value)
 * @method string getStaticType()
 * @method $this withStaticType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStaticUri()
 * @method $this withStaticUri($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStaticPath()
 * @method $this withStaticPath($value)
 * @method string getDynamicCacheControl()
 * @method $this withDynamicCacheControl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDynamicConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
