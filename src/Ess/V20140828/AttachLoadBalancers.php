<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AttachLoadBalancers
 *
 * @method array getLoadBalancer()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getForceAttach()
 * @method string getOwnerId()
 */
class AttachLoadBalancers extends RpcRequest
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
    public $action = 'AttachLoadBalancers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use getLoadBalancer() instead.
     *
     * @return array
     */
    public function getLoadBalancers()
    {
        return $this->getLoadBalancer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLoadBalancer() instead.
     *
     * @param array $loadBalancers
     *
     * @return $this
     */
    public function setLoadBalancers(array $loadBalancers)
    {
        return $this->withLoadBalancer($loadBalancers);
    }

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
     * @deprecated deprecated since version 2.0, Use withForceAttach() instead.
     *
     * @param string $forceAttach
     *
     * @return $this
     */
    public function setForceAttach($forceAttach)
    {
        return $this->withForceAttach($forceAttach);
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
