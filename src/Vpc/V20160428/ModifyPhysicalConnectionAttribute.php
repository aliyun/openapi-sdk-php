<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyPhysicalConnectionAttribute
 *
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
 * @method string getOwnerId()
 * @method string getLineOperator()
 * @method string getPhysicalConnectionId()
 * @method string getName()
 */
class ModifyPhysicalConnectionAttribute extends RpcRequest
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
    public $action = 'ModifyPhysicalConnectionAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
}
