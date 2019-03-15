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
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getApiIds()
 * @method $this withApiIds($value)
 */
class RemoveSignatureApis extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
