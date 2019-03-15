<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApisByApp extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
