<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api DescribeGlobalAccelerationInstances
 *
 * @method string getIpAddress()
 * @method string getResourceOwnerId()
 * @method string getBandwidthType()
 * @method string getResourceOwnerAccount()
 * @method string getServiceLocation()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIncludeReservationData()
 * @method string getGlobalAccelerationInstanceId()
 * @method string getServerId()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 * @method string getStatus()
 */
class DescribeGlobalAccelerationInstances extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param string $ipAddress
     *
     * @return $this
     */
    public function withIpAddress($ipAddress)
    {
        $this->data['IpAddress'] = $ipAddress;
        $this->options['query']['IpAddress'] = $ipAddress;

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
     * @param string $bandwidthType
     *
     * @return $this
     */
    public function withBandwidthType($bandwidthType)
    {
        $this->data['BandwidthType'] = $bandwidthType;
        $this->options['query']['BandwidthType'] = $bandwidthType;

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
     * @param string $serviceLocation
     *
     * @return $this
     */
    public function withServiceLocation($serviceLocation)
    {
        $this->data['ServiceLocation'] = $serviceLocation;
        $this->options['query']['ServiceLocation'] = $serviceLocation;

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
     * @param string $includeReservationData
     *
     * @return $this
     */
    public function withIncludeReservationData($includeReservationData)
    {
        $this->data['IncludeReservationData'] = $includeReservationData;
        $this->options['query']['IncludeReservationData'] = $includeReservationData;

        return $this;
    }

    /**
     * @param string $globalAccelerationInstanceId
     *
     * @return $this
     */
    public function withGlobalAccelerationInstanceId($globalAccelerationInstanceId)
    {
        $this->data['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;
        $this->options['query']['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;

        return $this;
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
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
