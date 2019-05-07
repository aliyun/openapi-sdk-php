<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ConfigNetwork configNetwork(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method ConfigWhiteList configWhiteList(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 */
class HsmApiResolver
{
    use ApiResolverTrait;
}

class V20180111Rpc extends Rpc
{
    /** @var string */
    public $product = 'hsm';

    /** @var string */
    public $version = '2018-01-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hsm';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class ModifyInstance extends V20180111Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class RenewInstance extends V20180111Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getIp()
 * @method $this withIp($value)
 */
class ConfigNetwork extends V20180111Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getHsmDeviceType()
 * @method $this withHsmDeviceType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getHsmOem()
 * @method $this withHsmOem($value)
 */
class CreateInstance extends V20180111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleaseInstance extends V20180111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWhiteList()
 * @method $this withWhiteList($value)
 */
class ConfigWhiteList extends V20180111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getHsmStatus()
 * @method $this withHsmStatus($value)
 */
class DescribeInstances extends V20180111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeRegions extends V20180111Rpc
{
}
