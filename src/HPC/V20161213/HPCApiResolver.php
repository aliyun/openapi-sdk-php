<?php

namespace AlibabaCloud\HPC\V20161213;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method StopJumpserver stopJumpserver(array $options = [])
 * @method ModifyInstancePassword modifyInstancePassword(array $options = [])
 * @method ModifyJumpserverPassword modifyJumpserverPassword(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 * @method RebootJumpserver rebootJumpserver(array $options = [])
 * @method RevokeSecurityGroup revokeSecurityGroup(array $options = [])
 * @method StartJumpserver startJumpserver(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstancesInSecurityGroup describeInstancesInSecurityGroup(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 */
class HPCApiResolver
{
    use ApiResolverTrait;
}
