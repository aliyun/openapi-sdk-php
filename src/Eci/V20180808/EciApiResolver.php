<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method UpdateContainerGroupByTemplate updateContainerGroupByTemplate(array $options = [])
 * @method ExportContainerGroupTemplate exportContainerGroupTemplate(array $options = [])
 * @method CreateContainerGroupFromTemplate createContainerGroupFromTemplate(array $options = [])
 * @method DescribeContainerGroupMetric describeContainerGroupMetric(array $options = [])
 * @method UpdateContainerGroup updateContainerGroup(array $options = [])
 * @method RestartContainerGroup restartContainerGroup(array $options = [])
 * @method DescribeContainerGroupPrice describeContainerGroupPrice(array $options = [])
 * @method ExecContainerCommand execContainerCommand(array $options = [])
 * @method DescribeContainerExecUri describeContainerExecUri(array $options = [])
 * @method DeleteContainerGroup deleteContainerGroup(array $options = [])
 * @method DescribeContainerGroups describeContainerGroups(array $options = [])
 * @method DescribeContainerLog describeContainerLog(array $options = [])
 * @method CreateContainerGroup createContainerGroup(array $options = [])
 */
class EciApiResolver
{
    use ApiResolverTrait;
}
