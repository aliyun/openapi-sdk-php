<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetachLoadBalancers
 *
 * @method array getLoadBalancer()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceDetach()
 * @method string getOwnerId()
 */
class DetachLoadBalancers extends RpcRequest
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
    public $action = 'DetachLoadBalancers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @param array $loadBalancer
     *
     * @return $this
     */
    public function withLoadBalancer(array $loadBalancer)
    {
        $this->data['LoadBalancer'] = $loadBalancer;
        foreach ($loadBalancer as $i => $iValue) {
            $this->options['query']['LoadBalancer.' . ($i + 1)] = $iValue;
        }

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
