<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getOperateMode()
 * @method $this withOperateMode($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getIps()
 * @method $this withIps($value)
 */
class SetAuditSecurityIp extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
