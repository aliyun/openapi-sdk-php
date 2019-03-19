<?php

namespace AlibabaCloud\HPC\V20160603;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method RevokeSecurityGroup revokeSecurityGroup(array $options = [])
 * @method DescribeInstancesInSecurityGroup describeInstancesInSecurityGroup(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method ModifyInstancePassword modifyInstancePassword(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method RebootJumpserver rebootJumpserver(array $options = [])
 * @method StartJumpserver startJumpserver(array $options = [])
 * @method StopJumpserver stopJumpserver(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method ModifyJumpserverPassword modifyJumpserverPassword(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 */
class HPCApiResolver
{
    use ApiResolverTrait;
}
