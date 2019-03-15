<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getPageType()
 * @method $this withPageType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCustomPageUrl()
 * @method $this withCustomPageUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetErrorPageConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
