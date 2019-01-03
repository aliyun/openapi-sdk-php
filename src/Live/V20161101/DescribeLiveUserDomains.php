<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLiveUserDomains
 *
 * @method string getSecurityToken()
 * @method string getPageSize()
 * @method string getDomainName()
 * @method string getRegionName()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getDomainStatus()
 * @method string getLiveDomainType()
 * @method string getDomainSearchType()
 */
class DescribeLiveUserDomains extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'DescribeLiveUserDomains';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegionName() instead.
     *
     * @param string $regionName
     *
     * @return $this
     */
    public function setRegionName($regionName)
    {
        return $this->withRegionName($regionName);
    }

    /**
     * @param string $regionName
     *
     * @return $this
     */
    public function withRegionName($regionName)
    {
        $this->data['RegionName'] = $regionName;
        $this->options['query']['RegionName'] = $regionName;

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
     * @deprecated deprecated since version 2.0, Use withDomainStatus() instead.
     *
     * @param string $domainStatus
     *
     * @return $this
     */
    public function setDomainStatus($domainStatus)
    {
        return $this->withDomainStatus($domainStatus);
    }

    /**
     * @param string $domainStatus
     *
     * @return $this
     */
    public function withDomainStatus($domainStatus)
    {
        $this->data['DomainStatus'] = $domainStatus;
        $this->options['query']['DomainStatus'] = $domainStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLiveDomainType() instead.
     *
     * @param string $liveDomainType
     *
     * @return $this
     */
    public function setLiveDomainType($liveDomainType)
    {
        return $this->withLiveDomainType($liveDomainType);
    }

    /**
     * @param string $liveDomainType
     *
     * @return $this
     */
    public function withLiveDomainType($liveDomainType)
    {
        $this->data['LiveDomainType'] = $liveDomainType;
        $this->options['query']['LiveDomainType'] = $liveDomainType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainSearchType() instead.
     *
     * @param string $domainSearchType
     *
     * @return $this
     */
    public function setDomainSearchType($domainSearchType)
    {
        return $this->withDomainSearchType($domainSearchType);
    }

    /**
     * @param string $domainSearchType
     *
     * @return $this
     */
    public function withDomainSearchType($domainSearchType)
    {
        $this->data['DomainSearchType'] = $domainSearchType;
        $this->options['query']['DomainSearchType'] = $domainSearchType;

        return $this;
    }
}
