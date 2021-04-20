<?php

namespace AlibabaCloud\Hitsdb\V20170601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateHiTSDBInstance createHiTSDBInstance(array $options = [])
 * @method DeleteHiTSDBInstance deleteHiTSDBInstance(array $options = [])
 * @method DescribeHiTSDBInstance describeHiTSDBInstance(array $options = [])
 * @method DescribeHiTSDBInstanceList describeHiTSDBInstanceList(array $options = [])
 * @method DescribeHiTSDBInstanceSecurityIpList describeHiTSDBInstanceSecurityIpList(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method ModifyHiTSDBInstanceClass modifyHiTSDBInstanceClass(array $options = [])
 * @method ModifyHiTSDBInstanceSecurityIpList modifyHiTSDBInstanceSecurityIpList(array $options = [])
 * @method RenameHiTSDBInstanceAlias renameHiTSDBInstanceAlias(array $options = [])
 * @method RenewTSDBInstance renewTSDBInstance(array $options = [])
 * @method RestartHiTSDBInstance restartHiTSDBInstance(array $options = [])
 * @method SwitchHiTSDBInstancePublicNet switchHiTSDBInstancePublicNet(array $options = [])
 */
class HitsdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'hitsdb';

    /** @var string */
    public $version = '2017-06-01';

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
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getMaxSeriesPerDatabase()
 * @method $this withMaxSeriesPerDatabase($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getMaxTimelineLimit()
 * @method $this withMaxTimelineLimit($value)
 * @method string getInstanceStorage()
 * @method $this withInstanceStorage($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceAlias()
 * @method $this withInstanceAlias($value)
 * @method string getMaxDatabaseLimit()
 * @method $this withMaxDatabaseLimit($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceTps()
 * @method $this withInstanceTps($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTSDBVersion()
 * @method $this withTSDBVersion($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateHiTSDBInstance extends Rpc
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
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class DeleteHiTSDBInstance extends Rpc
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
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class DescribeHiTSDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryStr()
 * @method $this withQueryStr($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class DescribeHiTSDBInstanceList extends Rpc
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
class DescribeHiTSDBInstanceSecurityIpList extends Rpc
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
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInstanceStorage()
 * @method $this withInstanceStorage($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ModifyHiTSDBInstanceClass extends Rpc
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
class ModifyHiTSDBInstanceSecurityIpList extends Rpc
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
 * @method string getInstanceAlias()
 * @method $this withInstanceAlias($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class RenameHiTSDBInstanceAlias extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
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
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class RenewTSDBInstance extends Rpc
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
class RestartHiTSDBInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSwitchAction()
 * @method $this withSwitchAction($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SwitchHiTSDBInstancePublicNet extends Rpc
{
}
