<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryAdvancedDomainList
 *
 * @method string getProductDomainType()
 * @method string getPageNum()
 * @method string getExcluded()
 * @method string getStartLength()
 * @method string getExcludedSuffix()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getExcludedPrefix()
 * @method string getKeyWord()
 * @method string getProductDomainTypeSort()
 * @method string getEndExpirationDate()
 * @method string getSuffixs()
 * @method string getDomainNameSort()
 * @method string getExpirationDateSort()
 * @method string getStartExpirationDate()
 * @method string getDomainStatus()
 * @method string getDomainGroupId()
 * @method string getKeyWordSuffix()
 * @method string getKeyWordPrefix()
 * @method string getTradeType()
 * @method string getEndRegistrationDate()
 * @method string getForm()
 * @method string getUserClientIp()
 * @method string getRegistrationDateSort()
 * @method string getStartRegistrationDate()
 * @method string getEndLength()
 */
class QueryAdvancedDomainList extends RpcRequest
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
    public $action = 'QueryAdvancedDomainList';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withExcluded() instead.
     *
     * @param string $excluded
     *
     * @return $this
     */
    public function setExcluded($excluded)
    {
        return $this->withExcluded($excluded);
    }

    /**
     * @param string $excluded
     *
     * @return $this
     */
    public function withExcluded($excluded)
    {
        $this->data['Excluded'] = $excluded;
        $this->options['query']['Excluded'] = $excluded;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartLength() instead.
     *
     * @param string $startLength
     *
     * @return $this
     */
    public function setStartLength($startLength)
    {
        return $this->withStartLength($startLength);
    }

    /**
     * @param string $startLength
     *
     * @return $this
     */
    public function withStartLength($startLength)
    {
        $this->data['StartLength'] = $startLength;
        $this->options['query']['StartLength'] = $startLength;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withExcludedSuffix() instead.
     *
     * @param string $excludedSuffix
     *
     * @return $this
     */
    public function setExcludedSuffix($excludedSuffix)
    {
        return $this->withExcludedSuffix($excludedSuffix);
    }

    /**
     * @param string $excludedSuffix
     *
     * @return $this
     */
    public function withExcludedSuffix($excludedSuffix)
    {
        $this->data['ExcludedSuffix'] = $excludedSuffix;
        $this->options['query']['ExcludedSuffix'] = $excludedSuffix;

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
     * @deprecated deprecated since version 2.0, Use withExcludedPrefix() instead.
     *
     * @param string $excludedPrefix
     *
     * @return $this
     */
    public function setExcludedPrefix($excludedPrefix)
    {
        return $this->withExcludedPrefix($excludedPrefix);
    }

    /**
     * @param string $excludedPrefix
     *
     * @return $this
     */
    public function withExcludedPrefix($excludedPrefix)
    {
        $this->data['ExcludedPrefix'] = $excludedPrefix;
        $this->options['query']['ExcludedPrefix'] = $excludedPrefix;

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
     * @deprecated deprecated since version 2.0, Use withProductDomainTypeSort() instead.
     *
     * @param string $productDomainTypeSort
     *
     * @return $this
     */
    public function setProductDomainTypeSort($productDomainTypeSort)
    {
        return $this->withProductDomainTypeSort($productDomainTypeSort);
    }

    /**
     * @param string $productDomainTypeSort
     *
     * @return $this
     */
    public function withProductDomainTypeSort($productDomainTypeSort)
    {
        $this->data['ProductDomainTypeSort'] = $productDomainTypeSort;
        $this->options['query']['ProductDomainTypeSort'] = $productDomainTypeSort;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withSuffixs() instead.
     *
     * @param string $suffixs
     *
     * @return $this
     */
    public function setSuffixs($suffixs)
    {
        return $this->withSuffixs($suffixs);
    }

    /**
     * @param string $suffixs
     *
     * @return $this
     */
    public function withSuffixs($suffixs)
    {
        $this->data['Suffixs'] = $suffixs;
        $this->options['query']['Suffixs'] = $suffixs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainNameSort() instead.
     *
     * @param string $domainNameSort
     *
     * @return $this
     */
    public function setDomainNameSort($domainNameSort)
    {
        return $this->withDomainNameSort($domainNameSort);
    }

    /**
     * @param string $domainNameSort
     *
     * @return $this
     */
    public function withDomainNameSort($domainNameSort)
    {
        $this->data['DomainNameSort'] = $domainNameSort;
        $this->options['query']['DomainNameSort'] = $domainNameSort;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withExpirationDateSort() instead.
     *
     * @param string $expirationDateSort
     *
     * @return $this
     */
    public function setExpirationDateSort($expirationDateSort)
    {
        return $this->withExpirationDateSort($expirationDateSort);
    }

    /**
     * @param string $expirationDateSort
     *
     * @return $this
     */
    public function withExpirationDateSort($expirationDateSort)
    {
        $this->data['ExpirationDateSort'] = $expirationDateSort;
        $this->options['query']['ExpirationDateSort'] = $expirationDateSort;

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
     * @deprecated deprecated since version 2.0, Use withKeyWordSuffix() instead.
     *
     * @param string $keyWordSuffix
     *
     * @return $this
     */
    public function setKeyWordSuffix($keyWordSuffix)
    {
        return $this->withKeyWordSuffix($keyWordSuffix);
    }

    /**
     * @param string $keyWordSuffix
     *
     * @return $this
     */
    public function withKeyWordSuffix($keyWordSuffix)
    {
        $this->data['KeyWordSuffix'] = $keyWordSuffix;
        $this->options['query']['KeyWordSuffix'] = $keyWordSuffix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKeyWordPrefix() instead.
     *
     * @param string $keyWordPrefix
     *
     * @return $this
     */
    public function setKeyWordPrefix($keyWordPrefix)
    {
        return $this->withKeyWordPrefix($keyWordPrefix);
    }

    /**
     * @param string $keyWordPrefix
     *
     * @return $this
     */
    public function withKeyWordPrefix($keyWordPrefix)
    {
        $this->data['KeyWordPrefix'] = $keyWordPrefix;
        $this->options['query']['KeyWordPrefix'] = $keyWordPrefix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTradeType() instead.
     *
     * @param string $tradeType
     *
     * @return $this
     */
    public function setTradeType($tradeType)
    {
        return $this->withTradeType($tradeType);
    }

    /**
     * @param string $tradeType
     *
     * @return $this
     */
    public function withTradeType($tradeType)
    {
        $this->data['TradeType'] = $tradeType;
        $this->options['query']['TradeType'] = $tradeType;

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
     * @deprecated deprecated since version 2.0, Use withForm() instead.
     *
     * @param string $form
     *
     * @return $this
     */
    public function setForm($form)
    {
        return $this->withForm($form);
    }

    /**
     * @param string $form
     *
     * @return $this
     */
    public function withForm($form)
    {
        $this->data['Form'] = $form;
        $this->options['query']['Form'] = $form;

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
     * @deprecated deprecated since version 2.0, Use withRegistrationDateSort() instead.
     *
     * @param string $registrationDateSort
     *
     * @return $this
     */
    public function setRegistrationDateSort($registrationDateSort)
    {
        return $this->withRegistrationDateSort($registrationDateSort);
    }

    /**
     * @param string $registrationDateSort
     *
     * @return $this
     */
    public function withRegistrationDateSort($registrationDateSort)
    {
        $this->data['RegistrationDateSort'] = $registrationDateSort;
        $this->options['query']['RegistrationDateSort'] = $registrationDateSort;

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

    /**
     * @deprecated deprecated since version 2.0, Use withEndLength() instead.
     *
     * @param string $endLength
     *
     * @return $this
     */
    public function setEndLength($endLength)
    {
        return $this->withEndLength($endLength);
    }

    /**
     * @param string $endLength
     *
     * @return $this
     */
    public function withEndLength($endLength)
    {
        $this->data['EndLength'] = $endLength;
        $this->options['query']['EndLength'] = $endLength;

        return $this;
    }
}
