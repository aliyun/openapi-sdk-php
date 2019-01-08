<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLoadBalancerBackendServers
 *
 * @method string getVServerGroupId()
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getLoadBalancerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEcsInstances()
 * @method string getOwnerId()
 * @method string getTags()
 */
class DescribeLoadBalancerBackendServers extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Slb';

    /**
     * @var string
     */
    public $version = '2014-05-15';

    /**
     * @var string
     */
    public $action = 'DescribeLoadBalancerBackendServers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'slb';

    /**
     * @param string $vServerGroupId
     *
     * @return $this
     */
    public function withVServerGroupId($vServerGroupId)
    {
        $this->data['VServerGroupId'] = $vServerGroupId;
        $this->options['query']['VServerGroupId'] = $vServerGroupId;

        return $this;
    }

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function withLoadBalancerId($loadBalancerId)
    {
        $this->data['LoadBalancerId'] = $loadBalancerId;
        $this->options['query']['LoadBalancerId'] = $loadBalancerId;

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
     * @param string $ecsInstances
     *
     * @return $this
     */
    public function withEcsInstances($ecsInstances)
    {
        $this->data['EcsInstances'] = $ecsInstances;
        $this->options['query']['EcsInstances'] = $ecsInstances;

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
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }
}
