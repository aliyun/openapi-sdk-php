<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class SetIpControlApis extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
