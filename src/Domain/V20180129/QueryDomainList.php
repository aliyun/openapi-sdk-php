<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDomainList
 *
 * @method string getEndExpirationDate()
 * @method string getProductDomainType()
 * @method string getOrderKeyType()
 * @method string getDomainName()
 * @method string getStartExpirationDate()
 * @method string getPageNum()
 * @method string getOrderByType()
 * @method string getDomainGroupId()
 * @method string getEndRegistrationDate()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getQueryType()
 * @method string getStartRegistrationDate()
 */
class QueryDomainList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'QueryDomainList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEndExpirationDate() instead.
     *
     * @param string $endExpirationDate
     *
     * @return $this
     */
    public function setEndExpirationDate($endExpirationDate)
    {
        return $this->withEndExpirationDate($endExpirationDate);
    }

    /**
     * @param string $endExpirationDate
     *
     * @return $this
     */
    public function withEndExpirationDate($endExpirationDate)
    {
        $this->data['EndExpirationDate'] = $endExpirationDate;
        $this->options['query']['EndExpirationDate'] = $endExpirationDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductDomainType() instead.
     *
     * @param string $productDomainType
     *
     * @return $this
     */
    public function setProductDomainType($productDomainType)
    {
        return $this->withProductDomainType($productDomainType);
    }

    /**
     * @param string $productDomainType
     *
     * @return $this
     */
    public function withProductDomainType($productDomainType)
    {
        $this->data['ProductDomainType'] = $productDomainType;
        $this->options['query']['ProductDomainType'] = $productDomainType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderKeyType() instead.
     *
     * @param string $orderKeyType
     *
     * @return $this
     */
    public function setOrderKeyType($orderKeyType)
    {
        return $this->withOrderKeyType($orderKeyType);
    }

    /**
     * @param string $orderKeyType
     *
     * @return $this
     */
    public function withOrderKeyType($orderKeyType)
    {
        $this->data['OrderKeyType'] = $orderKeyType;
        $this->options['query']['OrderKeyType'] = $orderKeyType;

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
     * @deprecated deprecated since version 2.0, Use withStartExpirationDate() instead.
     *
     * @param string $startExpirationDate
     *
     * @return $this
     */
    public function setStartExpirationDate($startExpirationDate)
    {
        return $this->withStartExpirationDate($startExpirationDate);
    }

    /**
     * @param string $startExpirationDate
     *
     * @return $this
     */
    public function withStartExpirationDate($startExpirationDate)
    {
        $this->data['StartExpirationDate'] = $startExpirationDate;
        $this->options['query']['StartExpirationDate'] = $startExpirationDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderByType() instead.
     *
     * @param string $orderByType
     *
     * @return $this
     */
    public function setOrderByType($orderByType)
    {
        return $this->withOrderByType($orderByType);
    }

    /**
     * @param string $orderByType
     *
     * @return $this
     */
    public function withOrderByType($orderByType)
    {
        $this->data['OrderByType'] = $orderByType;
        $this->options['query']['OrderByType'] = $orderByType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainGroupId() instead.
     *
     * @param string $domainGroupId
     *
     * @return $this
     */
    public function setDomainGroupId($domainGroupId)
    {
        return $this->withDomainGroupId($domainGroupId);
    }

    /**
     * @param string $domainGroupId
     *
     * @return $this
     */
    public function withDomainGroupId($domainGroupId)
    {
        $this->data['DomainGroupId'] = $domainGroupId;
        $this->options['query']['DomainGroupId'] = $domainGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndRegistrationDate() instead.
     *
     * @param string $endRegistrationDate
     *
     * @return $this
     */
    public function setEndRegistrationDate($endRegistrationDate)
    {
        return $this->withEndRegistrationDate($endRegistrationDate);
    }

    /**
     * @param string $endRegistrationDate
     *
     * @return $this
     */
    public function withEndRegistrationDate($endRegistrationDate)
    {
        $this->data['EndRegistrationDate'] = $endRegistrationDate;
        $this->options['query']['EndRegistrationDate'] = $endRegistrationDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withQueryType() instead.
     *
     * @param string $queryType
     *
     * @return $this
     */
    public function setQueryType($queryType)
    {
        return $this->withQueryType($queryType);
    }

    /**
     * @param string $queryType
     *
     * @return $this
     */
    public function withQueryType($queryType)
    {
        $this->data['QueryType'] = $queryType;
        $this->options['query']['QueryType'] = $queryType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartRegistrationDate() instead.
     *
     * @param string $startRegistrationDate
     *
     * @return $this
     */
    public function setStartRegistrationDate($startRegistrationDate)
    {
        return $this->withStartRegistrationDate($startRegistrationDate);
    }

    /**
     * @param string $startRegistrationDate
     *
     * @return $this
     */
    public function withStartRegistrationDate($startRegistrationDate)
    {
        $this->data['StartRegistrationDate'] = $startRegistrationDate;
        $this->options['query']['StartRegistrationDate'] = $startRegistrationDate;

        return $this;
    }
}
