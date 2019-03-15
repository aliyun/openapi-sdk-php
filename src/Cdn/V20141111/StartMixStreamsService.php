<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getMixType()
 * @method $this withMixType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getMainDomainName()
 * @method $this withMainDomainName($value)
 * @method string getMixStreamName()
 * @method $this withMixStreamName($value)
 * @method string getMixTemplate()
 * @method $this withMixTemplate($value)
 * @method string getMixDomainName()
 * @method $this withMixDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMainAppName()
 * @method $this withMainAppName($value)
 * @method string getMixAppName()
 * @method $this withMixAppName($value)
 * @method string getMainStreamName()
 * @method $this withMainStreamName($value)
 */
class StartMixStreamsService extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
