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
