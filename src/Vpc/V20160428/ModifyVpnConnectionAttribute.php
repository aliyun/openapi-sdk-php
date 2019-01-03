<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyVpnConnectionAttribute
 *
 * @method string getIkeConfig()
 * @method string getResourceOwnerId()
 * @method string getRemoteSubnet()
 * @method string getEffectImmediately()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getIpsecConfig()
 * @method string getOwnerId()
 * @method string getLocalSubnet()
 * @method string getVpnConnectionId()
 * @method string getName()
 */
class ModifyVpnConnectionAttribute extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'ModifyVpnConnectionAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @deprecated deprecated since version 2.0, Use withIkeConfig() instead.
     *
     * @param string $ikeConfig
     *
     * @return $this
     */
    public function setIkeConfig($ikeConfig)
    {
        return $this->withIkeConfig($ikeConfig);
    }

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
     * @deprecated deprecated since version 2.0, Use withRemoteSubnet() instead.
     *
     * @param string $remoteSubnet
     *
     * @return $this
     */
    public function setRemoteSubnet($remoteSubnet)
    {
        return $this->withRemoteSubnet($remoteSubnet);
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
     * @deprecated deprecated since version 2.0, Use withEffectImmediately() instead.
     *
     * @param string $effectImmediately
     *
     * @return $this
     */
    public function setEffectImmediately($effectImmediately)
    {
        return $this->withEffectImmediately($effectImmediately);
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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withIpsecConfig() instead.
     *
     * @param string $ipsecConfig
     *
     * @return $this
     */
    public function setIpsecConfig($ipsecConfig)
    {
        return $this->withIpsecConfig($ipsecConfig);
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
     * @deprecated deprecated since version 2.0, Use withLocalSubnet() instead.
     *
     * @param string $localSubnet
     *
     * @return $this
     */
    public function setLocalSubnet($localSubnet)
    {
        return $this->withLocalSubnet($localSubnet);
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
     * @deprecated deprecated since version 2.0, Use withVpnConnectionId() instead.
     *
     * @param string $vpnConnectionId
     *
     * @return $this
     */
    public function setVpnConnectionId($vpnConnectionId)
    {
        return $this->withVpnConnectionId($vpnConnectionId);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
