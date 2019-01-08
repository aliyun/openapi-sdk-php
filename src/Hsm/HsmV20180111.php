<?php

namespace AlibabaCloud\Hsm;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Hsm based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Hsm
 *
 * @method static V20180111\ConfigNetwork configNetwork(array $options = [])
 * @method static V20180111\ConfigWhiteList configWhiteList(array $options = [])
 * @method static V20180111\CreateInstance createInstance(array $options = [])
 * @method static V20180111\DescribeInstances describeInstances(array $options = [])
 * @method static V20180111\DescribeRegions describeRegions(array $options = [])
 * @method static V20180111\ModifyInstance modifyInstance(array $options = [])
 * @method static V20180111\ReleaseInstance releaseInstance(array $options = [])
 * @method static V20180111\RenewInstance renewInstance(array $options = [])
 */
class HsmV20180111
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Hsm\\V20180111';
}
