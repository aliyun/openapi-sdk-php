<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Eci based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Eci\V20180808
 *
 * @method CreateContainerGroup createContainerGroup(array $options = [])
 * @method DeleteContainerGroup deleteContainerGroup(array $options = [])
 * @method DescribeContainerExecUri describeContainerExecUri(array $options = [])
 * @method DescribeContainerGroups describeContainerGroups(array $options = [])
 * @method DescribeContainerLog describeContainerLog(array $options = [])
 * @method ExecContainerCommand execContainerCommand(array $options = [])
 */
class EciApiResolver
{
    use ApiResolverTrait;
}
