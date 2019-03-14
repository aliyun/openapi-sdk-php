<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * Api CreateMasterSlaveVServerGroup
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getMasterSlaveBackendServers()
 * @method string getLoadBalancerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getMasterSlaveVServerGroupName()
 * @method string getOwnerId()
 * @method string getTags()
 */
class CreateMasterSlaveVServerGroup extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

    public $serviceCode = 'slb';

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
     * @param string $masterSlaveBackendServers
     *
     * @return $this
     */
    public function withMasterSlaveBackendServers($masterSlaveBackendServers)
    {
        $this->data['MasterSlaveBackendServers'] = $masterSlaveBackendServers;
        $this->options['query']['MasterSlaveBackendServers'] = $masterSlaveBackendServers;

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
     * @param string $masterSlaveVServerGroupName
     *
     * @return $this
     */
    public function withMasterSlaveVServerGroupName($masterSlaveVServerGroupName)
    {
        $this->data['MasterSlaveVServerGroupName'] = $masterSlaveVServerGroupName;
        $this->options['query']['MasterSlaveVServerGroupName'] = $masterSlaveVServerGroupName;

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
