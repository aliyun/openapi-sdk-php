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
 * @method array getLifecycleHook()
 */
class CreateLifecycleHook extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param array $lifecycleHook
     *
     * @return $this
     */
    public function withLifecycleHook(array $lifecycleHook)
    {
        $this->data['LifecycleHook'] = $lifecycleHook;
        foreach ($lifecycleHook as $i => $iValue) {
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.DefaultResult'] = $lifecycleHook[$i]['DefaultResult'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.LifecycleHookName'] = $lifecycleHook[$i]['LifecycleHookName'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.HeartbeatTimeout'] = $lifecycleHook[$i]['HeartbeatTimeout'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.NotificationArn'] = $lifecycleHook[$i]['NotificationArn'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.NotificationMetadata'] = $lifecycleHook[$i]['NotificationMetadata'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.LifecycleTransition'] = $lifecycleHook[$i]['LifecycleTransition'];
        }

        return $this;
    }
}
