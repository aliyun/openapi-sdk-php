<?php

namespace AlibabaCloud\HPC\V20161213;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method StopJumpserver stopJumpserver(array $options = [])
 * @method StartJumpserver startJumpserver(array $options = [])
 * @method RevokeSecurityGroup revokeSecurityGroup(array $options = [])
 * @method RebootJumpserver rebootJumpserver(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 * @method ModifyJumpserverPassword modifyJumpserverPassword(array $options = [])
 * @method ModifyInstancePassword modifyInstancePassword(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method DescribeInstancesInSecurityGroup describeInstancesInSecurityGroup(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 */
class HPCApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'HPC';

    /** @var string */
    public $version = '2016-12-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hpc';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class StopJumpserver extends Rpc
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
class StartJumpserver extends Rpc
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
class RevokeSecurityGroup extends Rpc
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
class RebootJumpserver extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class RebootInstance extends Rpc
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
class ModifyJumpserverPassword extends Rpc
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
class ModifyInstancePassword extends Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DescribeSecurityGroupAttribute extends Rpc
{
}

/**
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DescribeInstancesInSecurityGroup extends Rpc
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
class DescribeInstances extends Rpc
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
class AuthorizeSecurityGroup extends Rpc
{
}
