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
 * @method string getTrafficControlName()
 * @method $this withTrafficControlName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeTrafficControls extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
