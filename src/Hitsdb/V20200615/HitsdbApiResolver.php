<?php

namespace AlibabaCloud\Hitsdb\V20200615;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateLindormInstance createLindormInstance(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method GetInstanceIpWhiteList getInstanceIpWhiteList(array $options = [])
 * @method GetLindormInstance getLindormInstance(array $options = [])
 * @method GetLindormInstanceEngineList getLindormInstanceEngineList(array $options = [])
 * @method GetLindormInstanceList getLindormInstanceList(array $options = [])
 * @method GetLindormSSLCertUrl getLindormSSLCertUrl(array $options = [])
 * @method ReleaseLindormInstance releaseLindormInstance(array $options = [])
 * @method UpdateInstanceIpWhiteList updateInstanceIpWhiteList(array $options = [])
 * @method UpgradeLindormInstance upgradeLindormInstance(array $options = [])
 */
class HitsdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'hitsdb';

    /** @var string */
    public $version = '2020-06-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hitsdb';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTsdbSpec()
 * @method $this withTsdbSpec($value)
 * @method string getFilestoreSpec()
 * @method $this withFilestoreSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTsdbNum()
 * @method $this withTsdbNum($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getLindormSpec()
 * @method $this withLindormSpec($value)
 * @method string getSolrNum()
 * @method $this withSolrNum($value)
 * @method string getColdStorage()
 * @method $this withColdStorage($value)
 * @method string getInstanceStorage()
 * @method $this withInstanceStorage($value)
 * @method string getSolrSpec()
 * @method $this withSolrSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceAlias()
 * @method $this withInstanceAlias($value)
 * @method string getFilestoreNum()
 * @method $this withFilestoreNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLindormNum()
 * @method $this withLindormNum($value)
 * @method string getCoreSpec()
 * @method $this withCoreSpec($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateLindormInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceIpWhiteList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLindormInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLindormInstanceEngineList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSupportEngine()
 * @method $this withSupportEngine($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryStr()
 * @method $this withQueryStr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 */
class GetLindormInstanceList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLindormSSLCertUrl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleaseLindormInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSecurityIpList()
 * @method $this withSecurityIpList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateInstanceIpWhiteList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoenixCoreNum()
 * @method $this withPhoenixCoreNum($value)
 * @method string getPhoenixCoreSpec()
 * @method $this withPhoenixCoreSpec($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUpgradeType()
 * @method $this withUpgradeType($value)
 * @method string getTsdbSpec()
 * @method $this withTsdbSpec($value)
 * @method string getFilestoreSpec()
 * @method $this withFilestoreSpec($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTsdbNum()
 * @method $this withTsdbNum($value)
 * @method string getLindormSpec()
 * @method $this withLindormSpec($value)
 * @method string getSolrNum()
 * @method $this withSolrNum($value)
 * @method string getColdStorage()
 * @method $this withColdStorage($value)
 * @method string getSolrSpec()
 * @method $this withSolrSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFilestoreNum()
 * @method $this withFilestoreNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLindormNum()
 * @method $this withLindormNum($value)
 * @method string getCoreSpec()
 * @method $this withCoreSpec($value)
 * @method string getCoreNum()
 * @method $this withCoreNum($value)
 * @method string getLtsCoreNum()
 * @method $this withLtsCoreNum($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLtsCoreSpec()
 * @method $this withLtsCoreSpec($value)
 * @method string getClusterStorage()
 * @method $this withClusterStorage($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class UpgradeLindormInstance extends Rpc
{
}
