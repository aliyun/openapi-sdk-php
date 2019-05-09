<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method RenewInstance renewInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method ConfigWhiteList configWhiteList(array $options = [])
 * @method ConfigNetwork configNetwork(array $options = [])
 */
class HsmApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
class RenewInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleaseInstance extends Rpc
{
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
class ModifyInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeRegions extends Rpc
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
class DescribeInstances extends Rpc
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
class CreateInstance extends Rpc
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
class ConfigWhiteList extends Rpc
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
class ConfigNetwork extends Rpc
{
}
