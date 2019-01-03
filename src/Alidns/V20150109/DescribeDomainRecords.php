<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDomainRecords
 *
 * @method string getValueKeyWord()
 * @method string getGroupId()
 * @method string getDomainName()
 * @method string getOrderBy()
 * @method string getPageNumber()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getSearchMode()
 * @method string getLang()
 * @method string getKeyWord()
 * @method string getTypeKeyWord()
 * @method string getRRKeyWord()
 * @method string getDirection()
 */
class DescribeDomainRecords extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Alidns';

    /**
     * @var string
     */
    public $version = '2015-01-09';

    /**
     * @var string
     */
    public $action = 'DescribeDomainRecords';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withValueKeyWord() instead.
     *
     * @param string $valueKeyWord
     *
     * @return $this
     */
    public function setValueKeyWord($valueKeyWord)
    {
        return $this->withValueKeyWord($valueKeyWord);
    }

    /**
     * @param string $valueKeyWord
     *
     * @return $this
     */
    public function withValueKeyWord($valueKeyWord)
    {
        $this->data['ValueKeyWord'] = $valueKeyWord;
        $this->options['query']['ValueKeyWord'] = $valueKeyWord;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

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
     * @deprecated deprecated since version 2.0, Use withOrderBy() instead.
     *
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        return $this->withOrderBy($orderBy);
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function withOrderBy($orderBy)
    {
        $this->data['OrderBy'] = $orderBy;
        $this->options['query']['OrderBy'] = $orderBy;

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
     * @deprecated deprecated since version 2.0, Use withSearchMode() instead.
     *
     * @param string $searchMode
     *
     * @return $this
     */
    public function setSearchMode($searchMode)
    {
        return $this->withSearchMode($searchMode);
    }

    /**
     * @param string $searchMode
     *
     * @return $this
     */
    public function withSearchMode($searchMode)
    {
        $this->data['SearchMode'] = $searchMode;
        $this->options['query']['SearchMode'] = $searchMode;

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
     * @deprecated deprecated since version 2.0, Use withKeyWord() instead.
     *
     * @param string $keyWord
     *
     * @return $this
     */
    public function setKeyWord($keyWord)
    {
        return $this->withKeyWord($keyWord);
    }

    /**
     * @param string $keyWord
     *
     * @return $this
     */
    public function withKeyWord($keyWord)
    {
        $this->data['KeyWord'] = $keyWord;
        $this->options['query']['KeyWord'] = $keyWord;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTypeKeyWord() instead.
     *
     * @param string $typeKeyWord
     *
     * @return $this
     */
    public function setTypeKeyWord($typeKeyWord)
    {
        return $this->withTypeKeyWord($typeKeyWord);
    }

    /**
     * @param string $typeKeyWord
     *
     * @return $this
     */
    public function withTypeKeyWord($typeKeyWord)
    {
        $this->data['TypeKeyWord'] = $typeKeyWord;
        $this->options['query']['TypeKeyWord'] = $typeKeyWord;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRRKeyWord() instead.
     *
     * @param string $rRKeyWord
     *
     * @return $this
     */
    public function setRRKeyWord($rRKeyWord)
    {
        return $this->withRRKeyWord($rRKeyWord);
    }

    /**
     * @param string $rRKeyWord
     *
     * @return $this
     */
    public function withRRKeyWord($rRKeyWord)
    {
        $this->data['RRKeyWord'] = $rRKeyWord;
        $this->options['query']['RRKeyWord'] = $rRKeyWord;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDirection() instead.
     *
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        return $this->withDirection($direction);
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function withDirection($direction)
    {
        $this->data['Direction'] = $direction;
        $this->options['query']['Direction'] = $direction;

        return $this;
    }
}
