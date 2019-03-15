<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 */
class RefreshScdnObjectCaches extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';
}
