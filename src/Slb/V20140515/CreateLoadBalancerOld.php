<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * Api CreateLoadBalancerOld
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getAddress()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getIsPublicAddress()
 * @method string getCidrType()
 * @method string getLoadBalancerMode()
 * @method string getOwnerId()
 * @method string getSuName()
 * @method string getMasterZoneId()
 * @method string getTags()
 * @method string getVSwitchId()
 * @method string getLoadBalancerName()
 * @method string getEnableVpcVipFlow()
 * @method string getInternetChargeType()
 * @method string getVpcId()
 * @method string getAddressType()
 * @method string getSlaveZoneId()
 * @method string getTunnelType()
 */
class CreateLoadBalancerOld extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

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
     * @param string $address
     *
     * @return $this
     */
    public function withAddress($address)
    {
        $this->data['Address'] = $address;
        $this->options['query']['Address'] = $address;

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
     * @param string $isPublicAddress
     *
     * @return $this
     */
    public function withIsPublicAddress($isPublicAddress)
    {
        $this->data['IsPublicAddress'] = $isPublicAddress;
        $this->options['query']['IsPublicAddress'] = $isPublicAddress;

        return $this;
    }

    /**
     * @param string $cidrType
     *
     * @return $this
     */
    public function withCidrType($cidrType)
    {
        $this->data['CidrType'] = $cidrType;
        $this->options['query']['CidrType'] = $cidrType;

        return $this;
    }

    /**
     * @param string $loadBalancerMode
     *
     * @return $this
     */
    public function withLoadBalancerMode($loadBalancerMode)
    {
        $this->data['LoadBalancerMode'] = $loadBalancerMode;
        $this->options['query']['LoadBalancerMode'] = $loadBalancerMode;

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
     * @param string $suName
     *
     * @return $this
     */
    public function withSuName($suName)
    {
        $this->data['SuName'] = $suName;
        $this->options['query']['SuName'] = $suName;

        return $this;
    }

    /**
     * @param string $masterZoneId
     *
     * @return $this
     */
    public function withMasterZoneId($masterZoneId)
    {
        $this->data['MasterZoneId'] = $masterZoneId;
        $this->options['query']['MasterZoneId'] = $masterZoneId;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $loadBalancerName
     *
     * @return $this
     */
    public function withLoadBalancerName($loadBalancerName)
    {
        $this->data['LoadBalancerName'] = $loadBalancerName;
        $this->options['query']['LoadBalancerName'] = $loadBalancerName;

        return $this;
    }

    /**
     * @param string $enableVpcVipFlow
     *
     * @return $this
     */
    public function withEnableVpcVipFlow($enableVpcVipFlow)
    {
        $this->data['EnableVpcVipFlow'] = $enableVpcVipFlow;
        $this->options['query']['EnableVpcVipFlow'] = $enableVpcVipFlow;

        return $this;
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
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $addressType
     *
     * @return $this
     */
    public function withAddressType($addressType)
    {
        $this->data['AddressType'] = $addressType;
        $this->options['query']['AddressType'] = $addressType;

        return $this;
    }

    /**
     * @param string $slaveZoneId
     *
     * @return $this
     */
    public function withSlaveZoneId($slaveZoneId)
    {
        $this->data['SlaveZoneId'] = $slaveZoneId;
        $this->options['query']['SlaveZoneId'] = $slaveZoneId;

        return $this;
    }

    /**
     * @param string $tunnelType
     *
     * @return $this
     */
    public function withTunnelType($tunnelType)
    {
        $this->data['TunnelType'] = $tunnelType;
        $this->options['query']['TunnelType'] = $tunnelType;

        return $this;
    }
}
