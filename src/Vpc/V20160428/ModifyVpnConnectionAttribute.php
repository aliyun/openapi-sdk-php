<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api ModifyVpnConnectionAttribute
 *
 * @method string getIkeConfig()
 * @method string getResourceOwnerId()
 * @method string getRemoteSubnet()
 * @method string getEffectImmediately()
 * @method string getAutoConfigRoute()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getIpsecConfig()
 * @method string getOwnerId()
 * @method string getHealthCheckConfig()
 * @method string getLocalSubnet()
 * @method string getVpnConnectionId()
 * @method string getName()
 */
class ModifyVpnConnectionAttribute extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param string $ikeConfig
     *
     * @return $this
     */
    public function withIkeConfig($ikeConfig)
    {
        $this->data['IkeConfig'] = $ikeConfig;
        $this->options['query']['IkeConfig'] = $ikeConfig;

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
     * @param string $remoteSubnet
     *
     * @return $this
     */
    public function withRemoteSubnet($remoteSubnet)
    {
        $this->data['RemoteSubnet'] = $remoteSubnet;
        $this->options['query']['RemoteSubnet'] = $remoteSubnet;

        return $this;
    }

    /**
     * @param string $effectImmediately
     *
     * @return $this
     */
    public function withEffectImmediately($effectImmediately)
    {
        $this->data['EffectImmediately'] = $effectImmediately;
        $this->options['query']['EffectImmediately'] = $effectImmediately;

        return $this;
    }

    /**
     * @param string $autoConfigRoute
     *
     * @return $this
     */
    public function withAutoConfigRoute($autoConfigRoute)
    {
        $this->data['AutoConfigRoute'] = $autoConfigRoute;
        $this->options['query']['AutoConfigRoute'] = $autoConfigRoute;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @param string $ipsecConfig
     *
     * @return $this
     */
    public function withIpsecConfig($ipsecConfig)
    {
        $this->data['IpsecConfig'] = $ipsecConfig;
        $this->options['query']['IpsecConfig'] = $ipsecConfig;

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
     * @param string $healthCheckConfig
     *
     * @return $this
     */
    public function withHealthCheckConfig($healthCheckConfig)
    {
        $this->data['HealthCheckConfig'] = $healthCheckConfig;
        $this->options['query']['HealthCheckConfig'] = $healthCheckConfig;

        return $this;
    }

    /**
     * @param string $localSubnet
     *
     * @return $this
     */
    public function withLocalSubnet($localSubnet)
    {
        $this->data['LocalSubnet'] = $localSubnet;
        $this->options['query']['LocalSubnet'] = $localSubnet;

        return $this;
    }

    /**
     * @param string $vpnConnectionId
     *
     * @return $this
     */
    public function withVpnConnectionId($vpnConnectionId)
    {
        $this->data['VpnConnectionId'] = $vpnConnectionId;
        $this->options['query']['VpnConnectionId'] = $vpnConnectionId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }
}
