<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getSuccessConfig()
 * @method $this withSuccessConfig($value)
 * @method string getRejectConfig()
 * @method $this withRejectConfig($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFailConfig()
 * @method $this withFailConfig($value)
 */
class ModifyAlertConfig extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';
}
