<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getSubEmail()
 * @method $this withSubEmail($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getSubMobile()
 * @method $this withSubMobile($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubMedia()
 * @method $this withSubMedia($value)
 */
class OpenCdnSubscribeService extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
