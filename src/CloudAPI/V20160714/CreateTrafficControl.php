<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getApiDefault()
 * @method $this withApiDefault($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getTrafficControlUnit()
 * @method $this withTrafficControlUnit($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserDefault()
 * @method $this withUserDefault($value)
 * @method string getAppDefault()
 * @method $this withAppDefault($value)
 */
class CreateTrafficControl extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
