<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetachDBInstances
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method array getDBInstance()
 * @method string getForceDetach()
 * @method string getOwnerId()
 */
class DetachDBInstances extends RpcRequest
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
    public $action = 'DetachDBInstances';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @deprecated deprecated since version 2.0, Use getDBInstance() instead.
     *
     * @return array
     */
    public function getDBInstances()
    {
        return $this->getDBInstance();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBInstance() instead.
     *
     * @param array $dBInstances
     *
     * @return $this
     */
    public function setDBInstances(array $dBInstances)
    {
        return $this->withDBInstance($dBInstances);
    }

    /**
     * @param array $dBInstance
     *
     * @return $this
     */
    public function withDBInstance(array $dBInstance)
    {
        $this->data['DBInstance'] = $dBInstance;
        foreach ($dBInstance as $i => $iValue) {
            $this->options['query']['DBInstance.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withForceDetach() instead.
     *
     * @param string $forceDetach
     *
     * @return $this
     */
    public function setForceDetach($forceDetach)
    {
        return $this->withForceDetach($forceDetach);
    }

    /**
     * @param string $forceDetach
     *
     * @return $this
     */
    public function withForceDetach($forceDetach)
    {
        $this->data['ForceDetach'] = $forceDetach;
        $this->options['query']['ForceDetach'] = $forceDetach;

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
