<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AttachVServerGroups
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceAttach()
 * @method string getOwnerId()
 * @method array getVServerGroup()
 */
class AttachVServerGroups extends RpcRequest
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
    public $action = 'AttachVServerGroups';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @param string $forceAttach
     *
     * @return $this
     */
    public function withForceAttach($forceAttach)
    {
        $this->data['ForceAttach'] = $forceAttach;
        $this->options['query']['ForceAttach'] = $forceAttach;

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
