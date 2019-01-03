<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLoadBalancerOld
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
class CreateLoadBalancerOld extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Slb';

    /**
     * @var string
     */
    public $version = '2014-05-15';

    /**
     * @var string
     */
    public $action = 'CreateLoadBalancerOld';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'slb';

    /**
     * @deprecated deprecated since version 2.0, Use getAccessKeyId() instead.
     *
     * @return string
     */
    public function getaccess_key_id()
    {
        return $this->getAccessKeyId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccessKeyId() instead.
     *
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        return $this->withAccessKeyId($access_key_id);
    }

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
     * @deprecated deprecated since version 2.0, Use withAddress() instead.
     *
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        return $this->withAddress($address);
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
     * @deprecated deprecated since version 2.0, Use withIsPublicAddress() instead.
     *
     * @param string $isPublicAddress
     *
     * @return $this
     */
    public function setIsPublicAddress($isPublicAddress)
    {
        return $this->withIsPublicAddress($isPublicAddress);
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
     * @deprecated deprecated since version 2.0, Use withCidrType() instead.
     *
     * @param string $cidrType
     *
     * @return $this
     */
    public function setCidrType($cidrType)
    {
        return $this->withCidrType($cidrType);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerMode() instead.
     *
     * @param string $loadBalancerMode
     *
     * @return $this
     */
    public function setLoadBalancerMode($loadBalancerMode)
    {
        return $this->withLoadBalancerMode($loadBalancerMode);
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
     * @deprecated deprecated since version 2.0, Use withSuName() instead.
     *
     * @param string $suName
     *
     * @return $this
     */
    public function setSuName($suName)
    {
        return $this->withSuName($suName);
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
     * @deprecated deprecated since version 2.0, Use withMasterZoneId() instead.
     *
     * @param string $masterZoneId
     *
     * @return $this
     */
    public function setMasterZoneId($masterZoneId)
    {
        return $this->withMasterZoneId($masterZoneId);
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
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        return $this->withTags($tags);
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
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerName() instead.
     *
     * @param string $loadBalancerName
     *
     * @return $this
     */
    public function setLoadBalancerName($loadBalancerName)
    {
        return $this->withLoadBalancerName($loadBalancerName);
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
     * @deprecated deprecated since version 2.0, Use withEnableVpcVipFlow() instead.
     *
     * @param string $enableVpcVipFlow
     *
     * @return $this
     */
    public function setEnableVpcVipFlow($enableVpcVipFlow)
    {
        return $this->withEnableVpcVipFlow($enableVpcVipFlow);
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
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
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
     * @deprecated deprecated since version 2.0, Use withAddressType() instead.
     *
     * @param string $addressType
     *
     * @return $this
     */
    public function setAddressType($addressType)
    {
        return $this->withAddressType($addressType);
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
     * @deprecated deprecated since version 2.0, Use withSlaveZoneId() instead.
     *
     * @param string $slaveZoneId
     *
     * @return $this
     */
    public function setSlaveZoneId($slaveZoneId)
    {
        return $this->withSlaveZoneId($slaveZoneId);
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
     * @deprecated deprecated since version 2.0, Use withTunnelType() instead.
     *
     * @param string $tunnelType
     *
     * @return $this
     */
    public function setTunnelType($tunnelType)
    {
        return $this->withTunnelType($tunnelType);
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
