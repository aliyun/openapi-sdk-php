<?php

namespace AlibabaCloud\Skyeye;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Skyeye based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Skyeye
 *
 * @method static V20171201\GetCdnSkyeyeStatusData getCdnSkyeyeStatusData(array $options = [])
 * @method static V20171201\SendAlertContent sendAlertContent(array $options = [])
 */
class SkyeyeV20171201
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Skyeye\\V20171201';
}
