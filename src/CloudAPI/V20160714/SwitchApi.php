<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getHistoryVersion()
 * @method $this withHistoryVersion($value)
 */
class SwitchApi extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
