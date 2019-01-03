<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreatePhysicalConnection
 *
 * @method string getAccessPointId()
 * @method string getRedundantPhysicalConnectionId()
 * @method string getPeerLocation()
 * @method string getResourceOwnerId()
 * @method string getPortType()
 * @method string getCircuitCode()
 * @method string getBandwidth()
 * @method string getClientToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getType()
 * @method string getOwnerId()
 * @method string getLineOperator()
 * @method string getName()
 * @method string getUserCidr()
 */
class CreatePhysicalConnection extends RpcRequest
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
    public $action = 'CreatePhysicalConnection';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAccessPointId() instead.
     *
     * @param string $accessPointId
     *
     * @return $this
     */
    public function setAccessPointId($accessPointId)
    {
        return $this->withAccessPointId($accessPointId);
    }

    /**
     * @param string $accessPointId
     *
     * @return $this
     */
    public function withAccessPointId($accessPointId)
    {
        $this->data['AccessPointId'] = $accessPointId;
        $this->options['query']['AccessPointId'] = $accessPointId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRedundantPhysicalConnectionId() instead.
     *
     * @param string $redundantPhysicalConnectionId
     *
     * @return $this
     */
    public function setRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
    {
        return $this->withRedundantPhysicalConnectionId($redundantPhysicalConnectionId);
    }

    /**
     * @param string $redundantPhysicalConnectionId
     *
     * @return $this
     */
    public function withRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
    {
        $this->data['RedundantPhysicalConnectionId'] = $redundantPhysicalConnectionId;
        $this->options['query']['RedundantPhysicalConnectionId'] = $redundantPhysicalConnectionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPeerLocation() instead.
     *
     * @param string $peerLocation
     *
     * @return $this
     */
    public function setPeerLocation($peerLocation)
    {
        return $this->withPeerLocation($peerLocation);
    }

    /**
     * @param string $peerLocation
     *
     * @return $this
     */
    public function withPeerLocation($peerLocation)
    {
        $this->data['PeerLocation'] = $peerLocation;
        $this->options['query']['PeerLocation'] = $peerLocation;

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
     * @deprecated deprecated since version 2.0, Use withPortType() instead.
     *
     * @param string $portType
     *
     * @return $this
     */
    public function setPortType($portType)
    {
        return $this->withPortType($portType);
    }

    /**
     * @param string $portType
     *
     * @return $this
     */
    public function withPortType($portType)
    {
        $this->data['PortType'] = $portType;
        $this->options['query']['PortType'] = $portType;

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
     * @deprecated deprecated since version 2.0, Use withBandwidth() instead.
     *
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setbandwidth($bandwidth)
    {
        return $this->withBandwidth($bandwidth);
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['bandwidth'] = $bandwidth;

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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

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
     * @deprecated deprecated since version 2.0, Use withLineOperator() instead.
     *
     * @param string $lineOperator
     *
     * @return $this
     */
    public function setLineOperator($lineOperator)
    {
        return $this->withLineOperator($lineOperator);
    }

    /**
     * @param string $lineOperator
     *
     * @return $this
     */
    public function withLineOperator($lineOperator)
    {
        $this->data['LineOperator'] = $lineOperator;
        $this->options['query']['LineOperator'] = $lineOperator;

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
