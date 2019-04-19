<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method AssociateServiceUseSecurityIpWithCustins associateServiceUseSecurityIpWithCustins(array $options = [])
 * @method GetServiceSecurityList getServiceSecurityList(array $options = [])
 * @method UpdateServiceSecurityList updateServiceSecurityList(array $options = [])
 * @method GetServiceUseSecirityIP getServiceUseSecirityIP(array $options = [])
 * @method CreateServiceUseSecurityIP createServiceUseSecurityIP(array $options = [])
 * @method DescribeCrossRegionBackupDBInstance describeCrossRegionBackupDBInstance(array $options = [])
 * @method DescribeAvailableCrossRegion describeAvailableCrossRegion(array $options = [])
 * @method DescribeAvailableRecoveryTime describeAvailableRecoveryTime(array $options = [])
 * @method DescribeInstanceVpcMigrateInfo describeInstanceVpcMigrateInfo(array $options = [])
 * @method DescribeReadDBInstanceDelay describeReadDBInstanceDelay(array $options = [])
 * @method RestoreTable restoreTable(array $options = [])
 * @method AllocateInstanceVpcNetworkType allocateInstanceVpcNetworkType(array $options = [])
 * @method MigrateToOtherRegion migrateToOtherRegion(array $options = [])
 * @method ModifyActiveOperationPendingTask modifyActiveOperationPendingTask(array $options = [])
 * @method DescribeTargetAVZ describeTargetAVZ(array $options = [])
 * @method DescribeAvailableInstanceClass describeAvailableInstanceClass(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method DescribeProxyFunctionSupport describeProxyFunctionSupport(array $options = [])
 * @method DescribeMetaList describeMetaList(array $options = [])
 * @method RequestServiceOfCloudDBExpert requestServiceOfCloudDBExpert(array $options = [])
 * @method DescribeCloudDbExpertService describeCloudDbExpertService(array $options = [])
 * @method AddDBInstanceNetworkType addDBInstanceNetworkType(array $options = [])
 * @method CheckInstanceExist checkInstanceExist(array $options = [])
 * @method DescribeTemplatesList describeTemplatesList(array $options = [])
 * @method DescribeLogBackupFiles describeLogBackupFiles(array $options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask(array $options = [])
 * @method SwitchDBInstanceVpc switchDBInstanceVpc(array $options = [])
 * @method MigrateSecurityIPMode migrateSecurityIPMode(array $options = [])
 * @method DescribeCollationTimeZones describeCollationTimeZones(array $options = [])
 * @method ModifyCollationTimeZone modifyCollationTimeZone(array $options = [])
 * @method CopyDatabaseBetweenInstances copyDatabaseBetweenInstances(array $options = [])
 * @method DescribeBackupDatabase describeBackupDatabase(array $options = [])
 * @method RecoveryDBInstance recoveryDBInstance(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method ModifyReadonlyInstanceDelayReplicationTime modifyReadonlyInstanceDelayReplicationTime(array $options = [])
 * @method ModifyMySQLDBInstanceDelay modifyMySQLDBInstanceDelay(array $options = [])
 * @method CreateOnlineDatabaseTask createOnlineDatabaseTask(array $options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion(array $options = [])
 * @method ModifyDBInstanceProxyConfiguration modifyDBInstanceProxyConfiguration(array $options = [])
 * @method DescribeDBInstanceProxyConfiguration describeDBInstanceProxyConfiguration(array $options = [])
 * @method DescribeSecurityGroupConfiguration describeSecurityGroupConfiguration(array $options = [])
 * @method ModifySecurityGroupConfiguration modifySecurityGroupConfiguration(array $options = [])
 * @method DescribeMigrateTasks describeMigrateTasks(array $options = [])
 * @method DescribeOssDownloads describeOssDownloads(array $options = [])
 * @method CreateMigrateTask createMigrateTask(array $options = [])
 * @method CreateMigrateTaskForSQLServer createMigrateTaskForSQLServer(array $options = [])
 * @method DescribeMigrateTasksForSQLServer describeMigrateTasksForSQLServer(array $options = [])
 * @method DescribeOssDownloadsForSQLServer describeOssDownloadsForSQLServer(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method CopyDatabase copyDatabase(array $options = [])
 * @method DescribeDBInstancesAsCsv describeDBInstancesAsCsv(array $options = [])
 * @method ModifyDBInstanceNetworkExpireTime modifyDBInstanceNetworkExpireTime(array $options = [])
 * @method CreateDBInstanceReplica createDBInstanceReplica(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method CheckRecoveryConditions checkRecoveryConditions(array $options = [])
 * @method DescribeTaskInfo describeTaskInfo(array $options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute(array $options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute(array $options = [])
 * @method ModifyResourceGroup modifyResourceGroup(array $options = [])
 * @method AllocateReadWriteSplittingConnection allocateReadWriteSplittingConnection(array $options = [])
 * @method ModifyReadWriteSplittingConnection modifyReadWriteSplittingConnection(array $options = [])
 * @method ReleaseReadWriteSplittingConnection releaseReadWriteSplittingConnection(array $options = [])
 * @method CalculateDBInstanceWeight calculateDBInstanceWeight(array $options = [])
 * @method CheckResource checkResource(array $options = [])
 * @method DescribeCharacterSetName describeCharacterSetName(array $options = [])
 * @method DeleteBackup deleteBackup(array $options = [])
 * @method DescribeDiagnosticReportList describeDiagnosticReportList(array $options = [])
 * @method CreateDiagnosticReport createDiagnosticReport(array $options = [])
 * @method CloneDBInstance cloneDBInstance(array $options = [])
 * @method RevokeOperatorPermission revokeOperatorPermission(array $options = [])
 * @method DescribeDBInstanceByTags describeDBInstanceByTags(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method ModifyDBInstanceTDE modifyDBInstanceTDE(array $options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method DescribeDBInstanceTDE describeDBInstanceTDE(array $options = [])
 * @method GrantOperatorPermission grantOperatorPermission(array $options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL(array $options = [])
 * @method DescribeSQLLogFiles describeSQLLogFiles(array $options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor(array $options = [])
 * @method ModifySQLCollectorPolicy modifySQLCollectorPolicy(array $options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor(array $options = [])
 * @method DescribeSQLReports describeSQLReports(array $options = [])
 * @method SwitchDBInstanceHA switchDBInstanceHA(array $options = [])
 * @method ModifyDBInstanceHAConfig modifyDBInstanceHAConfig(array $options = [])
 * @method DescribeDBInstanceHAConfig describeDBInstanceHAConfig(array $options = [])
 * @method DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList(array $options = [])
 * @method DescribeSQLLogReportList describeSQLLogReportList(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeDBInstancesByPerformance describeDBInstancesByPerformance(array $options = [])
 * @method DescribeDBInstancesByExpireTime describeDBInstancesByExpireTime(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method CreateReadOnlyDBInstance createReadOnlyDBInstance(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method ModifyDBInstanceConnectionMode modifyDBInstanceConnectionMode(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method AddTagsToResource addTagsToResource(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CheckAccountNameAvailable checkAccountNameAvailable(array $options = [])
 * @method CancelImport cancelImport(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method CreateTempDBInstance createTempDBInstance(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescibeImportsFromDatabase descibeImportsFromDatabase(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DescribeBinlogFiles describeBinlogFiles(array $options = [])
 * @method DescribeBackupTasks describeBackupTasks(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeErrorLogs describeErrorLogs(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeModifyParameterLog describeModifyParameterLog(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method DescribeSlowLogs describeSlowLogs(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeResourceUsage describeResourceUsage(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeSQLLogReports describeSQLLogReports(array $options = [])
 * @method DescribeSQLLogRecords describeSQLLogRecords(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method ImportDataForSQLServer importDataForSQLServer(array $options = [])
 * @method ImportDatabaseBetweenInstances importDatabaseBetweenInstances(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyDBDescription modifyDBDescription(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyParameter modifyParameter(array $options = [])
 * @method ModifyDBInstanceSpec modifyDBInstanceSpec(array $options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method PurgeDBInstanceLog purgeDBInstanceLog(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method RemoveTagsFromResource removeTagsFromResource(array $options = [])
 * @method UpgradeDBInstanceEngineVersion upgradeDBInstanceEngineVersion(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method RestoreDBInstance restoreDBInstance(array $options = [])
 * @method ResetAccountForPG resetAccountForPG(array $options = [])
 * @method AllocateInstancePrivateConnection allocateInstancePrivateConnection(array $options = [])
 */
class RdsApiResolver
{
    use ApiResolverTrait;
}

class V20140815Rpc extends Rpc
{
    /** @var string */
    public $product = 'Rds';

    /** @var string */
    public $version = '2014-08-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'rds';
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class AssociateServiceUseSecurityIpWithCustins extends V20140815Rpc
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
 * @method string getId()
 * @method $this withId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetServiceSecurityList extends V20140815Rpc
{
}

/**
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class UpdateServiceSecurityList extends V20140815Rpc
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
 * @method string getId()
 * @method $this withId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetServiceUseSecirityIP extends V20140815Rpc
{
}

/**
 * @method string getOwnerEmail()
 * @method $this withOwnerEmail($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getContact()
 * @method $this withContact($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getExportInfoToUser()
 * @method $this withExportInfoToUser($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateServiceUseSecurityIP extends V20140815Rpc
{
}

class DescribeCrossRegionBackupDBInstance extends V20140815Rpc
{
}

class DescribeAvailableCrossRegion extends V20140815Rpc
{
}

/**
 * @method string getBackupId()
 * @method $this withBackupId($value)
 */
class DescribeAvailableRecoveryTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceVpcMigrateInfo extends V20140815Rpc
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
 * @method string getReadInstanceId()
 * @method $this withReadInstanceId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReadDBInstanceDelay extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreTable extends V20140815Rpc
{
}

/**
 * @method string getTargetVpcId()
 * @method $this withTargetVpcId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetZoneId()
 * @method $this withTargetZoneId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 * @method string getTargetVSwitchId()
 * @method $this withTargetVSwitchId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateInstanceVpcNetworkType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTargetVSwitchId()
 * @method $this withTargetVSwitchId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetVpcId()
 * @method $this withTargetVpcId($value)
 * @method string getTargetZoneId()
 * @method $this withTargetZoneId($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 */
class MigrateToOtherRegion extends V20140815Rpc
{
}

/**
 * @method string getVpcTaskIdList()
 * @method $this withVpcTaskIdList($value)
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTaskIdList()
 * @method $this withTaskIdList($value)
 * @method string getVpcInstanceId()
 * @method $this withVpcInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyActiveOperationPendingTask extends V20140815Rpc
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
 * @method string getCurrentAVZ()
 * @method $this withCurrentAVZ($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTargetAVZ extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAvailableInstanceClass extends V20140815Rpc
{
}

/**
 * @method string getResourceId47()
 * @method string getResourceId48()
 * @method string getResourceId49()
 * @method string getTag2Key()
 * @method string getTag12Value()
 * @method string getResourceId40()
 * @method string getResourceId41()
 * @method string getResourceId42()
 * @method string getResourceId1()
 * @method string getResourceId43()
 * @method string getResourceId2()
 * @method string getResourceId44()
 * @method string getResourceId3()
 * @method string getResourceId45()
 * @method string getResourceId4()
 * @method string getResourceId46()
 * @method string getResourceId5()
 * @method string getResourceId6()
 * @method string getResourceId7()
 * @method string getResourceId8()
 * @method string getResourceId9()
 * @method string getTag15Value()
 * @method string getTag18Key()
 * @method string getTag8Value()
 * @method string getTag18Value()
 * @method string getResourceId36()
 * @method string getResourceId37()
 * @method string getResourceId38()
 * @method string getResourceId39()
 * @method string getResourceId30()
 * @method string getResourceId31()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceId32()
 * @method string getResourceId33()
 * @method string getResourceId34()
 * @method string getResourceId35()
 * @method string getTag16Key()
 * @method string getTag4Key()
 * @method string getResourceId25()
 * @method string getResourceId26()
 * @method string getResourceId27()
 * @method string getResourceId28()
 * @method string getResourceId29()
 * @method string getTag7Key()
 * @method string getTag12Key()
 * @method string getTag6Value()
 * @method string getResourceId20()
 * @method string getResourceId21()
 * @method string getTag21Key()
 * @method string getResourceId22()
 * @method string getResourceId23()
 * @method string getResourceId24()
 * @method string getTag14Key()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTag13Value()
 * @method string getResourceId14()
 * @method string getResourceId15()
 * @method string getTag10Key()
 * @method string getResourceId16()
 * @method string getResourceId17()
 * @method string getResourceId18()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceId19()
 * @method string getTag19Key()
 * @method string getResourceId10()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceId11()
 * @method string getTag5Value()
 * @method string getResourceId12()
 * @method string getResourceId13()
 * @method string getTag9Key()
 * @method string getTag19Value()
 * @method string getTag4Value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag17Key()
 * @method string getTag3Key()
 * @method string getTag1Value()
 * @method string getTag15Key()
 * @method string getTag11Value()
 * @method string getTag5Key()
 * @method string getTag14Value()
 * @method string getTag7Value()
 * @method string getTag20Key()
 * @method string getTag20Value()
 * @method string getTag17Value()
 * @method string getTag13Key()
 * @method string getTag9Value()
 * @method string getTag6Key()
 * @method string getTag10Value()
 * @method string getTag3Value()
 * @method string getTag21Value()
 * @method string getResourceId50()
 * @method string getTag16Value()
 * @method string getResourceId51()
 * @method string getTag1Key()
 * @method string getTag8Key()
 * @method string getTag11Key()
 * @method string getTag2Value()
 */
class ListTagResources extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId47($value)
    {
        $this->data['ResourceId47'] = $value;
        $this->options['query']['ResourceId.47'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId48($value)
    {
        $this->data['ResourceId48'] = $value;
        $this->options['query']['ResourceId.48'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId49($value)
    {
        $this->data['ResourceId49'] = $value;
        $this->options['query']['ResourceId.49'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Key($value)
    {
        $this->data['Tag2Key'] = $value;
        $this->options['query']['Tag.2.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag12Value($value)
    {
        $this->data['Tag12Value'] = $value;
        $this->options['query']['Tag.12.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId40($value)
    {
        $this->data['ResourceId40'] = $value;
        $this->options['query']['ResourceId.40'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId41($value)
    {
        $this->data['ResourceId41'] = $value;
        $this->options['query']['ResourceId.41'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId42($value)
    {
        $this->data['ResourceId42'] = $value;
        $this->options['query']['ResourceId.42'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId1($value)
    {
        $this->data['ResourceId1'] = $value;
        $this->options['query']['ResourceId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId43($value)
    {
        $this->data['ResourceId43'] = $value;
        $this->options['query']['ResourceId.43'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId2($value)
    {
        $this->data['ResourceId2'] = $value;
        $this->options['query']['ResourceId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId44($value)
    {
        $this->data['ResourceId44'] = $value;
        $this->options['query']['ResourceId.44'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId3($value)
    {
        $this->data['ResourceId3'] = $value;
        $this->options['query']['ResourceId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId45($value)
    {
        $this->data['ResourceId45'] = $value;
        $this->options['query']['ResourceId.45'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId4($value)
    {
        $this->data['ResourceId4'] = $value;
        $this->options['query']['ResourceId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId46($value)
    {
        $this->data['ResourceId46'] = $value;
        $this->options['query']['ResourceId.46'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId5($value)
    {
        $this->data['ResourceId5'] = $value;
        $this->options['query']['ResourceId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId6($value)
    {
        $this->data['ResourceId6'] = $value;
        $this->options['query']['ResourceId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId7($value)
    {
        $this->data['ResourceId7'] = $value;
        $this->options['query']['ResourceId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId8($value)
    {
        $this->data['ResourceId8'] = $value;
        $this->options['query']['ResourceId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId9($value)
    {
        $this->data['ResourceId9'] = $value;
        $this->options['query']['ResourceId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag15Value($value)
    {
        $this->data['Tag15Value'] = $value;
        $this->options['query']['Tag.15.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag18Key($value)
    {
        $this->data['Tag18Key'] = $value;
        $this->options['query']['Tag.18.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag8Value($value)
    {
        $this->data['Tag8Value'] = $value;
        $this->options['query']['Tag.8.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag18Value($value)
    {
        $this->data['Tag18Value'] = $value;
        $this->options['query']['Tag.18.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId36($value)
    {
        $this->data['ResourceId36'] = $value;
        $this->options['query']['ResourceId.36'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId37($value)
    {
        $this->data['ResourceId37'] = $value;
        $this->options['query']['ResourceId.37'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId38($value)
    {
        $this->data['ResourceId38'] = $value;
        $this->options['query']['ResourceId.38'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId39($value)
    {
        $this->data['ResourceId39'] = $value;
        $this->options['query']['ResourceId.39'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId30($value)
    {
        $this->data['ResourceId30'] = $value;
        $this->options['query']['ResourceId.30'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId31($value)
    {
        $this->data['ResourceId31'] = $value;
        $this->options['query']['ResourceId.31'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId32($value)
    {
        $this->data['ResourceId32'] = $value;
        $this->options['query']['ResourceId.32'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId33($value)
    {
        $this->data['ResourceId33'] = $value;
        $this->options['query']['ResourceId.33'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId34($value)
    {
        $this->data['ResourceId34'] = $value;
        $this->options['query']['ResourceId.34'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId35($value)
    {
        $this->data['ResourceId35'] = $value;
        $this->options['query']['ResourceId.35'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag16Key($value)
    {
        $this->data['Tag16Key'] = $value;
        $this->options['query']['Tag.16.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Key($value)
    {
        $this->data['Tag4Key'] = $value;
        $this->options['query']['Tag.4.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId25($value)
    {
        $this->data['ResourceId25'] = $value;
        $this->options['query']['ResourceId.25'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId26($value)
    {
        $this->data['ResourceId26'] = $value;
        $this->options['query']['ResourceId.26'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId27($value)
    {
        $this->data['ResourceId27'] = $value;
        $this->options['query']['ResourceId.27'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId28($value)
    {
        $this->data['ResourceId28'] = $value;
        $this->options['query']['ResourceId.28'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId29($value)
    {
        $this->data['ResourceId29'] = $value;
        $this->options['query']['ResourceId.29'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag7Key($value)
    {
        $this->data['Tag7Key'] = $value;
        $this->options['query']['Tag.7.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag12Key($value)
    {
        $this->data['Tag12Key'] = $value;
        $this->options['query']['Tag.12.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag6Value($value)
    {
        $this->data['Tag6Value'] = $value;
        $this->options['query']['Tag.6.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId20($value)
    {
        $this->data['ResourceId20'] = $value;
        $this->options['query']['ResourceId.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId21($value)
    {
        $this->data['ResourceId21'] = $value;
        $this->options['query']['ResourceId.21'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag21Key($value)
    {
        $this->data['Tag21Key'] = $value;
        $this->options['query']['Tag.21.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId22($value)
    {
        $this->data['ResourceId22'] = $value;
        $this->options['query']['ResourceId.22'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId23($value)
    {
        $this->data['ResourceId23'] = $value;
        $this->options['query']['ResourceId.23'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId24($value)
    {
        $this->data['ResourceId24'] = $value;
        $this->options['query']['ResourceId.24'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag14Key($value)
    {
        $this->data['Tag14Key'] = $value;
        $this->options['query']['Tag.14.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag13Value($value)
    {
        $this->data['Tag13Value'] = $value;
        $this->options['query']['Tag.13.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId14($value)
    {
        $this->data['ResourceId14'] = $value;
        $this->options['query']['ResourceId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId15($value)
    {
        $this->data['ResourceId15'] = $value;
        $this->options['query']['ResourceId.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag10Key($value)
    {
        $this->data['Tag10Key'] = $value;
        $this->options['query']['Tag.10.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId16($value)
    {
        $this->data['ResourceId16'] = $value;
        $this->options['query']['ResourceId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId17($value)
    {
        $this->data['ResourceId17'] = $value;
        $this->options['query']['ResourceId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId18($value)
    {
        $this->data['ResourceId18'] = $value;
        $this->options['query']['ResourceId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId19($value)
    {
        $this->data['ResourceId19'] = $value;
        $this->options['query']['ResourceId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag19Key($value)
    {
        $this->data['Tag19Key'] = $value;
        $this->options['query']['Tag.19.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId10($value)
    {
        $this->data['ResourceId10'] = $value;
        $this->options['query']['ResourceId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId11($value)
    {
        $this->data['ResourceId11'] = $value;
        $this->options['query']['ResourceId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Value($value)
    {
        $this->data['Tag5Value'] = $value;
        $this->options['query']['Tag.5.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId12($value)
    {
        $this->data['ResourceId12'] = $value;
        $this->options['query']['ResourceId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId13($value)
    {
        $this->data['ResourceId13'] = $value;
        $this->options['query']['ResourceId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag9Key($value)
    {
        $this->data['Tag9Key'] = $value;
        $this->options['query']['Tag.9.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag19Value($value)
    {
        $this->data['Tag19Value'] = $value;
        $this->options['query']['Tag.19.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Value($value)
    {
        $this->data['Tag4Value'] = $value;
        $this->options['query']['Tag.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag17Key($value)
    {
        $this->data['Tag17Key'] = $value;
        $this->options['query']['Tag.17.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Key($value)
    {
        $this->data['Tag3Key'] = $value;
        $this->options['query']['Tag.3.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Value($value)
    {
        $this->data['Tag1Value'] = $value;
        $this->options['query']['Tag.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag15Key($value)
    {
        $this->data['Tag15Key'] = $value;
        $this->options['query']['Tag.15.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag11Value($value)
    {
        $this->data['Tag11Value'] = $value;
        $this->options['query']['Tag.11.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Key($value)
    {
        $this->data['Tag5Key'] = $value;
        $this->options['query']['Tag.5.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag14Value($value)
    {
        $this->data['Tag14Value'] = $value;
        $this->options['query']['Tag.14.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag7Value($value)
    {
        $this->data['Tag7Value'] = $value;
        $this->options['query']['Tag.7.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag20Key($value)
    {
        $this->data['Tag20Key'] = $value;
        $this->options['query']['Tag.20.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag20Value($value)
    {
        $this->data['Tag20Value'] = $value;
        $this->options['query']['Tag.20.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag17Value($value)
    {
        $this->data['Tag17Value'] = $value;
        $this->options['query']['Tag.17.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag13Key($value)
    {
        $this->data['Tag13Key'] = $value;
        $this->options['query']['Tag.13.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag9Value($value)
    {
        $this->data['Tag9Value'] = $value;
        $this->options['query']['Tag.9.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag6Key($value)
    {
        $this->data['Tag6Key'] = $value;
        $this->options['query']['Tag.6.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag10Value($value)
    {
        $this->data['Tag10Value'] = $value;
        $this->options['query']['Tag.10.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Value($value)
    {
        $this->data['Tag3Value'] = $value;
        $this->options['query']['Tag.3.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag21Value($value)
    {
        $this->data['Tag21Value'] = $value;
        $this->options['query']['Tag.21.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId50($value)
    {
        $this->data['ResourceId50'] = $value;
        $this->options['query']['ResourceId.50'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag16Value($value)
    {
        $this->data['Tag16Value'] = $value;
        $this->options['query']['Tag.16.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId51($value)
    {
        $this->data['ResourceId51'] = $value;
        $this->options['query']['ResourceId.51'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Key($value)
    {
        $this->data['Tag1Key'] = $value;
        $this->options['query']['Tag.1.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag8Key($value)
    {
        $this->data['Tag8Key'] = $value;
        $this->options['query']['Tag.8.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag11Key($value)
    {
        $this->data['Tag11Key'] = $value;
        $this->options['query']['Tag.11.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Value($value)
    {
        $this->data['Tag2Value'] = $value;
        $this->options['query']['Tag.2.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId47()
 * @method string getResourceId48()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId49()
 * @method string getResourceId40()
 * @method string getResourceId41()
 * @method string getResourceId42()
 * @method string getTagKey9()
 * @method string getResourceId1()
 * @method string getResourceId43()
 * @method string getResourceId2()
 * @method string getResourceId44()
 * @method string getResourceId3()
 * @method string getResourceId45()
 * @method string getResourceId4()
 * @method string getResourceId46()
 * @method string getResourceId5()
 * @method string getTagKey4()
 * @method string getResourceId6()
 * @method string getTagKey3()
 * @method string getResourceId7()
 * @method string getTagKey2()
 * @method string getResourceId8()
 * @method string getTagKey1()
 * @method string getResourceId9()
 * @method string getTagKey8()
 * @method string getTagKey20()
 * @method string getTagKey7()
 * @method string getTagKey6()
 * @method string getTagKey5()
 * @method string getTagKey21()
 * @method string getResourceId36()
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceId37()
 * @method string getResourceId38()
 * @method string getResourceId39()
 * @method string getResourceId30()
 * @method string getResourceId31()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceId32()
 * @method string getResourceId33()
 * @method string getResourceId34()
 * @method string getResourceId35()
 * @method string getResourceId25()
 * @method string getResourceId26()
 * @method string getResourceId27()
 * @method string getResourceId28()
 * @method string getResourceId29()
 * @method string getResourceId20()
 * @method string getResourceId21()
 * @method string getResourceId22()
 * @method string getResourceId23()
 * @method string getResourceId24()
 * @method string getResourceId14()
 * @method string getResourceId15()
 * @method string getResourceId16()
 * @method string getTagKey19()
 * @method string getResourceId17()
 * @method string getTagKey18()
 * @method string getResourceId18()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceId19()
 * @method string getResourceId50()
 * @method string getResourceId51()
 * @method string getResourceId10()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceId11()
 * @method string getResourceId12()
 * @method string getResourceId13()
 * @method string getTagKey13()
 * @method string getTagKey12()
 * @method string getTagKey11()
 * @method string getTagKey10()
 * @method string getTagKey17()
 * @method string getTagKey16()
 * @method string getTagKey15()
 * @method string getTagKey14()
 */
class UntagResources extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId47($value)
    {
        $this->data['ResourceId47'] = $value;
        $this->options['query']['ResourceId.47'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId48($value)
    {
        $this->data['ResourceId48'] = $value;
        $this->options['query']['ResourceId.48'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId49($value)
    {
        $this->data['ResourceId49'] = $value;
        $this->options['query']['ResourceId.49'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId40($value)
    {
        $this->data['ResourceId40'] = $value;
        $this->options['query']['ResourceId.40'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId41($value)
    {
        $this->data['ResourceId41'] = $value;
        $this->options['query']['ResourceId.41'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId42($value)
    {
        $this->data['ResourceId42'] = $value;
        $this->options['query']['ResourceId.42'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey9($value)
    {
        $this->data['TagKey9'] = $value;
        $this->options['query']['TagKey.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId1($value)
    {
        $this->data['ResourceId1'] = $value;
        $this->options['query']['ResourceId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId43($value)
    {
        $this->data['ResourceId43'] = $value;
        $this->options['query']['ResourceId.43'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId2($value)
    {
        $this->data['ResourceId2'] = $value;
        $this->options['query']['ResourceId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId44($value)
    {
        $this->data['ResourceId44'] = $value;
        $this->options['query']['ResourceId.44'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId3($value)
    {
        $this->data['ResourceId3'] = $value;
        $this->options['query']['ResourceId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId45($value)
    {
        $this->data['ResourceId45'] = $value;
        $this->options['query']['ResourceId.45'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId4($value)
    {
        $this->data['ResourceId4'] = $value;
        $this->options['query']['ResourceId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId46($value)
    {
        $this->data['ResourceId46'] = $value;
        $this->options['query']['ResourceId.46'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId5($value)
    {
        $this->data['ResourceId5'] = $value;
        $this->options['query']['ResourceId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey4($value)
    {
        $this->data['TagKey4'] = $value;
        $this->options['query']['TagKey.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId6($value)
    {
        $this->data['ResourceId6'] = $value;
        $this->options['query']['ResourceId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey3($value)
    {
        $this->data['TagKey3'] = $value;
        $this->options['query']['TagKey.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId7($value)
    {
        $this->data['ResourceId7'] = $value;
        $this->options['query']['ResourceId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey2($value)
    {
        $this->data['TagKey2'] = $value;
        $this->options['query']['TagKey.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId8($value)
    {
        $this->data['ResourceId8'] = $value;
        $this->options['query']['ResourceId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey1($value)
    {
        $this->data['TagKey1'] = $value;
        $this->options['query']['TagKey.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId9($value)
    {
        $this->data['ResourceId9'] = $value;
        $this->options['query']['ResourceId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey8($value)
    {
        $this->data['TagKey8'] = $value;
        $this->options['query']['TagKey.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey20($value)
    {
        $this->data['TagKey20'] = $value;
        $this->options['query']['TagKey.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey7($value)
    {
        $this->data['TagKey7'] = $value;
        $this->options['query']['TagKey.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey6($value)
    {
        $this->data['TagKey6'] = $value;
        $this->options['query']['TagKey.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey5($value)
    {
        $this->data['TagKey5'] = $value;
        $this->options['query']['TagKey.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey21($value)
    {
        $this->data['TagKey21'] = $value;
        $this->options['query']['TagKey.21'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId36($value)
    {
        $this->data['ResourceId36'] = $value;
        $this->options['query']['ResourceId.36'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId37($value)
    {
        $this->data['ResourceId37'] = $value;
        $this->options['query']['ResourceId.37'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId38($value)
    {
        $this->data['ResourceId38'] = $value;
        $this->options['query']['ResourceId.38'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId39($value)
    {
        $this->data['ResourceId39'] = $value;
        $this->options['query']['ResourceId.39'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId30($value)
    {
        $this->data['ResourceId30'] = $value;
        $this->options['query']['ResourceId.30'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId31($value)
    {
        $this->data['ResourceId31'] = $value;
        $this->options['query']['ResourceId.31'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId32($value)
    {
        $this->data['ResourceId32'] = $value;
        $this->options['query']['ResourceId.32'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId33($value)
    {
        $this->data['ResourceId33'] = $value;
        $this->options['query']['ResourceId.33'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId34($value)
    {
        $this->data['ResourceId34'] = $value;
        $this->options['query']['ResourceId.34'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId35($value)
    {
        $this->data['ResourceId35'] = $value;
        $this->options['query']['ResourceId.35'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId25($value)
    {
        $this->data['ResourceId25'] = $value;
        $this->options['query']['ResourceId.25'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId26($value)
    {
        $this->data['ResourceId26'] = $value;
        $this->options['query']['ResourceId.26'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId27($value)
    {
        $this->data['ResourceId27'] = $value;
        $this->options['query']['ResourceId.27'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId28($value)
    {
        $this->data['ResourceId28'] = $value;
        $this->options['query']['ResourceId.28'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId29($value)
    {
        $this->data['ResourceId29'] = $value;
        $this->options['query']['ResourceId.29'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId20($value)
    {
        $this->data['ResourceId20'] = $value;
        $this->options['query']['ResourceId.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId21($value)
    {
        $this->data['ResourceId21'] = $value;
        $this->options['query']['ResourceId.21'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId22($value)
    {
        $this->data['ResourceId22'] = $value;
        $this->options['query']['ResourceId.22'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId23($value)
    {
        $this->data['ResourceId23'] = $value;
        $this->options['query']['ResourceId.23'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId24($value)
    {
        $this->data['ResourceId24'] = $value;
        $this->options['query']['ResourceId.24'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId14($value)
    {
        $this->data['ResourceId14'] = $value;
        $this->options['query']['ResourceId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId15($value)
    {
        $this->data['ResourceId15'] = $value;
        $this->options['query']['ResourceId.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId16($value)
    {
        $this->data['ResourceId16'] = $value;
        $this->options['query']['ResourceId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey19($value)
    {
        $this->data['TagKey19'] = $value;
        $this->options['query']['TagKey.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId17($value)
    {
        $this->data['ResourceId17'] = $value;
        $this->options['query']['ResourceId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey18($value)
    {
        $this->data['TagKey18'] = $value;
        $this->options['query']['TagKey.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId18($value)
    {
        $this->data['ResourceId18'] = $value;
        $this->options['query']['ResourceId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId19($value)
    {
        $this->data['ResourceId19'] = $value;
        $this->options['query']['ResourceId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId50($value)
    {
        $this->data['ResourceId50'] = $value;
        $this->options['query']['ResourceId.50'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId51($value)
    {
        $this->data['ResourceId51'] = $value;
        $this->options['query']['ResourceId.51'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId10($value)
    {
        $this->data['ResourceId10'] = $value;
        $this->options['query']['ResourceId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId11($value)
    {
        $this->data['ResourceId11'] = $value;
        $this->options['query']['ResourceId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId12($value)
    {
        $this->data['ResourceId12'] = $value;
        $this->options['query']['ResourceId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId13($value)
    {
        $this->data['ResourceId13'] = $value;
        $this->options['query']['ResourceId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey13($value)
    {
        $this->data['TagKey13'] = $value;
        $this->options['query']['TagKey.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey12($value)
    {
        $this->data['TagKey12'] = $value;
        $this->options['query']['TagKey.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey11($value)
    {
        $this->data['TagKey11'] = $value;
        $this->options['query']['TagKey.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey10($value)
    {
        $this->data['TagKey10'] = $value;
        $this->options['query']['TagKey.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey17($value)
    {
        $this->data['TagKey17'] = $value;
        $this->options['query']['TagKey.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey16($value)
    {
        $this->data['TagKey16'] = $value;
        $this->options['query']['TagKey.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey15($value)
    {
        $this->data['TagKey15'] = $value;
        $this->options['query']['TagKey.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey14($value)
    {
        $this->data['TagKey14'] = $value;
        $this->options['query']['TagKey.14'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId47()
 * @method string getResourceId48()
 * @method string getResourceId49()
 * @method string getTag2Key()
 * @method string getTag12Value()
 * @method string getResourceId40()
 * @method string getResourceId41()
 * @method string getResourceId42()
 * @method string getResourceId1()
 * @method string getResourceId43()
 * @method string getResourceId2()
 * @method string getResourceId44()
 * @method string getResourceId3()
 * @method string getResourceId45()
 * @method string getResourceId4()
 * @method string getResourceId46()
 * @method string getResourceId5()
 * @method string getResourceId6()
 * @method string getResourceId7()
 * @method string getResourceId8()
 * @method string getResourceId9()
 * @method string getTag15Value()
 * @method string getTag18Key()
 * @method string getTag8Value()
 * @method string getTag18Value()
 * @method string getResourceId36()
 * @method string getResourceId37()
 * @method string getResourceId38()
 * @method string getResourceId39()
 * @method string getResourceId30()
 * @method string getResourceId31()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceId32()
 * @method string getResourceId33()
 * @method string getResourceId34()
 * @method string getResourceId35()
 * @method string getTag16Key()
 * @method string getTag4Key()
 * @method string getResourceId25()
 * @method string getResourceId26()
 * @method string getResourceId27()
 * @method string getResourceId28()
 * @method string getResourceId29()
 * @method string getTag7Key()
 * @method string getTag12Key()
 * @method string getTag6Value()
 * @method string getResourceId20()
 * @method string getResourceId21()
 * @method string getTag21Key()
 * @method string getResourceId22()
 * @method string getResourceId23()
 * @method string getResourceId24()
 * @method string getTag14Key()
 * @method string getTag13Value()
 * @method string getResourceId14()
 * @method string getResourceId15()
 * @method string getTag10Key()
 * @method string getResourceId16()
 * @method string getResourceId17()
 * @method string getResourceId18()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceId19()
 * @method string getTag19Key()
 * @method string getResourceId10()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceId11()
 * @method string getTag5Value()
 * @method string getResourceId12()
 * @method string getResourceId13()
 * @method string getTag9Key()
 * @method string getTag19Value()
 * @method string getTag4Value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag17Key()
 * @method string getTag3Key()
 * @method string getTag1Value()
 * @method string getTag15Key()
 * @method string getTag11Value()
 * @method string getTag5Key()
 * @method string getTag14Value()
 * @method string getTag7Value()
 * @method string getTag20Key()
 * @method string getTag20Value()
 * @method string getTag17Value()
 * @method string getTag13Key()
 * @method string getTag9Value()
 * @method string getTag6Key()
 * @method string getTag10Value()
 * @method string getTag3Value()
 * @method string getTag21Value()
 * @method string getResourceId50()
 * @method string getTag16Value()
 * @method string getResourceId51()
 * @method string getTag1Key()
 * @method string getTag8Key()
 * @method string getTag11Key()
 * @method string getTag2Value()
 */
class TagResources extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId47($value)
    {
        $this->data['ResourceId47'] = $value;
        $this->options['query']['ResourceId.47'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId48($value)
    {
        $this->data['ResourceId48'] = $value;
        $this->options['query']['ResourceId.48'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId49($value)
    {
        $this->data['ResourceId49'] = $value;
        $this->options['query']['ResourceId.49'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Key($value)
    {
        $this->data['Tag2Key'] = $value;
        $this->options['query']['Tag.2.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag12Value($value)
    {
        $this->data['Tag12Value'] = $value;
        $this->options['query']['Tag.12.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId40($value)
    {
        $this->data['ResourceId40'] = $value;
        $this->options['query']['ResourceId.40'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId41($value)
    {
        $this->data['ResourceId41'] = $value;
        $this->options['query']['ResourceId.41'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId42($value)
    {
        $this->data['ResourceId42'] = $value;
        $this->options['query']['ResourceId.42'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId1($value)
    {
        $this->data['ResourceId1'] = $value;
        $this->options['query']['ResourceId.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId43($value)
    {
        $this->data['ResourceId43'] = $value;
        $this->options['query']['ResourceId.43'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId2($value)
    {
        $this->data['ResourceId2'] = $value;
        $this->options['query']['ResourceId.2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId44($value)
    {
        $this->data['ResourceId44'] = $value;
        $this->options['query']['ResourceId.44'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId3($value)
    {
        $this->data['ResourceId3'] = $value;
        $this->options['query']['ResourceId.3'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId45($value)
    {
        $this->data['ResourceId45'] = $value;
        $this->options['query']['ResourceId.45'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId4($value)
    {
        $this->data['ResourceId4'] = $value;
        $this->options['query']['ResourceId.4'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId46($value)
    {
        $this->data['ResourceId46'] = $value;
        $this->options['query']['ResourceId.46'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId5($value)
    {
        $this->data['ResourceId5'] = $value;
        $this->options['query']['ResourceId.5'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId6($value)
    {
        $this->data['ResourceId6'] = $value;
        $this->options['query']['ResourceId.6'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId7($value)
    {
        $this->data['ResourceId7'] = $value;
        $this->options['query']['ResourceId.7'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId8($value)
    {
        $this->data['ResourceId8'] = $value;
        $this->options['query']['ResourceId.8'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId9($value)
    {
        $this->data['ResourceId9'] = $value;
        $this->options['query']['ResourceId.9'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag15Value($value)
    {
        $this->data['Tag15Value'] = $value;
        $this->options['query']['Tag.15.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag18Key($value)
    {
        $this->data['Tag18Key'] = $value;
        $this->options['query']['Tag.18.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag8Value($value)
    {
        $this->data['Tag8Value'] = $value;
        $this->options['query']['Tag.8.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag18Value($value)
    {
        $this->data['Tag18Value'] = $value;
        $this->options['query']['Tag.18.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId36($value)
    {
        $this->data['ResourceId36'] = $value;
        $this->options['query']['ResourceId.36'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId37($value)
    {
        $this->data['ResourceId37'] = $value;
        $this->options['query']['ResourceId.37'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId38($value)
    {
        $this->data['ResourceId38'] = $value;
        $this->options['query']['ResourceId.38'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId39($value)
    {
        $this->data['ResourceId39'] = $value;
        $this->options['query']['ResourceId.39'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId30($value)
    {
        $this->data['ResourceId30'] = $value;
        $this->options['query']['ResourceId.30'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId31($value)
    {
        $this->data['ResourceId31'] = $value;
        $this->options['query']['ResourceId.31'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId32($value)
    {
        $this->data['ResourceId32'] = $value;
        $this->options['query']['ResourceId.32'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId33($value)
    {
        $this->data['ResourceId33'] = $value;
        $this->options['query']['ResourceId.33'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId34($value)
    {
        $this->data['ResourceId34'] = $value;
        $this->options['query']['ResourceId.34'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId35($value)
    {
        $this->data['ResourceId35'] = $value;
        $this->options['query']['ResourceId.35'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag16Key($value)
    {
        $this->data['Tag16Key'] = $value;
        $this->options['query']['Tag.16.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Key($value)
    {
        $this->data['Tag4Key'] = $value;
        $this->options['query']['Tag.4.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId25($value)
    {
        $this->data['ResourceId25'] = $value;
        $this->options['query']['ResourceId.25'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId26($value)
    {
        $this->data['ResourceId26'] = $value;
        $this->options['query']['ResourceId.26'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId27($value)
    {
        $this->data['ResourceId27'] = $value;
        $this->options['query']['ResourceId.27'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId28($value)
    {
        $this->data['ResourceId28'] = $value;
        $this->options['query']['ResourceId.28'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId29($value)
    {
        $this->data['ResourceId29'] = $value;
        $this->options['query']['ResourceId.29'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag7Key($value)
    {
        $this->data['Tag7Key'] = $value;
        $this->options['query']['Tag.7.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag12Key($value)
    {
        $this->data['Tag12Key'] = $value;
        $this->options['query']['Tag.12.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag6Value($value)
    {
        $this->data['Tag6Value'] = $value;
        $this->options['query']['Tag.6.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId20($value)
    {
        $this->data['ResourceId20'] = $value;
        $this->options['query']['ResourceId.20'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId21($value)
    {
        $this->data['ResourceId21'] = $value;
        $this->options['query']['ResourceId.21'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag21Key($value)
    {
        $this->data['Tag21Key'] = $value;
        $this->options['query']['Tag.21.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId22($value)
    {
        $this->data['ResourceId22'] = $value;
        $this->options['query']['ResourceId.22'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId23($value)
    {
        $this->data['ResourceId23'] = $value;
        $this->options['query']['ResourceId.23'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId24($value)
    {
        $this->data['ResourceId24'] = $value;
        $this->options['query']['ResourceId.24'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag14Key($value)
    {
        $this->data['Tag14Key'] = $value;
        $this->options['query']['Tag.14.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag13Value($value)
    {
        $this->data['Tag13Value'] = $value;
        $this->options['query']['Tag.13.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId14($value)
    {
        $this->data['ResourceId14'] = $value;
        $this->options['query']['ResourceId.14'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId15($value)
    {
        $this->data['ResourceId15'] = $value;
        $this->options['query']['ResourceId.15'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag10Key($value)
    {
        $this->data['Tag10Key'] = $value;
        $this->options['query']['Tag.10.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId16($value)
    {
        $this->data['ResourceId16'] = $value;
        $this->options['query']['ResourceId.16'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId17($value)
    {
        $this->data['ResourceId17'] = $value;
        $this->options['query']['ResourceId.17'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId18($value)
    {
        $this->data['ResourceId18'] = $value;
        $this->options['query']['ResourceId.18'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId19($value)
    {
        $this->data['ResourceId19'] = $value;
        $this->options['query']['ResourceId.19'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag19Key($value)
    {
        $this->data['Tag19Key'] = $value;
        $this->options['query']['Tag.19.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId10($value)
    {
        $this->data['ResourceId10'] = $value;
        $this->options['query']['ResourceId.10'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId11($value)
    {
        $this->data['ResourceId11'] = $value;
        $this->options['query']['ResourceId.11'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Value($value)
    {
        $this->data['Tag5Value'] = $value;
        $this->options['query']['Tag.5.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId12($value)
    {
        $this->data['ResourceId12'] = $value;
        $this->options['query']['ResourceId.12'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId13($value)
    {
        $this->data['ResourceId13'] = $value;
        $this->options['query']['ResourceId.13'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag9Key($value)
    {
        $this->data['Tag9Key'] = $value;
        $this->options['query']['Tag.9.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag19Value($value)
    {
        $this->data['Tag19Value'] = $value;
        $this->options['query']['Tag.19.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4Value($value)
    {
        $this->data['Tag4Value'] = $value;
        $this->options['query']['Tag.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag17Key($value)
    {
        $this->data['Tag17Key'] = $value;
        $this->options['query']['Tag.17.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Key($value)
    {
        $this->data['Tag3Key'] = $value;
        $this->options['query']['Tag.3.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Value($value)
    {
        $this->data['Tag1Value'] = $value;
        $this->options['query']['Tag.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag15Key($value)
    {
        $this->data['Tag15Key'] = $value;
        $this->options['query']['Tag.15.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag11Value($value)
    {
        $this->data['Tag11Value'] = $value;
        $this->options['query']['Tag.11.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5Key($value)
    {
        $this->data['Tag5Key'] = $value;
        $this->options['query']['Tag.5.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag14Value($value)
    {
        $this->data['Tag14Value'] = $value;
        $this->options['query']['Tag.14.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag7Value($value)
    {
        $this->data['Tag7Value'] = $value;
        $this->options['query']['Tag.7.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag20Key($value)
    {
        $this->data['Tag20Key'] = $value;
        $this->options['query']['Tag.20.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag20Value($value)
    {
        $this->data['Tag20Value'] = $value;
        $this->options['query']['Tag.20.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag17Value($value)
    {
        $this->data['Tag17Value'] = $value;
        $this->options['query']['Tag.17.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag13Key($value)
    {
        $this->data['Tag13Key'] = $value;
        $this->options['query']['Tag.13.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag9Value($value)
    {
        $this->data['Tag9Value'] = $value;
        $this->options['query']['Tag.9.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag6Key($value)
    {
        $this->data['Tag6Key'] = $value;
        $this->options['query']['Tag.6.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag10Value($value)
    {
        $this->data['Tag10Value'] = $value;
        $this->options['query']['Tag.10.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3Value($value)
    {
        $this->data['Tag3Value'] = $value;
        $this->options['query']['Tag.3.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag21Value($value)
    {
        $this->data['Tag21Value'] = $value;
        $this->options['query']['Tag.21.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId50($value)
    {
        $this->data['ResourceId50'] = $value;
        $this->options['query']['ResourceId.50'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag16Value($value)
    {
        $this->data['Tag16Value'] = $value;
        $this->options['query']['Tag.16.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId51($value)
    {
        $this->data['ResourceId51'] = $value;
        $this->options['query']['ResourceId.51'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1Key($value)
    {
        $this->data['Tag1Key'] = $value;
        $this->options['query']['Tag.1.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag8Key($value)
    {
        $this->data['Tag8Key'] = $value;
        $this->options['query']['Tag.8.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag11Key($value)
    {
        $this->data['Tag11Key'] = $value;
        $this->options['query']['Tag.11.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2Value($value)
    {
        $this->data['Tag2Value'] = $value;
        $this->options['query']['Tag.2.Value'] = $value;

        return $this;
    }
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeProxyFunctionSupport extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getBackupSetID()
 * @method $this withBackupSetID($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGetDbName()
 * @method $this withGetDbName($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class DescribeMetaList extends V20140815Rpc
{
}

/**
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 */
class RequestServiceOfCloudDBExpert extends V20140815Rpc
{
}

/**
 * @method string getServiceRequestParam()
 * @method $this withServiceRequestParam($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServiceRequestType()
 * @method $this withServiceRequestType($value)
 */
class DescribeCloudDbExpertService extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class AddDBInstanceNetworkType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckInstanceExist extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMinAvgConsume()
 * @method $this withMinAvgConsume($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMaxRecordsPerPage()
 * @method $this withMaxRecordsPerPage($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxAvgConsume()
 * @method $this withMaxAvgConsume($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getMinAvgScanRows()
 * @method $this withMinAvgScanRows($value)
 * @method string getSqType()
 * @method $this withSqType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getPagingId()
 * @method $this withPagingId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxAvgScanRows()
 * @method $this withMaxAvgScanRows($value)
 */
class DescribeTemplatesList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeLogBackupFiles extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeActiveOperationTask extends V20140815Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SwitchDBInstanceVpc extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class MigrateSecurityIPMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCollationTimeZones extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTimezone()
 * @method $this withTimezone($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCollation()
 * @method $this withCollation($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCollationTimeZone extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSyncUserPrivilege()
 * @method $this withSyncUserPrivilege($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CopyDatabaseBetweenInstances extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class RecoveryDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAvailableResource extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReadSQLReplicationTime()
 * @method $this withReadSQLReplicationTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReadonlyInstanceDelayReplicationTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSqlDelay()
 * @method $this withSqlDelay($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyMySQLDBInstanceDelay extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCheckDBMode()
 * @method $this withCheckDBMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateOnlineDatabaseTask extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getUpgradeTime()
 * @method $this withUpgradeTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeDBInstanceKernelVersion extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProxyConfigurationKey()
 * @method $this withProxyConfigurationKey($value)
 * @method string getProxyConfigurationValue()
 * @method $this withProxyConfigurationValue($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceProxyConfiguration extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceProxyConfiguration extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSecurityGroupConfiguration extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySecurityGroupConfiguration extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeMigrateTasks extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOssDownloads extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIsOnlineDB()
 * @method $this withIsOnlineDB($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOssObjectPositions()
 * @method $this withOssObjectPositions($value)
 * @method string getOSSUrls()
 * @method $this withOSSUrls($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getCheckDBMode()
 * @method $this withCheckDBMode($value)
 */
class CreateMigrateTask extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIsOnlineDB()
 * @method $this withIsOnlineDB($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOSSUrls()
 * @method $this withOSSUrls($value)
 */
class CreateMigrateTaskForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeMigrateTasksForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMigrateTaskId()
 * @method $this withMigrateTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOssDownloadsForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetAccount extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstancesAsCsv extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceNetworkExpireTime extends V20140815Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getDomainMode()
 * @method $this withDomainMode($value)
 * @method string getReplicaDescription()
 * @method $this withReplicaDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 * @method string getReplicaMode()
 * @method $this withReplicaMode($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstanceReplica extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getInstanceUsedType()
 * @method $this withInstanceUsedType($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPromotionCode()
 * @method $this withPromotionCode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTimeType()
 * @method $this withTimeType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeRenewalPrice extends V20140815Rpc
{
}

/**
 * @method string getReplicaDescription()
 * @method $this withReplicaDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaDescription extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 */
class RenewInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupFile()
 * @method $this withBackupFile($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckRecoveryConditions extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTaskInfo extends V20140815Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyInstanceAutoRenewalAttribute extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProxyId()
 */
class DescribeInstanceAutoRenewalAttribute extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyResourceGroup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getDistributionType()
 * @method $this withDistributionType($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxDelayTime()
 * @method $this withMaxDelayTime($value)
 */
class AllocateReadWriteSplittingConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getDistributionType()
 * @method $this withDistributionType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxDelayTime()
 * @method $this withMaxDelayTime($value)
 */
class ModifyReadWriteSplittingConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseReadWriteSplittingConnection extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CalculateDBInstanceWeight extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSpecifyCount()
 * @method $this withSpecifyCount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceUseType()
 * @method $this withDBInstanceUseType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CheckResource extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCharacterSetName extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBackup extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDiagnosticReportList extends V20140815Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class CreateDiagnosticReport extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CloneDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeOperatorPermission extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getProxyId()
 */
class DescribeDBInstanceByTags extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProxyId()
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeTags extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 */
class ModifyDBInstanceTDE extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceSSL extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceTDE extends V20140815Rpc
{
}

/**
 * @method string getPrivileges()
 * @method $this withPrivileges($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getExpiredTime()
 * @method $this withExpiredTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GrantOperatorPermission extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceSSL extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSQLLogFiles extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMonitor extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStoragePeriod()
 * @method $this withStoragePeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSQLCollectorStatus()
 * @method $this withSQLCollectorStatus($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySQLCollectorPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceMonitor extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSQLReports extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class SwitchDBInstanceHA extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSyncMode()
 * @method $this withSyncMode($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHAMode()
 * @method $this withHAMode($value)
 */
class ModifyDBInstanceHAConfig extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceHAConfig extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWhitelistNetworkType()
 * @method $this withWhitelistNetworkType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceIPArrayList extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSQLLogReportList extends V20140815Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends V20140815Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag3key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag1value()
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getSortMethod()
 * @method $this withSortMethod($value)
 * @method string getTag2value()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTag4key()
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 */
class DescribeDBInstancesByPerformance extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExpirePeriod()
 * @method $this withExpirePeriod($value)
 * @method string getProxyId()
 */
class DescribeDBInstancesByExpireTime extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getTag3key()
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceStatus()
 * @method $this withDBInstanceStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getDBInstanceType()
 * @method $this withDBInstanceType($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getTag1key()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTag2value()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTag4key()
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class DescribeDBInstances extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateReadOnlyDBInstance extends V20140815Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getSystemDBCharset()
 * @method $this withSystemDBCharset($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getDBInstanceNetType()
 * @method $this withDBInstanceNetType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getRoleARN()
 * @method $this withRoleARN($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateInstancePublicConnection extends V20140815Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceConnectionMode extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getDBInstanceNetRWSplitType()
 * @method $this withDBInstanceNetRWSplitType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceNetInfo extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getConnectionStringType()
 * @method $this withConnectionStringType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SwitchDBInstanceNetType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends V20140815Rpc
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
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getReadWriteSplittingPrivateIpAddress()
 * @method $this withReadWriteSplittingPrivateIpAddress($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getReadWriteSplittingClassicExpiredDays()
 * @method $this withReadWriteSplittingClassicExpiredDays($value)
 */
class ModifyDBInstanceNetworkType extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ModifyDBInstanceConnectionString extends V20140815Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag3key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag1value()
 * @method string getTag2value()
 * @method string getTag4key()
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 */
class AddTagsToResource extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class CreateAccount extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckAccountNameAvailable extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImportId()
 * @method $this withImportId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelImport extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDatabase extends V20140815Rpc
{
}

/**
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupStrategy()
 * @method $this withBackupStrategy($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 */
class CreateBackup extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAccount extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateTempDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCompressType()
 * @method $this withCompressType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupPolicyMode()
 * @method $this withBackupPolicyMode($value)
 */
class DescribeBackupPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAccounts extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImportId()
 * @method $this withImportId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescibeImportsFromDatabase extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeBinlogFiles extends V20140815Rpc
{
}

/**
 * @method string getBackupJobId()
 * @method $this withBackupJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFlag()
 * @method $this withFlag($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackupJobStatus()
 * @method $this withBackupJobStatus($value)
 */
class DescribeBackupTasks extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupLocation()
 * @method $this withBackupLocation($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackups extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeErrorLogs extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeDBInstancePerformance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBStatus()
 * @method $this withDBStatus($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDatabases extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeModifyParameterLog extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeParameters extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegions extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeParameterTemplates extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSortKey()
 * @method $this withSortKey($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSlowLogs extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSQLHASH()
 * @method $this withSQLHASH($value)
 */
class DescribeSlowLogRecords extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeResourceUsage extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeTasks extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSQLLogReports extends V20140815Rpc
{
}

/**
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeSQLLogRecords extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 */
class GrantAccountPrivilege extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getZoneIdSlave1()
 * @method $this withZoneIdSlave1($value)
 * @method string getZoneIdSlave2()
 * @method $this withZoneIdSlave2($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class MigrateToOtherZone extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImportDataForSQLServer extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBInfo()
 * @method $this withDBInfo($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImportDatabaseBetweenInstances extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceDescription extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBDescription extends V20140815Rpc
{
}

/**
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLocalLogRetentionHours()
 * @method $this withLocalLogRetentionHours($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLogBackupFrequency()
 * @method $this withLogBackupFrequency($value)
 * @method string getCompressType()
 * @method $this withCompressType($value)
 * @method string getBackupLog()
 * @method $this withBackupLog($value)
 * @method string getLocalLogRetentionSpace()
 * @method $this withLocalLogRetentionSpace($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDuplication()
 * @method $this withDuplication($value)
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getDuplicationContent()
 * @method $this withDuplicationContent($value)
 * @method string getHighSpaceUsageProtection()
 * @method $this withHighSpaceUsageProtection($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDuplicationLocation()
 * @method $this withDuplicationLocation($value)
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 * @method string getBackupPolicyMode()
 * @method $this withBackupPolicyMode($value)
 */
class ModifyBackupPolicy extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class ModifyAccountDescription extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getForcerestart()
 * @method $this withForcerestart($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameter extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ModifyDBInstanceSpec extends V20140815Rpc
{
}

/**
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMaintainTime extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PurgeDBInstanceLog extends V20140815Rpc
{
}

/**
 * @method string getDBInstanceIPArrayName()
 * @method $this withDBInstanceIPArrayName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getWhitelistNetworkType()
 * @method $this withWhitelistNetworkType($value)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this withDBInstanceIPArrayAttribute($value)
 * @method string getSecurityIPType()
 * @method $this withSecurityIPType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifySecurityIps extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetAccountPassword extends V20140815Rpc
{
}

/**
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTag2key()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTag3key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTag5value()
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTag1key()
 * @method string getTag1value()
 * @method string getTag2value()
 * @method string getTag4key()
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTag3value()
 * @method string getProxyId()
 */
class RemoveTagsFromResource extends V20140815Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4value($value)
    {
        $this->data['Tag4value'] = $value;
        $this->options['query']['Tag.4.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2key($value)
    {
        $this->data['Tag2key'] = $value;
        $this->options['query']['Tag.2.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5key($value)
    {
        $this->data['Tag5key'] = $value;
        $this->options['query']['Tag.5.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3key($value)
    {
        $this->data['Tag3key'] = $value;
        $this->options['query']['Tag.3.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag5value($value)
    {
        $this->data['Tag5value'] = $value;
        $this->options['query']['Tag.5.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1key($value)
    {
        $this->data['Tag1key'] = $value;
        $this->options['query']['Tag.1.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag1value($value)
    {
        $this->data['Tag1value'] = $value;
        $this->options['query']['Tag.1.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag2value($value)
    {
        $this->data['Tag2value'] = $value;
        $this->options['query']['Tag.2.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag4key($value)
    {
        $this->data['Tag4key'] = $value;
        $this->options['query']['Tag.4.key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag3value($value)
    {
        $this->data['Tag3value'] = $value;
        $this->options['query']['Tag.3.value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceStorageType()
 * @method $this withDBInstanceStorageType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class UpgradeDBInstanceEngineVersion extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeAccountPrivilege extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreDBInstance extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetAccountForPG extends V20140815Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateInstancePrivateConnection extends V20140815Rpc
{
}
