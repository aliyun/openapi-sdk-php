<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api CreateLifecycleHook
 *
 * @method string getDefaultResult()
 * @method string getResourceOwnerAccount()
 * @method string getHeartbeatTimeout()
 * @method string getScalingGroupId()
 * @method string getOwnerAccount()
 * @method string getNotificationMetadata()
 * @method string getOwnerId()
 * @method string getLifecycleTransition()
 * @method string getLifecycleHookName()
 * @method string getNotificationArn()
 * @method array getLifecycleHook()
 */
class CreateLifecycleHook extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $defaultResult
     *
     * @return $this
     */
    public function withDefaultResult($defaultResult)
    {
        $this->data['DefaultResult'] = $defaultResult;
        $this->options['query']['DefaultResult'] = $defaultResult;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $heartbeatTimeout
     *
     * @return $this
     */
    public function withHeartbeatTimeout($heartbeatTimeout)
    {
        $this->data['HeartbeatTimeout'] = $heartbeatTimeout;
        $this->options['query']['HeartbeatTimeout'] = $heartbeatTimeout;

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $notificationMetadata
     *
     * @return $this
     */
    public function withNotificationMetadata($notificationMetadata)
    {
        $this->data['NotificationMetadata'] = $notificationMetadata;
        $this->options['query']['NotificationMetadata'] = $notificationMetadata;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $lifecycleTransition
     *
     * @return $this
     */
    public function withLifecycleTransition($lifecycleTransition)
    {
        $this->data['LifecycleTransition'] = $lifecycleTransition;
        $this->options['query']['LifecycleTransition'] = $lifecycleTransition;

        return $this;
    }

    /**
     * @param string $lifecycleHookName
     *
     * @return $this
     */
    public function withLifecycleHookName($lifecycleHookName)
    {
        $this->data['LifecycleHookName'] = $lifecycleHookName;
        $this->options['query']['LifecycleHookName'] = $lifecycleHookName;

        return $this;
    }

    /**
     * @param string $notificationArn
     *
     * @return $this
     */
    public function withNotificationArn($notificationArn)
    {
        $this->data['NotificationArn'] = $notificationArn;
        $this->options['query']['NotificationArn'] = $notificationArn;

        return $this;
    }

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
