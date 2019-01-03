<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLoadBalancersPro
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getNetworkType()
 * @method string getMasterZoneId()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getLoadBalancerName()
 * @method string getPageSize()
 * @method string getAddressType()
 * @method string getSlaveZoneId()
 * @method string getAddress()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getServerId()
 * @method string getTags()
 * @method string getServerIntranetAddress()
 * @method string getVSwitchId()
 * @method string getLoadBalancerId()
 * @method string getInternetChargeType()
 * @method string getVpcId()
 * @method string getPayType()
 * @method string getFilterFuzzyMode()
 */
class DescribeLoadBalancersPro extends RpcRequest
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
    public $action = 'DescribeLoadBalancersPro';

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
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        return $this->withNetworkType($networkType);
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceGroupId() instead.
     *
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        return $this->withResourceGroupId($resourceGroupId);
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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
     * @deprecated deprecated since version 2.0, Use withServerId() instead.
     *
     * @param string $serverId
     *
     * @return $this
     */
    public function setServerId($serverId)
    {
        return $this->withServerId($serverId);
    }

    /**
     * @param string $serverId
     *
     * @return $this
     */
    public function withServerId($serverId)
    {
        $this->data['ServerId'] = $serverId;
        $this->options['query']['ServerId'] = $serverId;

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
     * @deprecated deprecated since version 2.0, Use withServerIntranetAddress() instead.
     *
     * @param string $serverIntranetAddress
     *
     * @return $this
     */
    public function setServerIntranetAddress($serverIntranetAddress)
    {
        return $this->withServerIntranetAddress($serverIntranetAddress);
    }

    /**
     * @param string $serverIntranetAddress
     *
     * @return $this
     */
    public function withServerIntranetAddress($serverIntranetAddress)
    {
        $this->data['ServerIntranetAddress'] = $serverIntranetAddress;
        $this->options['query']['ServerIntranetAddress'] = $serverIntranetAddress;

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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerId() instead.
     *
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        return $this->withLoadBalancerId($loadBalancerId);
    }

    /**
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function withLoadBalancerId($loadBalancerId)
    {
        $this->data['LoadBalancerId'] = $loadBalancerId;
        $this->options['query']['LoadBalancerId'] = $loadBalancerId;

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
     * @deprecated deprecated since version 2.0, Use withPayType() instead.
     *
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        return $this->withPayType($payType);
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function withPayType($payType)
    {
        $this->data['PayType'] = $payType;
        $this->options['query']['PayType'] = $payType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilterFuzzyMode() instead.
     *
     * @param string $filterFuzzyMode
     *
     * @return $this
     */
    public function setFilterFuzzyMode($filterFuzzyMode)
    {
        return $this->withFilterFuzzyMode($filterFuzzyMode);
    }

    /**
     * @param string $filterFuzzyMode
     *
     * @return $this
     */
    public function withFilterFuzzyMode($filterFuzzyMode)
    {
        $this->data['FilterFuzzyMode'] = $filterFuzzyMode;
        $this->options['query']['FilterFuzzyMode'] = $filterFuzzyMode;

        return $this;
    }
}
