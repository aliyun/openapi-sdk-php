<?php

namespace AlibabaCloud\Eci;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Eci based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Eci
 *
 * @method static V20180808\CreateContainerGroup createContainerGroup(array $options = [])
 * @method static V20180808\DeleteContainerGroup deleteContainerGroup(array $options = [])
 * @method static V20180808\DescribeContainerExecUri describeContainerExecUri(array $options = [])
 * @method static V20180808\DescribeContainerGroups describeContainerGroups(array $options = [])
 * @method static V20180808\DescribeContainerLog describeContainerLog(array $options = [])
 * @method static V20180808\ExecContainerCommand execContainerCommand(array $options = [])
 */
class EciV20180808
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Eci\\V20180808';
}
