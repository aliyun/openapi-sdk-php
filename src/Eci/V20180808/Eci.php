<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Eci based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Eci\V20180808
 *
 * @method static CreateContainerGroup createContainerGroup(array $options = [])
 * @method static DeleteContainerGroup deleteContainerGroup(array $options = [])
 * @method static DescribeContainerExecUri describeContainerExecUri(array $options = [])
 * @method static DescribeContainerGroups describeContainerGroups(array $options = [])
 * @method static DescribeContainerLog describeContainerLog(array $options = [])
 * @method static EciApiResolver eciApiResolver(array $options = [])
 * @method static ExecContainerCommand execContainerCommand(array $options = [])
 */
class Eci
{
    use ApiResolverTrait;
}
