<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchDeleteScdnDomainConfigs extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';
}
