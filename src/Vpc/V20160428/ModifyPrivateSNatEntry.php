<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyPrivateSNatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getPrivateNatGatewayId()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getSourceCIDR()
 * @method string getOwnerId()
 * @method string getSNatIp()
 * @method string getPrivateSNatEntryId()
 */
class ModifyPrivateSNatEntry extends RpcRequest
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
    public $action = 'ModifyPrivateSNatEntry';

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
     * @deprecated deprecated since version 2.0, Use withSourceCIDR() instead.
     *
     * @param string $sourceCIDR
     *
     * @return $this
     */
    public function setSourceCIDR($sourceCIDR)
    {
        return $this->withSourceCIDR($sourceCIDR);
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
     * @deprecated deprecated since version 2.0, Use withSNatIp() instead.
     *
     * @param string $sNatIp
     *
     * @return $this
     */
    public function setSNatIp($sNatIp)
    {
        return $this->withSNatIp($sNatIp);
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

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateSNatEntryId() instead.
     *
     * @param string $privateSNatEntryId
     *
     * @return $this
     */
    public function setPrivateSNatEntryId($privateSNatEntryId)
    {
        return $this->withPrivateSNatEntryId($privateSNatEntryId);
    }

    /**
     * @param string $privateSNatEntryId
     *
     * @return $this
     */
    public function withPrivateSNatEntryId($privateSNatEntryId)
    {
        $this->data['PrivateSNatEntryId'] = $privateSNatEntryId;
        $this->options['query']['PrivateSNatEntryId'] = $privateSNatEntryId;

        return $this;
    }
}
