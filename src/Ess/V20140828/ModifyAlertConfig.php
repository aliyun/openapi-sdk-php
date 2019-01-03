<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyAlertConfig
 *
 * @method string getSuccessConfig()
 * @method string getRejectConfig()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getOwnerId()
 * @method string getFailConfig()
 */
class ModifyAlertConfig extends RpcRequest
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
    public $action = 'ModifyAlertConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withSuccessConfig() instead.
     *
     * @param string $successConfig
     *
     * @return $this
     */
    public function setSuccessConfig($successConfig)
    {
        return $this->withSuccessConfig($successConfig);
    }

    /**
     * @param string $successConfig
     *
     * @return $this
     */
    public function withSuccessConfig($successConfig)
    {
        $this->data['SuccessConfig'] = $successConfig;
        $this->options['query']['SuccessConfig'] = $successConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRejectConfig() instead.
     *
     * @param string $rejectConfig
     *
     * @return $this
     */
    public function setRejectConfig($rejectConfig)
    {
        return $this->withRejectConfig($rejectConfig);
    }

    /**
     * @param string $rejectConfig
     *
     * @return $this
     */
    public function withRejectConfig($rejectConfig)
    {
        $this->data['RejectConfig'] = $rejectConfig;
        $this->options['query']['RejectConfig'] = $rejectConfig;

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
     * @deprecated deprecated since version 2.0, Use withFailConfig() instead.
     *
     * @param string $failConfig
     *
     * @return $this
     */
    public function setFailConfig($failConfig)
    {
        return $this->withFailConfig($failConfig);
    }

    /**
     * @param string $failConfig
     *
     * @return $this
     */
    public function withFailConfig($failConfig)
    {
        $this->data['FailConfig'] = $failConfig;
        $this->options['query']['FailConfig'] = $failConfig;

        return $this;
    }
}
