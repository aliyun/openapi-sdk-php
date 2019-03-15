<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 */
class AddScdnDomain extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';
}
