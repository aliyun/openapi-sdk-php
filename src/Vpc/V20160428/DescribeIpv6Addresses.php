<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api DescribeIpv6Addresses
 *
 * @method string getResourceOwnerId()
 * @method string getIpv6InternetBandwidthId()
 * @method string getNetworkType()
 * @method string getPageNumber()
 * @method string getAssociatedInstanceType()
 * @method string getPageSize()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getIpv6AddressId()
 * @method string getVpcId()
 * @method string getName()
 * @method string getIpv6Address()
 * @method string getAssociatedInstanceId()
 */
class DescribeIpv6Addresses extends Rpc
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
     * @param string $ipv6InternetBandwidthId
     *
     * @return $this
     */
    public function withIpv6InternetBandwidthId($ipv6InternetBandwidthId)
    {
        $this->data['Ipv6InternetBandwidthId'] = $ipv6InternetBandwidthId;
        $this->options['query']['Ipv6InternetBandwidthId'] = $ipv6InternetBandwidthId;

        return $this;
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
     * @param string $associatedInstanceType
     *
     * @return $this
     */
    public function withAssociatedInstanceType($associatedInstanceType)
    {
        $this->data['AssociatedInstanceType'] = $associatedInstanceType;
        $this->options['query']['AssociatedInstanceType'] = $associatedInstanceType;

        return $this;
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
     * @param string $ipv6AddressId
     *
     * @return $this
     */
    public function withIpv6AddressId($ipv6AddressId)
    {
        $this->data['Ipv6AddressId'] = $ipv6AddressId;
        $this->options['query']['Ipv6AddressId'] = $ipv6AddressId;

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
     * @param string $ipv6Address
     *
     * @return $this
     */
    public function withIpv6Address($ipv6Address)
    {
        $this->data['Ipv6Address'] = $ipv6Address;
        $this->options['query']['Ipv6Address'] = $ipv6Address;

        return $this;
    }

    /**
     * @param string $associatedInstanceId
     *
     * @return $this
     */
    public function withAssociatedInstanceId($associatedInstanceId)
    {
        $this->data['AssociatedInstanceId'] = $associatedInstanceId;
        $this->options['query']['AssociatedInstanceId'] = $associatedInstanceId;

        return $this;
    }
}
