<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetachVServerGroups
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceDetach()
 * @method string getOwnerId()
 * @method array getVServerGroup()
 */
class DetachVServerGroups extends RpcRequest
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
    public $action = 'DetachVServerGroups';

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

    /**
     * @deprecated deprecated since version 2.0, Use getVServerGroup() instead.
     *
     * @return array
     */
    public function getVServerGroups()
    {
        return $this->getVServerGroup();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVServerGroup() instead.
     *
     * @param array $vServerGroups
     *
     * @return $this
     */
    public function setVServerGroups(array $vServerGroups)
    {
        return $this->withVServerGroup($vServerGroups);
    }

    /**
     * @param array $vServerGroup
     *
     * @return $this
     */
    public function withVServerGroup(array $vServerGroup)
    {
        $this->data['VServerGroup'] = $vServerGroup;
        foreach ($vServerGroup as $i => $iValue) {
            $this->options['query']['VServerGroup.' . ($i + 1) . '.LoadBalancerId'] = $vServerGroup[$i]['LoadBalancerId'];
            foreach ($vServerGroup[$i]['VServerGroupAttributes'] as $j => $jValue) {
                $this->options['query']['VServerGroup.' . ($i + 1) . '.VServerGroupAttribute.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}
