<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api CreateVirtualBorderRouter
 *
 * @method string getResourceOwnerId()
 * @method string getCircuitCode()
 * @method string getVlanId()
 * @method string getClientToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getPeerGatewayIp()
 * @method string getPeeringSubnetMask()
 * @method string getPhysicalConnectionId()
 * @method string getName()
 * @method string getLocalGatewayIp()
 * @method string getUserCidr()
 * @method string getVbrOwnerId()
 */
class CreateVirtualBorderRouter extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param string $physicalConnectionId
     *
     * @return $this
     */
    public function withPhysicalConnectionId($physicalConnectionId)
    {
        $this->data['PhysicalConnectionId'] = $physicalConnectionId;
        $this->options['query']['PhysicalConnectionId'] = $physicalConnectionId;

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

    /**
     * @param string $vbrOwnerId
     *
     * @return $this
     */
    public function withVbrOwnerId($vbrOwnerId)
    {
        $this->data['VbrOwnerId'] = $vbrOwnerId;
        $this->options['query']['VbrOwnerId'] = $vbrOwnerId;

        return $this;
    }
}
