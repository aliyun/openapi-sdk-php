<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLifecycleHook
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
class CreateLifecycleHook extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'CreateLifecycleHook';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withDefaultResult() instead.
     *
     * @param string $defaultResult
     *
     * @return $this
     */
    public function setDefaultResult($defaultResult)
    {
        return $this->withDefaultResult($defaultResult);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withHeartbeatTimeout() instead.
     *
     * @param string $heartbeatTimeout
     *
     * @return $this
     */
    public function setHeartbeatTimeout($heartbeatTimeout)
    {
        return $this->withHeartbeatTimeout($heartbeatTimeout);
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
     * @deprecated deprecated since version 2.0, Use withScalingGroupId() instead.
     *
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        return $this->withScalingGroupId($scalingGroupId);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withNotificationMetadata() instead.
     *
     * @param string $notificationMetadata
     *
     * @return $this
     */
    public function setNotificationMetadata($notificationMetadata)
    {
        return $this->withNotificationMetadata($notificationMetadata);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withLifecycleTransition() instead.
     *
     * @param string $lifecycleTransition
     *
     * @return $this
     */
    public function setLifecycleTransition($lifecycleTransition)
    {
        return $this->withLifecycleTransition($lifecycleTransition);
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
     * @deprecated deprecated since version 2.0, Use withLifecycleHookName() instead.
     *
     * @param string $lifecycleHookName
     *
     * @return $this
     */
    public function setLifecycleHookName($lifecycleHookName)
    {
        return $this->withLifecycleHookName($lifecycleHookName);
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
     * @deprecated deprecated since version 2.0, Use withNotificationArn() instead.
     *
     * @param string $notificationArn
     *
     * @return $this
     */
    public function setNotificationArn($notificationArn)
    {
        return $this->withNotificationArn($notificationArn);
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
     * @deprecated deprecated since version 2.0, Use getLifecycleHook() instead.
     *
     * @return array
     */
    public function getLifecycleHooks()
    {
        return $this->getLifecycleHook();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLifecycleHook() instead.
     *
     * @param array $lifecycleHooks
     *
     * @return $this
     */
    public function setLifecycleHooks(array $lifecycleHooks)
    {
        return $this->withLifecycleHook($lifecycleHooks);
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
