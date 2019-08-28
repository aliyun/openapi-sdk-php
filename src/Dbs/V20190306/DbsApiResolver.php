<?php

namespace AlibabaCloud\Dbs\V20190306;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpgradeBackupPlan upgradeBackupPlan(array $options = [])
 * @method DescribePreCheckProgressList describePreCheckProgressList(array $options = [])
 * @method ModifyBackupStrategy modifyBackupStrategy(array $options = [])
 * @method ModifyBackupSourceEndpoint modifyBackupSourceEndpoint(array $options = [])
 * @method ModifyBackupPlanName modifyBackupPlanName(array $options = [])
 * @method RenewBackupPlan renewBackupPlan(array $options = [])
 * @method ModifyBackupObjects modifyBackupObjects(array $options = [])
 * @method DescribeRestoreTaskList describeRestoreTaskList(array $options = [])
 * @method DescribeNodeCidrList describeNodeCidrList(array $options = [])
 * @method StartRestoreTask startRestoreTask(array $options = [])
 * @method CreateRestoreTask createRestoreTask(array $options = [])
 * @method DescribeBackupPlanList describeBackupPlanList(array $options = [])
 * @method DescribeFullBackupList describeFullBackupList(array $options = [])
 * @method StopBackupPlan stopBackupPlan(array $options = [])
 * @method DescribeBackupGatewayList describeBackupGatewayList(array $options = [])
 * @method DescribeIncrementBackupList describeIncrementBackupList(array $options = [])
 * @method ConfigureBackupPlan configureBackupPlan(array $options = [])
 * @method StartBackupPlan startBackupPlan(array $options = [])
 * @method CreateBackupPlan createBackupPlan(array $options = [])
 */
class DbsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dbs';

    /** @var string */
    public $version = '2019-03-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cbs';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 */
class UpgradeBackupPlan extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRestoreTaskId()
 * @method $this withRestoreTaskId($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePreCheckProgressList extends Rpc
{
}

/**
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getBackupStartTime()
 * @method $this withBackupStartTime($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBackupStrategy extends Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getBackupObjects()
 * @method $this withBackupObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 */
class ModifyBackupSourceEndpoint extends Rpc
{
}

/**
 * @method string getBackupPlanName()
 * @method $this withBackupPlanName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBackupPlanName extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 */
class RenewBackupPlan extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getBackupObjects()
 * @method $this withBackupObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBackupObjects extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRestoreTaskId()
 * @method $this withRestoreTaskId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRestoreTaskList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNodeCidrList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRestoreTaskId()
 * @method $this withRestoreTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartRestoreTask extends Rpc
{
}

/**
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getDestinationEndpointOracleSID()
 * @method $this withDestinationEndpointOracleSID($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getDestinationEndpointInstanceType()
 * @method $this withDestinationEndpointInstanceType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDestinationEndpointInstanceID()
 * @method $this withDestinationEndpointInstanceID($value)
 * @method string getDestinationEndpointPort()
 * @method $this withDestinationEndpointPort($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationEndpointRegion()
 * @method $this withDestinationEndpointRegion($value)
 * @method string getRestoreDir()
 * @method $this withRestoreDir($value)
 * @method string getDestinationEndpointIP()
 * @method $this withDestinationEndpointIP($value)
 * @method string getDestinationEndpointDatabaseName()
 * @method $this withDestinationEndpointDatabaseName($value)
 * @method string getDestinationEndpointUserName()
 * @method $this withDestinationEndpointUserName($value)
 * @method string getRestoreObjects()
 * @method $this withRestoreObjects($value)
 * @method string getRestoreTaskName()
 * @method $this withRestoreTaskName($value)
 * @method string getDuplicateConflict()
 * @method $this withDuplicateConflict($value)
 * @method string getDestinationEndpointPassword()
 * @method $this withDestinationEndpointPassword($value)
 */
class CreateRestoreTask extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPlanList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeFullBackupList extends Rpc
{
}

/**
 * @method string getStopMethod()
 * @method $this withStopMethod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopBackupPlan extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupGatewayList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeIncrementBackupList extends Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getDuplicationArchivePeriod()
 * @method $this withDuplicationArchivePeriod($value)
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getBackupObjects()
 * @method $this withBackupObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getDuplicationInfrequentAccessPeriod()
 * @method $this withDuplicationInfrequentAccessPeriod($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getBackupStartTime()
 * @method $this withBackupStartTime($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getBackupPlanName()
 * @method $this withBackupPlanName($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getOSSBucketName()
 * @method $this withOSSBucketName($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 */
class ConfigureBackupPlan extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartBackupPlan extends Rpc
{
}

/**
 * @method string getDatabaseType()
 * @method $this withDatabaseType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getDatabaseRegion()
 * @method $this withDatabaseRegion($value)
 * @method string getStorageRegion()
 * @method $this withStorageRegion($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateBackupPlan extends Rpc
{
}
