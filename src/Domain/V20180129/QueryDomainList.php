<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getOrderKeyType()
 * @method $this withOrderKeyType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderByType()
 * @method $this withOrderByType($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 */
class QueryDomainList extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
