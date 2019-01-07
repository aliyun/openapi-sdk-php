<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Hsm based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Hsm\V20180111
 *
 * @method static ConfigNetwork configNetwork(array $options = [])
 * @method static ConfigWhiteList configWhiteList(array $options = [])
 * @method static CreateInstance createInstance(array $options = [])
 * @method static DescribeInstances describeInstances(array $options = [])
 * @method static DescribeRegions describeRegions(array $options = [])
 * @method static HsmApiResolver hsmApiResolver(array $options = [])
 * @method static ModifyInstance modifyInstance(array $options = [])
 * @method static ReleaseInstance releaseInstance(array $options = [])
 * @method static RenewInstance renewInstance(array $options = [])
 */
class Hsm
{
    use ApiResolverTrait;
}
