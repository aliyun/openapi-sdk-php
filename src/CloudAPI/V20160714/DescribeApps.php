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
 * @method string getAppOwner()
 * @method $this withAppOwner($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeApps extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
