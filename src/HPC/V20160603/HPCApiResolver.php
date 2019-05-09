<?php

namespace AlibabaCloud\HPC\V20160603;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method StopJumpserver stopJumpserver(array $options = [])
 * @method StartJumpserver startJumpserver(array $options = [])
 * @method RebootJumpserver rebootJumpserver(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 * @method ModifyJumpserverPassword modifyJumpserverPassword(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 */
class HPCApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DescribeInstances extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getPackageId()
 * @method $this withPackageId($value)
 * @method string getTOKEN()
 * @method $this withTOKEN($value)
 */
class CreateInstance extends Rpc
{
}
