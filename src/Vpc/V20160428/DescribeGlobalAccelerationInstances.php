<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGlobalAccelerationInstances
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
class DescribeGlobalAccelerationInstances extends RpcRequest
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
    public $action = 'DescribeGlobalAccelerationInstances';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @deprecated deprecated since version 2.0, Use withIpAddress() instead.
     *
     * @param string $ipAddress
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        return $this->withIpAddress($ipAddress);
    }

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
     * @deprecated deprecated since version 2.0, Use withBandwidthType() instead.
     *
     * @param string $bandwidthType
     *
     * @return $this
     */
    public function setBandwidthType($bandwidthType)
    {
        return $this->withBandwidthType($bandwidthType);
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
     * @deprecated deprecated since version 2.0, Use withServiceLocation() instead.
     *
     * @param string $serviceLocation
     *
     * @return $this
     */
    public function setServiceLocation($serviceLocation)
    {
        return $this->withServiceLocation($serviceLocation);
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
     * @deprecated deprecated since version 2.0, Use withIncludeReservationData() instead.
     *
     * @param string $includeReservationData
     *
     * @return $this
     */
    public function setIncludeReservationData($includeReservationData)
    {
        return $this->withIncludeReservationData($includeReservationData);
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
     * @deprecated deprecated since version 2.0, Use withGlobalAccelerationInstanceId() instead.
     *
     * @param string $globalAccelerationInstanceId
     *
     * @return $this
     */
    public function setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
    {
        return $this->withGlobalAccelerationInstanceId($globalAccelerationInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
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
