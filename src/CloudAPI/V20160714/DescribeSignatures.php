<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSignatureName()
 * @method $this withSignatureName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignatureId()
 * @method $this withSignatureId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSignatures extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
