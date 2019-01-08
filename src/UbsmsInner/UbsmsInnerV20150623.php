<?php

namespace AlibabaCloud\UbsmsInner;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the UbsmsInner based on the method name as the Api name.
 *
 * @package   AlibabaCloud\UbsmsInner
 *
 * @method static V20150623\DescribeBidRelationByBid describeBidRelationByBid(array $options = [])
 * @method static V20150623\DescribeBidUserBusinessStatus describeBidUserBusinessStatus(array $options = [])
 * @method static V20150623\DescribeBusinessStatus describeBusinessStatus(array $options = [])
 * @method static V20150623\DescribeBusinessStatusOfUser describeBusinessStatusOfUser(array $options = [])
 * @method static V20150623\DescribeUserBusinessStatus describeUserBusinessStatus(array $options = [])
 * @method static V20150623\DescribeUserNetworkType describeUserNetworkType(array $options = [])
 * @method static V20150623\DescribeUserNetworkTypes describeUserNetworkTypes(array $options = [])
 * @method static V20150623\DoPhysicalDeleteResource doPhysicalDeleteResource(array $options = [])
 * @method static V20150623\NotifyUserBusinessCommand notifyUserBusinessCommand(array $options = [])
 * @method static V20150623\SetUserBusinessStatuses setUserBusinessStatuses(array $options = [])
 * @method static V20150623\SetUserSecurityStatus setUserSecurityStatus(array $options = [])
 */
class UbsmsInnerV20150623
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\UbsmsInner\\V20150623';
}
