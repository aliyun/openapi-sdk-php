<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteLifecycleHook
 *
 * @method string getLifecycleHookName()
 * @method string getResourceOwnerAccount()
 * @method string getLifecycleHookId()
 * @method string getScalingGroupId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class DeleteLifecycleHook extends RpcRequest
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
    public $action = 'DeleteLifecycleHook';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @deprecated deprecated since version 2.0, Use withLifecycleHookId() instead.
     *
     * @param string $lifecycleHookId
     *
     * @return $this
     */
    public function setLifecycleHookId($lifecycleHookId)
    {
        return $this->withLifecycleHookId($lifecycleHookId);
    }

    /**
     * @param string $lifecycleHookId
     *
     * @return $this
     */
    public function withLifecycleHookId($lifecycleHookId)
    {
        $this->data['LifecycleHookId'] = $lifecycleHookId;
        $this->options['query']['LifecycleHookId'] = $lifecycleHookId;

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
}
