<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyPrivateDNatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getPrivateNatGatewayId()
 * @method string getDNatIp()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getPrivateDNatEntryId()
 * @method string getOwnerId()
 * @method string getDestinationIp()
 * @method string getDestinationPort()
 * @method string getDNatPort()
 */
class ModifyPrivateDNatEntry extends RpcRequest
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
    public $action = 'ModifyPrivateDNatEntry';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @deprecated deprecated since version 2.0, Use withPrivateNatGatewayId() instead.
     *
     * @param string $privateNatGatewayId
     *
     * @return $this
     */
    public function setPrivateNatGatewayId($privateNatGatewayId)
    {
        return $this->withPrivateNatGatewayId($privateNatGatewayId);
    }

    /**
     * @param string $privateNatGatewayId
     *
     * @return $this
     */
    public function withPrivateNatGatewayId($privateNatGatewayId)
    {
        $this->data['PrivateNatGatewayId'] = $privateNatGatewayId;
        $this->options['query']['PrivateNatGatewayId'] = $privateNatGatewayId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDNatIp() instead.
     *
     * @param string $dNatIp
     *
     * @return $this
     */
    public function setDNatIp($dNatIp)
    {
        return $this->withDNatIp($dNatIp);
    }

    /**
     * @param string $dNatIp
     *
     * @return $this
     */
    public function withDNatIp($dNatIp)
    {
        $this->data['DNatIp'] = $dNatIp;
        $this->options['query']['DNatIp'] = $dNatIp;

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
     * @deprecated deprecated since version 2.0, Use withIpProtocol() instead.
     *
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setIpProtocol($ipProtocol)
    {
        return $this->withIpProtocol($ipProtocol);
    }

    /**
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function withIpProtocol($ipProtocol)
    {
        $this->data['IpProtocol'] = $ipProtocol;
        $this->options['query']['IpProtocol'] = $ipProtocol;

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
     * @deprecated deprecated since version 2.0, Use withPrivateDNatEntryId() instead.
     *
     * @param string $privateDNatEntryId
     *
     * @return $this
     */
    public function setPrivateDNatEntryId($privateDNatEntryId)
    {
        return $this->withPrivateDNatEntryId($privateDNatEntryId);
    }

    /**
     * @param string $privateDNatEntryId
     *
     * @return $this
     */
    public function withPrivateDNatEntryId($privateDNatEntryId)
    {
        $this->data['PrivateDNatEntryId'] = $privateDNatEntryId;
        $this->options['query']['PrivateDNatEntryId'] = $privateDNatEntryId;

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
     * @deprecated deprecated since version 2.0, Use withDestinationIp() instead.
     *
     * @param string $destinationIp
     *
     * @return $this
     */
    public function setDestinationIp($destinationIp)
    {
        return $this->withDestinationIp($destinationIp);
    }

    /**
     * @param string $destinationIp
     *
     * @return $this
     */
    public function withDestinationIp($destinationIp)
    {
        $this->data['DestinationIp'] = $destinationIp;
        $this->options['query']['DestinationIp'] = $destinationIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDestinationPort() instead.
     *
     * @param string $destinationPort
     *
     * @return $this
     */
    public function setDestinationPort($destinationPort)
    {
        return $this->withDestinationPort($destinationPort);
    }

    /**
     * @param string $destinationPort
     *
     * @return $this
     */
    public function withDestinationPort($destinationPort)
    {
        $this->data['DestinationPort'] = $destinationPort;
        $this->options['query']['DestinationPort'] = $destinationPort;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDNatPort() instead.
     *
     * @param string $dNatPort
     *
     * @return $this
     */
    public function setDNatPort($dNatPort)
    {
        return $this->withDNatPort($dNatPort);
    }

    /**
     * @param string $dNatPort
     *
     * @return $this
     */
    public function withDNatPort($dNatPort)
    {
        $this->data['DNatPort'] = $dNatPort;
        $this->options['query']['DNatPort'] = $dNatPort;

        return $this;
    }
}
