<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PushObjectCache extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
