<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDomain addDomain(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 * @method GetAccountInfo getAccountInfo(array $options = [])
 * @method GetResolveCountSummary getResolveCountSummary(array $options = [])
 * @method GetResolveStatistics getResolveStatistics(array $options = [])
 * @method ListDomains listDomains(array $options = [])
 */
class HttpdnsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Httpdns';

    /** @var string */
    public $version = '2016-02-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class AddDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDomains extends Rpc
{
}

class GetAccountInfo extends Rpc
{
}

/**
 * @method string getTimeSpan()
 * @method $this withTimeSpan($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 */
class GetResolveCountSummary extends Rpc
{
}

/**
 * @method string getProtocolName()
 * @method $this withProtocolName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTimeSpan()
 * @method $this withTimeSpan($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 */
class GetResolveStatistics extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDomains extends Rpc
{
}
