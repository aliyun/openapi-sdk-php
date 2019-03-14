<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * Api BindTunnel
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getReplicationGroupId()
 * @method string getSourceContext()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDestinationContext()
 */
class BindTunnel extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';

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
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
     * @param string $replicationGroupId
     *
     * @return $this
     */
    public function withReplicationGroupId($replicationGroupId)
    {
        $this->data['ReplicationGroupId'] = $replicationGroupId;
        $this->options['query']['ReplicationGroupId'] = $replicationGroupId;

        return $this;
    }

    /**
     * @param string $sourceContext
     *
     * @return $this
     */
    public function withSourceContext($sourceContext)
    {
        $this->data['SourceContext'] = $sourceContext;
        $this->options['query']['SourceContext'] = $sourceContext;

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
     * @param string $destinationContext
     *
     * @return $this
     */
    public function withDestinationContext($destinationContext)
    {
        $this->data['DestinationContext'] = $destinationContext;
        $this->options['query']['DestinationContext'] = $destinationContext;

        return $this;
    }
}
