<?php

namespace AlibabaCloud\Dbs\V20190306;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CloseDLAService closeDLAService(array $options = [])
 * @method ConfigureBackupPlan configureBackupPlan(array $options = [])
 * @method CreateAndStartBackupPlan createAndStartBackupPlan(array $options = [])
 * @method CreateBackupPlan createBackupPlan(array $options = [])
 * @method CreateDLAService createDLAService(array $options = [])
 * @method CreateFullBackupSetDownload createFullBackupSetDownload(array $options = [])
 * @method CreateGetDBListFromAgentTask createGetDBListFromAgentTask(array $options = [])
 * @method CreateIncrementBackupSetDownload createIncrementBackupSetDownload(array $options = [])
 * @method CreateRestoreTask createRestoreTask(array $options = [])
 * @method DescribeBackupGatewayList describeBackupGatewayList(array $options = [])
 * @method DescribeBackupPlanBilling describeBackupPlanBilling(array $options = [])
 * @method DescribeBackupPlanList describeBackupPlanList(array $options = [])
 * @method DescribeBackupSetDownloadTaskList describeBackupSetDownloadTaskList(array $options = [])
 * @method DescribeDLAService describeDLAService(array $options = [])
 * @method DescribeFullBackupList describeFullBackupList(array $options = [])
 * @method DescribeIncrementBackupList describeIncrementBackupList(array $options = [])
 * @method DescribeJobErrorCode describeJobErrorCode(array $options = [])
 * @method DescribeNodeCidrList describeNodeCidrList(array $options = [])
 * @method DescribePreCheckProgressList describePreCheckProgressList(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRestoreRangeInfo describeRestoreRangeInfo(array $options = [])
 * @method DescribeRestoreTaskList describeRestoreTaskList(array $options = [])
 * @method DescribeSandboxFromRDS describeSandboxFromRDS(array $options = [])
 * @method DisableBackupLog disableBackupLog(array $options = [])
 * @method EnableBackupLog enableBackupLog(array $options = [])
 * @method GetDBListFromAgent getDBListFromAgent(array $options = [])
 * @method InitializeDbsServiceLinkedRole initializeDbsServiceLinkedRole(array $options = [])
 * @method ModifyBackupObjects modifyBackupObjects(array $options = [])
 * @method ModifyBackupPlanName modifyBackupPlanName(array $options = [])
 * @method ModifyBackupSetDownloadRules modifyBackupSetDownloadRules(array $options = [])
 * @method ModifyBackupSourceEndpoint modifyBackupSourceEndpoint(array $options = [])
 * @method ModifyBackupStrategy modifyBackupStrategy(array $options = [])
 * @method ModifyStorageStrategy modifyStorageStrategy(array $options = [])
 * @method ReleaseBackupPlan releaseBackupPlan(array $options = [])
 * @method RenewBackupPlan renewBackupPlan(array $options = [])
 * @method StartBackupPlan startBackupPlan(array $options = [])
 * @method StartRestoreTask startRestoreTask(array $options = [])
 * @method StopBackupPlan stopBackupPlan(array $options = [])
 * @method UpgradeBackupPlan upgradeBackupPlan(array $options = [])
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
 */
class CloseDLAService extends Rpc
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
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getDuplicationInfrequentAccessPeriod()
 * @method $this withDuplicationInfrequentAccessPeriod($value)
 * @method string getBackupStartTime()
 * @method $this withBackupStartTime($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getCrossRoleName()
 * @method $this withCrossRoleName($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 * @method string getBackupStorageType()
 * @method $this withBackupStorageType($value)
 * @method string getDuplicationArchivePeriod()
 * @method $this withDuplicationArchivePeriod($value)
 * @method string getBackupLogIntervalSeconds()
 * @method $this withBackupLogIntervalSeconds($value)
 * @method string getCrossAliyunId()
 * @method $this withCrossAliyunId($value)
 * @method string getAutoStartBackup()
 * @method $this withAutoStartBackup($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getBackupObjects()
 * @method $this withBackupObjects($value)
 * @method string getBackupRateLimit()
 * @method $this withBackupRateLimit($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getBackupSpeedLimit()
 * @method $this withBackupSpeedLimit($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getBackupPlanName()
 * @method $this withBackupPlanName($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getOSSBucketName()
 * @method $this withOSSBucketName($value)
 * @method string getBackupStrategyType()
 * @method $this withBackupStrategyType($value)
 */
class ConfigureBackupPlan extends Rpc
{
}

/**
 * @method string getDatabaseType()
 * @method $this withDatabaseType($value)
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getDatabaseRegion()
 * @method $this withDatabaseRegion($value)
 * @method string getBackupStartTime()
 * @method $this withBackupStartTime($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getCrossRoleName()
 * @method $this withCrossRoleName($value)
 * @method string getBackupStorageType()
 * @method $this withBackupStorageType($value)
 * @method string getDuplicationArchivePeriod()
 * @method $this withDuplicationArchivePeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBackupLogIntervalSeconds()
 * @method $this withBackupLogIntervalSeconds($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getBackupSpeedLimit()
 * @method $this withBackupSpeedLimit($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getBackupPlanName()
 * @method $this withBackupPlanName($value)
 * @method string getOSSBucketName()
 * @method $this withOSSBucketName($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getDuplicationInfrequentAccessPeriod()
 * @method $this withDuplicationInfrequentAccessPeriod($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 * @method string getCrossAliyunId()
 * @method $this withCrossAliyunId($value)
 * @method string getBackupObjects()
 * @method $this withBackupObjects($value)
 * @method string getBackupRateLimit()
 * @method $this withBackupRateLimit($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getStorageRegion()
 * @method $this withStorageRegion($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getBackupStrategyType()
 * @method $this withBackupStrategyType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateAndStartBackupPlan extends Rpc
{
}

/**
 * @method string getDatabaseType()
 * @method $this withDatabaseType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getDatabaseRegion()
 * @method $this withDatabaseRegion($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getStorageRegion()
 * @method $this withStorageRegion($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateBackupPlan extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoAdd()
 * @method $this withAutoAdd($value)
 * @method string getBackupSetIds()
 * @method $this withBackupSetIds($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateDLAService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupSetDataFormat()
 * @method $this withBackupSetDataFormat($value)
 */
class CreateFullBackupSetDownload extends Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getDatabaseType()
 * @method $this withDatabaseType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 */
class CreateGetDBListFromAgentTask extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupSetName()
 * @method $this withBackupSetName($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupSetDataFormat()
 * @method $this withBackupSetDataFormat($value)
 */
class CreateIncrementBackupSetDownload extends Rpc
{
}

/**
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getDestinationEndpointInstanceType()
 * @method $this withDestinationEndpointInstanceType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getDestinationEndpointRegion()
 * @method $this withDestinationEndpointRegion($value)
 * @method string getCrossRoleName()
 * @method $this withCrossRoleName($value)
 * @method string getDestinationEndpointUserName()
 * @method $this withDestinationEndpointUserName($value)
 * @method string getRestoreObjects()
 * @method $this withRestoreObjects($value)
 * @method string getRestoreTaskName()
 * @method $this withRestoreTaskName($value)
 * @method string getRestoreHome()
 * @method $this withRestoreHome($value)
 * @method string getDestinationEndpointOracleSID()
 * @method $this withDestinationEndpointOracleSID($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getCrossAliyunId()
 * @method $this withCrossAliyunId($value)
 * @method string getDestinationEndpointInstanceID()
 * @method $this withDestinationEndpointInstanceID($value)
 * @method string getDestinationEndpointPort()
 * @method $this withDestinationEndpointPort($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRestoreDir()
 * @method $this withRestoreDir($value)
 * @method string getDestinationEndpointIP()
 * @method $this withDestinationEndpointIP($value)
 * @method string getDestinationEndpointDatabaseName()
 * @method $this withDestinationEndpointDatabaseName($value)
 * @method string getDuplicateConflict()
 * @method $this withDuplicateConflict($value)
 * @method string getDestinationEndpointPassword()
 * @method $this withDestinationEndpointPassword($value)
 */
class CreateRestoreTask extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeBackupGatewayList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getShowStorageType()
 * @method $this withShowStorageType($value)
 */
class DescribeBackupPlanBilling extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupPlanStatus()
 * @method $this withBackupPlanStatus($value)
 * @method string getBackupPlanName()
 * @method $this withBackupPlanName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeBackupPlanList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupSetDownloadTaskId()
 * @method $this withBackupSetDownloadTaskId($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBackupSetDownloadTaskList extends Rpc
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
class DescribeDLAService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getShowStorageType()
 * @method $this withShowStorageType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeFullBackupList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getShowStorageType()
 * @method $this withShowStorageType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeIncrementBackupList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeJobErrorCode extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeNodeCidrList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRestoreTaskId()
 * @method $this withRestoreTaskId($value)
 */
class DescribePreCheckProgressList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getBeginTimestampForRestore()
 * @method $this withBeginTimestampForRestore($value)
 * @method string getEndTimestampForRestore()
 * @method $this withEndTimestampForRestore($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecentlyRestore()
 * @method $this withRecentlyRestore($value)
 */
class DescribeRestoreRangeInfo extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getRestoreTaskId()
 * @method $this withRestoreTaskId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeRestoreTaskList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRdsInstanceID()
 * @method $this withRdsInstanceID($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSandboxFromRDS extends Rpc
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
class DisableBackupLog extends Rpc
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
class EnableBackupLog extends Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetDBListFromAgent extends Rpc
{
}

class InitializeDbsServiceLinkedRole extends Rpc
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
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupPlanName()
 * @method $this withBackupPlanName($value)
 */
class ModifyBackupPlanName extends Rpc
{
}

/**
 * @method string getFullDataFormat()
 * @method $this withFullDataFormat($value)
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupSetDownloadTargetType()
 * @method $this withBackupSetDownloadTargetType($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOpenAutoDownload()
 * @method $this withOpenAutoDownload($value)
 * @method string getIncrementDataFormat()
 * @method $this withIncrementDataFormat($value)
 * @method string getBackupSetDownloadTargetTypeLocation()
 * @method $this withBackupSetDownloadTargetTypeLocation($value)
 * @method string getBackupSetDownloadDir()
 * @method $this withBackupSetDownloadDir($value)
 */
class ModifyBackupSetDownloadRules extends Rpc
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
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getCrossRoleName()
 * @method $this withCrossRoleName($value)
 * @method string getCrossAliyunId()
 * @method $this withCrossAliyunId($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getBackupObjects()
 * @method $this withBackupObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 */
class ModifyBackupSourceEndpoint extends Rpc
{
}

/**
 * @method string getBackupLogIntervalSeconds()
 * @method $this withBackupLogIntervalSeconds($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getBackupStartTime()
 * @method $this withBackupStartTime($value)
 * @method string getBackupStrategyType()
 * @method $this withBackupStrategyType($value)
 */
class ModifyBackupStrategy extends Rpc
{
}

/**
 * @method string getDuplicationArchivePeriod()
 * @method $this withDuplicationArchivePeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getDuplicationInfrequentAccessPeriod()
 * @method $this withDuplicationInfrequentAccessPeriod($value)
 */
class ModifyStorageStrategy extends Rpc
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
class ReleaseBackupPlan extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartBackupPlan extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRestoreTaskId()
 * @method $this withRestoreTaskId($value)
 */
class StartRestoreTask extends Rpc
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
