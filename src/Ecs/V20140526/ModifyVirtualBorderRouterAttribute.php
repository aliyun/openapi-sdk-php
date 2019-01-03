<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyVirtualBorderRouterAttribute
 *
 * @method string getResourceOwnerId()
 * @method string getCircuitCode()
 * @method string getVlanId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getVbrId()
 * @method string getOwnerId()
 * @method string getPeerGatewayIp()
 * @method string getPeeringSubnetMask()
 * @method string getName()
 * @method string getLocalGatewayIp()
 * @method string getUserCidr()
 */
class ModifyVirtualBorderRouterAttribute extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'ModifyVirtualBorderRouterAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withCircuitCode() instead.
     *
     * @param string $circuitCode
     *
     * @return $this
     */
    public function setCircuitCode($circuitCode)
    {
        return $this->withCircuitCode($circuitCode);
    }

    /**
     * @param string $circuitCode
     *
     * @return $this
     */
    public function withCircuitCode($circuitCode)
    {
        $this->data['CircuitCode'] = $circuitCode;
        $this->options['query']['CircuitCode'] = $circuitCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVlanId() instead.
     *
     * @param string $vlanId
     *
     * @return $this
     */
    public function setVlanId($vlanId)
    {
        return $this->withVlanId($vlanId);
    }

    /**
     * @param string $vlanId
     *
     * @return $this
     */
    public function withVlanId($vlanId)
    {
        $this->data['VlanId'] = $vlanId;
        $this->options['query']['VlanId'] = $vlanId;

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVbrId() instead.
     *
     * @param string $vbrId
     *
     * @return $this
     */
    public function setVbrId($vbrId)
    {
        return $this->withVbrId($vbrId);
    }

    /**
     * @param string $vbrId
     *
     * @return $this
     */
    public function withVbrId($vbrId)
    {
        $this->data['VbrId'] = $vbrId;
        $this->options['query']['VbrId'] = $vbrId;

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
     * @deprecated deprecated since version 2.0, Use withPeerGatewayIp() instead.
     *
     * @param string $peerGatewayIp
     *
     * @return $this
     */
    public function setPeerGatewayIp($peerGatewayIp)
    {
        return $this->withPeerGatewayIp($peerGatewayIp);
    }

    /**
     * @param string $peerGatewayIp
     *
     * @return $this
     */
    public function withPeerGatewayIp($peerGatewayIp)
    {
        $this->data['PeerGatewayIp'] = $peerGatewayIp;
        $this->options['query']['PeerGatewayIp'] = $peerGatewayIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPeeringSubnetMask() instead.
     *
     * @param string $peeringSubnetMask
     *
     * @return $this
     */
    public function setPeeringSubnetMask($peeringSubnetMask)
    {
        return $this->withPeeringSubnetMask($peeringSubnetMask);
    }

    /**
     * @param string $peeringSubnetMask
     *
     * @return $this
     */
    public function withPeeringSubnetMask($peeringSubnetMask)
    {
        $this->data['PeeringSubnetMask'] = $peeringSubnetMask;
        $this->options['query']['PeeringSubnetMask'] = $peeringSubnetMask;

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

    /**
     * @deprecated deprecated since version 2.0, Use withLocalGatewayIp() instead.
     *
     * @param string $localGatewayIp
     *
     * @return $this
     */
    public function setLocalGatewayIp($localGatewayIp)
    {
        return $this->withLocalGatewayIp($localGatewayIp);
    }

    /**
     * @param string $localGatewayIp
     *
     * @return $this
     */
    public function withLocalGatewayIp($localGatewayIp)
    {
        $this->data['LocalGatewayIp'] = $localGatewayIp;
        $this->options['query']['LocalGatewayIp'] = $localGatewayIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserCidr() instead.
     *
     * @param string $userCidr
     *
     * @return $this
     */
    public function setUserCidr($userCidr)
    {
        return $this->withUserCidr($userCidr);
    }

    /**
     * @param string $userCidr
     *
     * @return $this
     */
    public function withUserCidr($userCidr)
    {
        $this->data['UserCidr'] = $userCidr;
        $this->options['query']['UserCidr'] = $userCidr;

        return $this;
    }
}
