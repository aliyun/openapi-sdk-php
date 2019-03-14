<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * Api ModifyReplicaMode
 *
 * @method string getDomainMode()
 * @method string getResourceOwnerId()
 * @method string getPrimaryInstanceId()
 * @method string getReplicaMode()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getReplicaId()
 * @method string getOwnerId()
 */
class ModifyReplicaMode extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';

    /**
     * @param string $domainMode
     *
     * @return $this
     */
    public function withDomainMode($domainMode)
    {
        $this->data['DomainMode'] = $domainMode;
        $this->options['query']['DomainMode'] = $domainMode;

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
     * @param string $primaryInstanceId
     *
     * @return $this
     */
    public function withPrimaryInstanceId($primaryInstanceId)
    {
        $this->data['PrimaryInstanceId'] = $primaryInstanceId;
        $this->options['query']['PrimaryInstanceId'] = $primaryInstanceId;

        return $this;
    }

    /**
     * @param string $replicaMode
     *
     * @return $this
     */
    public function withReplicaMode($replicaMode)
    {
        $this->data['ReplicaMode'] = $replicaMode;
        $this->options['query']['ReplicaMode'] = $replicaMode;

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
     * @param string $replicaId
     *
     * @return $this
     */
    public function withReplicaId($replicaId)
    {
        $this->data['ReplicaId'] = $replicaId;
        $this->options['query']['ReplicaId'] = $replicaId;

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
