<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getTrafficControlId()
 * @method $this withTrafficControlId($value)
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveTrafficControlApis extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
