<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BindTunnel
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
class BindTunnel extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'BindTunnel';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withReplicationGroupId() instead.
     *
     * @param string $replicationGroupId
     *
     * @return $this
     */
    public function setReplicationGroupId($replicationGroupId)
    {
        return $this->withReplicationGroupId($replicationGroupId);
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
     * @deprecated deprecated since version 2.0, Use withSourceContext() instead.
     *
     * @param string $sourceContext
     *
     * @return $this
     */
    public function setSourceContext($sourceContext)
    {
        return $this->withSourceContext($sourceContext);
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

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationContext() instead.
     *
     * @param string $destinationContext
     *
     * @return $this
     */
    public function setDestinationContext($destinationContext)
    {
        return $this->withDestinationContext($destinationContext);
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
