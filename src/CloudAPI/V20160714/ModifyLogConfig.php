<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getSlsLogStore()
 * @method $this withSlsLogStore($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSlsProject()
 * @method $this withSlsProject($value)
 */
class ModifyLogConfig extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
