<?php

namespace AlibabaCloud\Cdn\V20180510;

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
class RefreshObjectCaches extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
