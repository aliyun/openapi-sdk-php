<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api QueryAdvancedDomainList
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
class QueryAdvancedDomainList extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
