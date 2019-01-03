<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeIPv6Translators
 *
 * @method string getBusinessStatus()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAllocateIpv6Addr()
 * @method string getOwnerAccount()
 * @method string getAllocateIpv4Addr()
 * @method string getOwnerId()
 * @method string getSpec()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 * @method string getIpv6TranslatorId()
 * @method string getPayType()
 * @method string getStatus()
 */
class DescribeIPv6Translators extends RpcRequest
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
    public $action = 'DescribeIPv6Translators';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @deprecated deprecated since version 2.0, Use withBusinessStatus() instead.
     *
     * @param string $businessStatus
     *
     * @return $this
     */
    public function setBusinessStatus($businessStatus)
    {
        return $this->withBusinessStatus($businessStatus);
    }

    /**
     * @param string $businessStatus
     *
     * @return $this
     */
    public function withBusinessStatus($businessStatus)
    {
        $this->data['BusinessStatus'] = $businessStatus;
        $this->options['query']['BusinessStatus'] = $businessStatus;

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
     * @deprecated deprecated since version 2.0, Use withAllocateIpv6Addr() instead.
     *
     * @param string $allocateIpv6Addr
     *
     * @return $this
     */
    public function setAllocateIpv6Addr($allocateIpv6Addr)
    {
        return $this->withAllocateIpv6Addr($allocateIpv6Addr);
    }

    /**
     * @param string $allocateIpv6Addr
     *
     * @return $this
     */
    public function withAllocateIpv6Addr($allocateIpv6Addr)
    {
        $this->data['AllocateIpv6Addr'] = $allocateIpv6Addr;
        $this->options['query']['AllocateIpv6Addr'] = $allocateIpv6Addr;

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
     * @deprecated deprecated since version 2.0, Use withAllocateIpv4Addr() instead.
     *
     * @param string $allocateIpv4Addr
     *
     * @return $this
     */
    public function setAllocateIpv4Addr($allocateIpv4Addr)
    {
        return $this->withAllocateIpv4Addr($allocateIpv4Addr);
    }

    /**
     * @param string $allocateIpv4Addr
     *
     * @return $this
     */
    public function withAllocateIpv4Addr($allocateIpv4Addr)
    {
        $this->data['AllocateIpv4Addr'] = $allocateIpv4Addr;
        $this->options['query']['AllocateIpv4Addr'] = $allocateIpv4Addr;

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
     * @deprecated deprecated since version 2.0, Use withSpec() instead.
     *
     * @param string $spec
     *
     * @return $this
     */
    public function setSpec($spec)
    {
        return $this->withSpec($spec);
    }

    /**
     * @param string $spec
     *
     * @return $this
     */
    public function withSpec($spec)
    {
        $this->data['Spec'] = $spec;
        $this->options['query']['Spec'] = $spec;

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
     * @deprecated deprecated since version 2.0, Use withIpv6TranslatorId() instead.
     *
     * @param string $ipv6TranslatorId
     *
     * @return $this
     */
    public function setIpv6TranslatorId($ipv6TranslatorId)
    {
        return $this->withIpv6TranslatorId($ipv6TranslatorId);
    }

    /**
     * @param string $ipv6TranslatorId
     *
     * @return $this
     */
    public function withIpv6TranslatorId($ipv6TranslatorId)
    {
        $this->data['Ipv6TranslatorId'] = $ipv6TranslatorId;
        $this->options['query']['Ipv6TranslatorId'] = $ipv6TranslatorId;

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
