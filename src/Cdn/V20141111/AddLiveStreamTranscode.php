<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRecord()
 * @method $this withRecord($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnapshot()
 * @method $this withSnapshot($value)
 */
class AddLiveStreamTranscode extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
