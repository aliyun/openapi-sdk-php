<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * Api ModifyConnectionInfo
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getPort()
 * @method string getOwnerAccount()
 * @method string getMonitorNodeId()
 * @method string getConnectionAddress()
 * @method string getMonitorInstanceId()
 * @method string getOwnerId()
 */
class ModifyConnectionInfo extends Rpc
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
     * @param string $port
     *
     * @return $this
     */
    public function withPort($port)
    {
        $this->data['Port'] = $port;
        $this->options['query']['Port'] = $port;

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
     * @param string $monitorNodeId
     *
     * @return $this
     */
    public function withMonitorNodeId($monitorNodeId)
    {
        $this->data['MonitorNodeId'] = $monitorNodeId;
        $this->options['query']['MonitorNodeId'] = $monitorNodeId;

        return $this;
    }

    /**
     * @param string $connectionAddress
     *
     * @return $this
     */
    public function withConnectionAddress($connectionAddress)
    {
        $this->data['ConnectionAddress'] = $connectionAddress;
        $this->options['query']['ConnectionAddress'] = $connectionAddress;

        return $this;
    }

    /**
     * @param string $monitorInstanceId
     *
     * @return $this
     */
    public function withMonitorInstanceId($monitorInstanceId)
    {
        $this->data['MonitorInstanceId'] = $monitorInstanceId;
        $this->options['query']['MonitorInstanceId'] = $monitorInstanceId;

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
