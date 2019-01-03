<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Httpdns based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Httpdns\V20160201
 *
 * @method static AddDomain addDomain(array $options = [])
 * @method static DeleteDomain deleteDomain(array $options = [])
 * @method static DescribeDomains describeDomains(array $options = [])
 * @method static GetAccountInfo getAccountInfo(array $options = [])
 * @method static GetResolveCountSummary getResolveCountSummary(array $options = [])
 * @method static GetResolveStatistics getResolveStatistics(array $options = [])
 * @method static HttpdnsApiResolver httpdnsApiResolver(array $options = [])
 * @method static ListDomains listDomains(array $options = [])
 */
class Httpdns
{
    use ApiResolverTrait;
}
