<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api DescribeUserLiveDomains
 *
 * @method string getFuncFilter()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getFuncId()
 * @method string getPageNumber()
 * @method string getDomainStatus()
 * @method string getDomainSearchType()
 * @method string getCheckDomainShow()
 * @method string getSecurityToken()
 * @method string getPageSize()
 * @method string getRegion()
 */
class DescribeUserLiveDomains extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }
}
