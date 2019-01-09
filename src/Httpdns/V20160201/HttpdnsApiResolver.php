<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Httpdns based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Httpdns\V20160201
 *
 * @method AddDomain addDomain(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 * @method GetAccountInfo getAccountInfo(array $options = [])
 * @method GetResolveCountSummary getResolveCountSummary(array $options = [])
 * @method GetResolveStatistics getResolveStatistics(array $options = [])
 * @method ListDomains listDomains(array $options = [])
 */
class HttpdnsApiResolver
{
    use ApiResolverTrait;
}
