<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Hsm based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Hsm\V20180111
 *
 * @method ConfigNetwork configNetwork(array $options = [])
 * @method ConfigWhiteList configWhiteList(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 */
class HsmApiResolver
{
    use ApiResolverTrait;
}
