<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getExcluded()
 * @method $this withExcluded($value)
 * @method string getStartLength()
 * @method $this withStartLength($value)
 * @method string getExcludedSuffix()
 * @method $this withExcludedSuffix($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExcludedPrefix()
 * @method $this withExcludedPrefix($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getProductDomainTypeSort()
 * @method $this withProductDomainTypeSort($value)
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getSuffixs()
 * @method $this withSuffixs($value)
 * @method string getDomainNameSort()
 * @method $this withDomainNameSort($value)
 * @method string getExpirationDateSort()
 * @method $this withExpirationDateSort($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getKeyWordSuffix()
 * @method $this withKeyWordSuffix($value)
 * @method string getKeyWordPrefix()
 * @method $this withKeyWordPrefix($value)
 * @method string getTradeType()
 * @method $this withTradeType($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrationDateSort()
 * @method $this withRegistrationDateSort($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 * @method string getEndLength()
 * @method $this withEndLength($value)
 */
class QueryAdvancedDomainList extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
