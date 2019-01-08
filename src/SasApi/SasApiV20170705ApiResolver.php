<?php

namespace AlibabaCloud\SasApi;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the SasApi based on the method name as the Api name.
 *
 * @package   AlibabaCloud\SasApi
 *
 * @method V20170705\DescribeAccountProfileByKey describeAccountProfileByKey(array $options = [])
 * @method V20170705\DescribeAccountProfileByKeyWord describeAccountProfileByKeyWord(array $options = [])
 * @method V20170705\DescribeHitRateColumn describeHitRateColumn(array $options = [])
 * @method V20170705\DescribeHitRatePie describeHitRatePie(array $options = [])
 * @method V20170705\DescribePerDateData describePerDateData(array $options = [])
 * @method V20170705\DescribeThreatDistribute describeThreatDistribute(array $options = [])
 * @method V20170705\DescribeThreatTypeLines describeThreatTypeLines(array $options = [])
 * @method V20170705\DescribeTotalAndRateLine describeTotalAndRateLine(array $options = [])
 * @method V20170705\GetAccountProfile getAccountProfile(array $options = [])
 * @method V20170705\GetInstanceCount getInstanceCount(array $options = [])
 * @method V20170705\GetIpHumanClientProbability getIpHumanClientProbability(array $options = [])
 * @method V20170705\GetIpProfile getIpProfile(array $options = [])
 * @method V20170705\GetIpProfileRequest getIpProfileRequest(array $options = [])
 * @method V20170705\GetPhoneProfile getPhoneProfile(array $options = [])
 */
class SasApiV20170705ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\SasApi\\V20170705';
}
