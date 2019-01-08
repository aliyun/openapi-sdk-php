<?php

namespace AlibabaCloud\Afs;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Afs based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Afs
 *
 * @method V20180112\AnalyzeNvc analyzeNvc(array $options = [])
 * @method V20180112\AuthenticateSig authenticateSig(array $options = [])
 * @method V20180112\ConfigurationStyle configurationStyle(array $options = [])
 * @method V20180112\CreateConfiguration createConfiguration(array $options = [])
 * @method V20180112\DescribeCaptchaDay describeCaptchaDay(array $options = [])
 * @method V20180112\DescribeCaptchaIpCity describeCaptchaIpCity(array $options = [])
 * @method V20180112\DescribeCaptchaMin describeCaptchaMin(array $options = [])
 * @method V20180112\DescribeCaptchaOrder describeCaptchaOrder(array $options = [])
 * @method V20180112\DescribeCaptchaRisk describeCaptchaRisk(array $options = [])
 * @method V20180112\DescribeConfigName describeConfigName(array $options = [])
 * @method V20180112\DescribeEarlyWarning describeEarlyWarning(array $options = [])
 * @method V20180112\DescribeOrderInfo describeOrderInfo(array $options = [])
 * @method V20180112\DescribePersonMachineList describePersonMachineList(array $options = [])
 * @method V20180112\SetEarlyWarning setEarlyWarning(array $options = [])
 * @method V20180112\UpdateConfigName updateConfigName(array $options = [])
 */
class AfsV20180112ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Afs\\V20180112';
}
