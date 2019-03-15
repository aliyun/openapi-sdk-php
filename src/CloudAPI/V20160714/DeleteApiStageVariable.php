<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVariableName()
 * @method $this withVariableName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class DeleteApiStageVariable extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
