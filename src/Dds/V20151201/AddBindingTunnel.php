<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * Api AddBindingTunnel
 *
 * @method string getResourceOwnerId()
 * @method string getRestoreCheckPointTS()
 * @method string getSourceDataFilter()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSecurityToken()
 * @method string getReplicationGroupId()
 * @method string getDestinationInstanceId()
 * @method string getSourceInstanceId()
 * @method string getDestinationDataFilter()
 */
class AddBindingTunnel extends Rpc
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
     * @param string $restoreCheckPointTS
     *
     * @return $this
     */
    public function withRestoreCheckPointTS($restoreCheckPointTS)
    {
        $this->data['RestoreCheckPointTS'] = $restoreCheckPointTS;
        $this->options['query']['RestoreCheckPointTS'] = $restoreCheckPointTS;

        return $this;
    }

    /**
     * @param string $sourceDataFilter
     *
     * @return $this
     */
    public function withSourceDataFilter($sourceDataFilter)
    {
        $this->data['SourceDataFilter'] = $sourceDataFilter;
        $this->options['query']['SourceDataFilter'] = $sourceDataFilter;

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
     * @param string $destinationInstanceId
     *
     * @return $this
     */
    public function withDestinationInstanceId($destinationInstanceId)
    {
        $this->data['DestinationInstanceId'] = $destinationInstanceId;
        $this->options['query']['DestinationInstanceId'] = $destinationInstanceId;

        return $this;
    }

    /**
     * @param string $sourceInstanceId
     *
     * @return $this
     */
    public function withSourceInstanceId($sourceInstanceId)
    {
        $this->data['SourceInstanceId'] = $sourceInstanceId;
        $this->options['query']['SourceInstanceId'] = $sourceInstanceId;

        return $this;
    }

    /**
     * @param string $destinationDataFilter
     *
     * @return $this
     */
    public function withDestinationDataFilter($destinationDataFilter)
    {
        $this->data['DestinationDataFilter'] = $destinationDataFilter;
        $this->options['query']['DestinationDataFilter'] = $destinationDataFilter;

        return $this;
    }
}
