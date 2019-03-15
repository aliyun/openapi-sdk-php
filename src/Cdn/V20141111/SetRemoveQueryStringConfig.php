<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getKeepOssArgs()
 * @method $this withKeepOssArgs($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAliRemoveArgs()
 * @method $this withAliRemoveArgs($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetRemoveQueryStringConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
