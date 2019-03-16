<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ConfigNetwork configNetwork(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method ConfigWhiteList configWhiteList(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 */
class HsmApiResolver
{
    use ApiResolverTrait;
}
