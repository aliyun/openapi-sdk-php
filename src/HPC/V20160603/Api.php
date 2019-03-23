<?php

namespace AlibabaCloud\HPC\V20160603;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

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

class V20160603Rpc extends Rpc
{
    /** @var string */
    public $product = 'HPC';

    /** @var string */
    public $version = '2016-06-03';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hpc';
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class RevokeSecurityGroup extends V20160603Rpc
{
}

/**
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DescribeInstancesInSecurityGroup extends V20160603Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DescribeSecurityGroupAttribute extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNewPassword()
 * @method $this withNewPassword($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class ModifyInstancePassword extends V20160603Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AuthorizeSecurityGroup extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class RebootJumpserver extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class StartJumpserver extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class StopJumpserver extends V20160603Rpc
{
}

/**
 * @method string getPackageId()
 * @method $this withPackageId($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class CreateInstance extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DeleteInstance extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DescribeInstances extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNewPassword()
 * @method $this withNewPassword($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class ModifyJumpserverPassword extends V20160603Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class RebootInstance extends V20160603Rpc
{
}
