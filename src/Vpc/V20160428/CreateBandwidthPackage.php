<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateBandwidthPackage
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getISP()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getZone()
 * @method string getInternetChargeType()
 * @method string getName()
 * @method string getNatGatewayId()
 * @method string getIpCount()
 */
class CreateBandwidthPackage extends RpcRequest
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
    public $action = 'CreateBandwidthPackage';

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
     * @deprecated deprecated since version 2.0, Use withBandwidth() instead.
     *
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
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
        $this->options['query']['Bandwidth'] = $bandwidth;

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
     * @deprecated deprecated since version 2.0, Use withISP() instead.
     *
     * @param string $iSP
     *
     * @return $this
     */
    public function setISP($iSP)
    {
        return $this->withISP($iSP);
    }

    /**
     * @param string $iSP
     *
     * @return $this
     */
    public function withISP($iSP)
    {
        $this->data['ISP'] = $iSP;
        $this->options['query']['ISP'] = $iSP;

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
     * @deprecated deprecated since version 2.0, Use withZone() instead.
     *
     * @param string $zone
     *
     * @return $this
     */
    public function setZone($zone)
    {
        return $this->withZone($zone);
    }

    /**
     * @param string $zone
     *
     * @return $this
     */
    public function withZone($zone)
    {
        $this->data['Zone'] = $zone;
        $this->options['query']['Zone'] = $zone;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInternetChargeType() instead.
     *
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        return $this->withInternetChargeType($internetChargeType);
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function withInternetChargeType($internetChargeType)
    {
        $this->data['InternetChargeType'] = $internetChargeType;
        $this->options['query']['InternetChargeType'] = $internetChargeType;

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
     * @deprecated deprecated since version 2.0, Use withNatGatewayId() instead.
     *
     * @param string $natGatewayId
     *
     * @return $this
     */
    public function setNatGatewayId($natGatewayId)
    {
        return $this->withNatGatewayId($natGatewayId);
    }

    /**
     * @param string $natGatewayId
     *
     * @return $this
     */
    public function withNatGatewayId($natGatewayId)
    {
        $this->data['NatGatewayId'] = $natGatewayId;
        $this->options['query']['NatGatewayId'] = $natGatewayId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIpCount() instead.
     *
     * @param string $ipCount
     *
     * @return $this
     */
    public function setIpCount($ipCount)
    {
        return $this->withIpCount($ipCount);
    }

    /**
     * @param string $ipCount
     *
     * @return $this
     */
    public function withIpCount($ipCount)
    {
        $this->data['IpCount'] = $ipCount;
        $this->options['query']['IpCount'] = $ipCount;

        return $this;
    }
}
