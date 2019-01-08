<?php

namespace AlibabaCloud\Httpdns;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Httpdns based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Httpdns
 *
 * @method static V20160201\AddDomain addDomain(array $options = [])
 * @method static V20160201\DeleteDomain deleteDomain(array $options = [])
 * @method static V20160201\DescribeDomains describeDomains(array $options = [])
 * @method static V20160201\GetAccountInfo getAccountInfo(array $options = [])
 * @method static V20160201\GetResolveCountSummary getResolveCountSummary(array $options = [])
 * @method static V20160201\GetResolveStatistics getResolveStatistics(array $options = [])
 * @method static V20160201\ListDomains listDomains(array $options = [])
 */
class HttpdnsV20160201
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Httpdns\\V20160201';
}
