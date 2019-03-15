<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getDefaultResult()
 * @method $this withDefaultResult($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getHeartbeatTimeout()
 * @method $this withHeartbeatTimeout($value)
 * @method string getLifecycleHookId()
 * @method $this withLifecycleHookId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotificationMetadata()
 * @method $this withNotificationMetadata($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLifecycleTransition()
 * @method $this withLifecycleTransition($value)
 * @method string getLifecycleHookName()
 * @method $this withLifecycleHookName($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
 */
class ModifyLifecycleHook extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';
}
