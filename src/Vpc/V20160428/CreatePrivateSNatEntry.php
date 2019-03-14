<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api CreatePrivateSNatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getPrivateNatGatewayId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getSourceCIDR()
 * @method string getOwnerId()
 * @method string getSNatIp()
 */
class CreatePrivateSNatEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

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
     * @param string $sourceCIDR
     *
     * @return $this
     */
    public function withSourceCIDR($sourceCIDR)
    {
        $this->data['SourceCIDR'] = $sourceCIDR;
        $this->options['query']['SourceCIDR'] = $sourceCIDR;

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
     * @param string $sNatIp
     *
     * @return $this
     */
    public function withSNatIp($sNatIp)
    {
        $this->data['SNatIp'] = $sNatIp;
        $this->options['query']['SNatIp'] = $sNatIp;

        return $this;
    }
}
