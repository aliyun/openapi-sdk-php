<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getSupportRoute()
 * @method $this withSupportRoute($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVariableName()
 * @method $this withVariableName($value)
 * @method string getVariableValue()
 * @method $this withVariableValue($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStageRouteModel()
 * @method $this withStageRouteModel($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class CreateApiStageVariable extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
