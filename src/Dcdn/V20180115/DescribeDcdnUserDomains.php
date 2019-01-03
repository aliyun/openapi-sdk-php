<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDcdnUserDomains
 *
 * @method string getFuncFilter()
 * @method string getCheckDomainShow()
 * @method string getResourceGroupId()
 * @method string getSecurityToken()
 * @method string getPageSize()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getFuncId()
 * @method string getPageNumber()
 * @method string getDomainStatus()
 * @method string getDomainSearchType()
 */
class DescribeDcdnUserDomains extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dcdn';

    /**
     * @var string
     */
    public $version = '2018-01-15';

    /**
     * @var string
     */
    public $action = 'DescribeDcdnUserDomains';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dcdn';

    /**
     * @deprecated deprecated since version 2.0, Use withFuncFilter() instead.
     *
     * @param string $funcFilter
     *
     * @return $this
     */
    public function setFuncFilter($funcFilter)
    {
        return $this->withFuncFilter($funcFilter);
    }

    /**
     * @param string $funcFilter
     *
     * @return $this
     */
    public function withFuncFilter($funcFilter)
    {
        $this->data['FuncFilter'] = $funcFilter;
        $this->options['query']['FuncFilter'] = $funcFilter;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCheckDomainShow() instead.
     *
     * @param string $checkDomainShow
     *
     * @return $this
     */
    public function setCheckDomainShow($checkDomainShow)
    {
        return $this->withCheckDomainShow($checkDomainShow);
    }

    /**
     * @param string $checkDomainShow
     *
     * @return $this
     */
    public function withCheckDomainShow($checkDomainShow)
    {
        $this->data['CheckDomainShow'] = $checkDomainShow;
        $this->options['query']['CheckDomainShow'] = $checkDomainShow;

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
     * @deprecated deprecated since version 2.0, Use withFuncId() instead.
     *
     * @param string $funcId
     *
     * @return $this
     */
    public function setFuncId($funcId)
    {
        return $this->withFuncId($funcId);
    }

    /**
     * @param string $funcId
     *
     * @return $this
     */
    public function withFuncId($funcId)
    {
        $this->data['FuncId'] = $funcId;
        $this->options['query']['FuncId'] = $funcId;

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
