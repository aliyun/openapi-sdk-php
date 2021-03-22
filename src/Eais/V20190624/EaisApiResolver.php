<?php

namespace AlibabaCloud\Eais\V20190624;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachEai attachEai(array $options = [])
 * @method CreateEai createEai(array $options = [])
 * @method CreateEaiAll createEaiAll(array $options = [])
 * @method DeleteEai deleteEai(array $options = [])
 * @method DeleteEaiAll deleteEaiAll(array $options = [])
 * @method DescribeEais describeEais(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DetachEai detachEai(array $options = [])
 * @method GetPrivateIp getPrivateIp(array $options = [])
 */
class EaisApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'eais';

    /** @var string */
    public $version = '2019-06-24';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'eais';
}

/**
 * @method string getClientInstanceId()
 * @method $this withClientInstanceId($value)
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 */
class AttachEai extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class CreateEai extends Rpc
{
}

/**
 * @method string getClientImageId()
 * @method $this withClientImageId($value)
 * @method string getClientSystemDiskCategory()
 * @method $this withClientSystemDiskCategory($value)
 * @method string getClientInternetMaxBandwidthOut()
 * @method $this withClientInternetMaxBandwidthOut($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClientInstanceName()
 * @method $this withClientInstanceName($value)
 * @method string getClientInternetMaxBandwidthIn()
 * @method $this withClientInternetMaxBandwidthIn($value)
 * @method string getClientSystemDiskSize()
 * @method $this withClientSystemDiskSize($value)
 * @method string getClientVSwitchId()
 * @method $this withClientVSwitchId($value)
 * @method string getClientPassword()
 * @method $this withClientPassword($value)
 * @method string getClientInstanceType()
 * @method $this withClientInstanceType($value)
 * @method string getClientSecurityGroupId()
 * @method $this withClientSecurityGroupId($value)
 * @method string getEaiInstanceType()
 * @method $this withEaiInstanceType($value)
 * @method string getClientZoneId()
 * @method $this withClientZoneId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class CreateEaiAll extends Rpc
{
}

/**
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteEai extends Rpc
{
}

/**
 * @method string getClientInstanceId()
 * @method $this withClientInstanceId($value)
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 */
class DeleteEaiAll extends Rpc
{
}

/**
 * @method string getElasticAcceleratedInstanceIds()
 * @method $this withElasticAcceleratedInstanceIds($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEais extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getElasticAcceleratedInstanceId()
 * @method $this withElasticAcceleratedInstanceId($value)
 */
class DetachEai extends Rpc
{
}

/**
 * @method string getClientInstanceId()
 * @method $this withClientInstanceId($value)
 */
class GetPrivateIp extends Rpc
{
}
