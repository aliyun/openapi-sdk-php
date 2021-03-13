<?php

namespace AlibabaCloud\Adb\V20190315;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocateClusterPublicConnection allocateClusterPublicConnection(array $options = [])
 * @method BindDBResourcePoolWithUser bindDBResourcePoolWithUser(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateDBCluster createDBCluster(array $options = [])
 * @method CreateDBResourcePool createDBResourcePool(array $options = [])
 * @method CreateElasticPlan createElasticPlan(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteDBCluster deleteDBCluster(array $options = [])
 * @method DeleteDBResourcePool deleteDBResourcePool(array $options = [])
 * @method DeleteElasticPlan deleteElasticPlan(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeAllAccounts describeAllAccounts(array $options = [])
 * @method DescribeAllDataSource describeAllDataSource(array $options = [])
 * @method DescribeAuditLogConfig describeAuditLogConfig(array $options = [])
 * @method DescribeAuditLogRecords describeAuditLogRecords(array $options = [])
 * @method DescribeAutoRenewAttribute describeAutoRenewAttribute(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeColumns describeColumns(array $options = [])
 * @method DescribeConnectionCountRecords describeConnectionCountRecords(array $options = [])
 * @method DescribeDBClusterAccessWhiteList describeDBClusterAccessWhiteList(array $options = [])
 * @method DescribeDBClusterAttribute describeDBClusterAttribute(array $options = [])
 * @method DescribeDBClusterNetInfo describeDBClusterNetInfo(array $options = [])
 * @method DescribeDBClusterPerformance describeDBClusterPerformance(array $options = [])
 * @method DescribeDBClusterResourcePoolPerformance describeDBClusterResourcePoolPerformance(array $options = [])
 * @method DescribeDBClusters describeDBClusters(array $options = [])
 * @method DescribeDBResourcePool describeDBResourcePool(array $options = [])
 * @method DescribeElasticDailyPlan describeElasticDailyPlan(array $options = [])
 * @method DescribeElasticPlan describeElasticPlan(array $options = [])
 * @method DescribeInclinedTables describeInclinedTables(array $options = [])
 * @method DescribeLoadTasksRecords describeLoadTasksRecords(array $options = [])
 * @method DescribeOperatorPermission describeOperatorPermission(array $options = [])
 * @method DescribeProcessList describeProcessList(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSchemas describeSchemas(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeSlowLogTrend describeSlowLogTrend(array $options = [])
 * @method DescribeSQLPlan describeSQLPlan(array $options = [])
 * @method DescribeSQLPlanTask describeSQLPlanTask(array $options = [])
 * @method DescribeTableDetail describeTableDetail(array $options = [])
 * @method DescribeTablePartitionDiagnose describeTablePartitionDiagnose(array $options = [])
 * @method DescribeTables describeTables(array $options = [])
 * @method DescribeTableStatistics describeTableStatistics(array $options = [])
 * @method DescribeTaskInfo describeTaskInfo(array $options = [])
 * @method GrantOperatorPermission grantOperatorPermission(array $options = [])
 * @method KillProcess killProcess(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyAuditLogConfig modifyAuditLogConfig(array $options = [])
 * @method ModifyAutoRenewAttribute modifyAutoRenewAttribute(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyClusterConnectionString modifyClusterConnectionString(array $options = [])
 * @method ModifyDBCluster modifyDBCluster(array $options = [])
 * @method ModifyDBClusterAccessWhiteList modifyDBClusterAccessWhiteList(array $options = [])
 * @method ModifyDBClusterDescription modifyDBClusterDescription(array $options = [])
 * @method ModifyDBClusterMaintainTime modifyDBClusterMaintainTime(array $options = [])
 * @method ModifyDBClusterResourceGroup modifyDBClusterResourceGroup(array $options = [])
 * @method ModifyDBResourcePool modifyDBResourcePool(array $options = [])
 * @method ModifyElasticPlan modifyElasticPlan(array $options = [])
 * @method ModifyLogBackupPolicy modifyLogBackupPolicy(array $options = [])
 * @method ReleaseClusterPublicConnection releaseClusterPublicConnection(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method RevokeOperatorPermission revokeOperatorPermission(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnbindDBResourcePoolWithUser unbindDBResourcePoolWithUser(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class AdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'adb';

    /** @var string */
    public $version = '2019-03-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ads';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateClusterPublicConnection extends Rpc
{
}

/**
 * @method string getPoolName()
 * @method $this withPoolName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPoolUser()
 * @method $this withPoolUser($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BindDBResourcePoolWithUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBackupSetID()
 * @method $this withBackupSetID($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNodeGroupCount()
 * @method $this withDBNodeGroupCount($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getComputeResource()
 * @method $this withComputeResource($value)
 * @method string getSourceDBInstanceName()
 * @method $this withSourceDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStorageResource()
 * @method $this withStorageResource($value)
 * @method string getDBClusterCategory()
 * @method $this withDBClusterCategory($value)
 * @method string getDBClusterNetworkType()
 * @method $this withDBClusterNetworkType($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBClusterVersion()
 * @method $this withDBClusterVersion($value)
 * @method string getDBClusterClass()
 * @method $this withDBClusterClass($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 * @method string getDBNodeStorage()
 * @method $this withDBNodeStorage($value)
 * @method string getExecutorCount()
 * @method $this withExecutorCount($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDBCluster extends Rpc
{
}

/**
 * @method string getPoolName()
 * @method $this withPoolName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeNum()
 * @method $this withNodeNum($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateDBResourcePool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getElasticPlanTimeStart()
 * @method $this withElasticPlanTimeStart($value)
 * @method string getElasticPlanEndDay()
 * @method $this withElasticPlanEndDay($value)
 * @method string getElasticPlanWeeklyRepeat()
 * @method $this withElasticPlanWeeklyRepeat($value)
 * @method string getElasticPlanEnable()
 * @method $this withElasticPlanEnable($value)
 * @method string getElasticPlanTimeEnd()
 * @method $this withElasticPlanTimeEnd($value)
 * @method string getElasticPlanStartDay()
 * @method $this withElasticPlanStartDay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 * @method string getResourcePoolName()
 * @method $this withResourcePoolName($value)
 * @method string getElasticPlanNodeNum()
 * @method $this withElasticPlanNodeNum($value)
 */
class CreateElasticPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBCluster extends Rpc
{
}

/**
 * @method string getPoolName()
 * @method $this withPoolName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBResourcePool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class DeleteElasticPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAccounts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAllAccounts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAllDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAuditLogConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostAddress()
 * @method $this withHostAddress($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSqlType()
 * @method $this withSqlType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getQueryKeyword()
 * @method $this withQueryKeyword($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSucceed()
 * @method $this withSucceed($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAuditLogRecords extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class DescribeAvailableResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeColumns extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeConnectionCountRecords extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterAccessWhiteList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterNetInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterPerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourcePools()
 * @method $this withResourcePools($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterResourcePoolPerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getDBClusterStatus()
 * @method $this withDBClusterStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeDBClusters extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPoolName()
 * @method $this withPoolName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBResourcePool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getElasticDailyPlanStatusList()
 * @method $this withElasticDailyPlanStatusList($value)
 * @method string getElasticDailyPlanDay()
 * @method $this withElasticDailyPlanDay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 * @method string getResourcePoolName()
 * @method $this withResourcePoolName($value)
 */
class DescribeElasticDailyPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getElasticPlanEnable()
 * @method $this withElasticPlanEnable($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 * @method string getResourcePoolName()
 * @method $this withResourcePoolName($value)
 */
class DescribeElasticPlan extends Rpc
{
}

/**
 * @method string getTableType()
 * @method $this withTableType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInclinedTables extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRange()
 * @method $this withRange($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeLoadTasksRecords extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOperatorPermission extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowFull()
 * @method $this withShowFull($value)
 * @method string getRunningTime()
 * @method $this withRunningTime($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeProcessList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSchemas extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRange()
 * @method $this withRange($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getProcessID()
 * @method $this withProcessID($value)
 */
class DescribeSlowLogRecords extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeSlowLogTrend extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 */
class DescribeSQLPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 * @method string getStageId()
 * @method $this withStageId($value)
 */
class DescribeSQLPlanTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTableDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTablePartitionDiagnose extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTables extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTableStatistics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTaskInfo extends Rpc
{
}

/**
 * @method string getPrivileges()
 * @method $this withPrivileges($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpiredTime()
 * @method $this withExpiredTime($value)
 */
class GrantOperatorPermission extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 */
class KillProcess extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuditLogStatus()
 * @method $this withAuditLogStatus($value)
 */
class ModifyAuditLogConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 */
class ModifyAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 */
class ModifyBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class ModifyClusterConnectionString extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getStorageResource()
 * @method $this withStorageResource($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getDBClusterCategory()
 * @method $this withDBClusterCategory($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBNodeGroupCount()
 * @method $this withDBNodeGroupCount($value)
 * @method string getDBNodeStorage()
 * @method $this withDBNodeStorage($value)
 * @method string getExecutorCount()
 * @method $this withExecutorCount($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method string getComputeResource()
 * @method $this withComputeResource($value)
 * @method string getElasticIOResource()
 * @method $this withElasticIOResource($value)
 */
class ModifyDBCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getDBClusterIPArrayAttribute()
 * @method $this withDBClusterIPArrayAttribute($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBClusterIPArrayName()
 * @method $this withDBClusterIPArrayName($value)
 */
class ModifyDBClusterAccessWhiteList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterDescription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMaintainTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ModifyDBClusterResourceGroup extends Rpc
{
}

/**
 * @method string getPoolName()
 * @method $this withPoolName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeNum()
 * @method $this withNodeNum($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBResourcePool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getElasticPlanTimeStart()
 * @method $this withElasticPlanTimeStart($value)
 * @method string getElasticPlanEndDay()
 * @method $this withElasticPlanEndDay($value)
 * @method string getElasticPlanWeeklyRepeat()
 * @method $this withElasticPlanWeeklyRepeat($value)
 * @method string getElasticPlanEnable()
 * @method $this withElasticPlanEnable($value)
 * @method string getElasticPlanTimeEnd()
 * @method $this withElasticPlanTimeEnd($value)
 * @method string getElasticPlanStartDay()
 * @method $this withElasticPlanStartDay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 * @method string getResourcePoolName()
 * @method $this withResourcePoolName($value)
 * @method string getElasticPlanNodeNum()
 * @method $this withElasticPlanNodeNum($value)
 */
class ModifyElasticPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 */
class ModifyLogBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseClusterPublicConnection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccountPassword extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeOperatorPermission extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPoolName()
 * @method $this withPoolName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPoolUser()
 * @method $this withPoolUser($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnbindDBResourcePoolWithUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
