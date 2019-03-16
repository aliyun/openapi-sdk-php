<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method GetResolveCountSummary getResolveCountSummary(array $options = [])
 * @method ListDomains listDomains(array $options = [])
 * @method GetAccountInfo getAccountInfo(array $options = [])
 * @method GetResolveStatistics getResolveStatistics(array $options = [])
 * @method AddDomain addDomain(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 */
class HttpdnsApiResolver
{
    use ApiResolverTrait;
}
