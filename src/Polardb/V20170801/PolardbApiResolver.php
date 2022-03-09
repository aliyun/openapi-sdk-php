<?php

namespace AlibabaCloud\Polardb\V20170801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelScheduleTasks cancelScheduleTasks(array $options = [])
 * @method CheckAccountName checkAccountName(array $options = [])
 * @method CheckDBName checkDBName(array $options = [])
 * @method CloseDBClusterMigration closeDBClusterMigration(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method CreateDBCluster createDBCluster(array $options = [])
 * @method CreateDBClusterEndpoint createDBClusterEndpoint(array $options = [])
 * @method CreateDBEndpointAddress createDBEndpointAddress(array $options = [])
 * @method CreateDBLink createDBLink(array $options = [])
 * @method CreateDBNodes createDBNodes(array $options = [])
 * @method CreateGlobalDatabaseNetwork createGlobalDatabaseNetwork(array $options = [])
 * @method CreateParameterGroup createParameterGroup(array $options = [])
 * @method CreateStoragePlan createStoragePlan(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteBackup deleteBackup(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteDBCluster deleteDBCluster(array $options = [])
 * @method DeleteDBClusterEndpoint deleteDBClusterEndpoint(array $options = [])
 * @method DeleteDBEndpointAddress deleteDBEndpointAddress(array $options = [])
 * @method DeleteDBLink deleteDBLink(array $options = [])
 * @method DeleteDBNodes deleteDBNodes(array $options = [])
 * @method DeleteGlobalDatabaseNetwork deleteGlobalDatabaseNetwork(array $options = [])
 * @method DeleteMaskingRules deleteMaskingRules(array $options = [])
 * @method DeleteParameterGroup deleteParameterGroup(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeAutoRenewAttribute describeAutoRenewAttribute(array $options = [])
 * @method DescribeBackupLogs describeBackupLogs(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeBackupTasks describeBackupTasks(array $options = [])
 * @method DescribeCharacterSetName describeCharacterSetName(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeDBClusterAccessWhitelist describeDBClusterAccessWhitelist(array $options = [])
 * @method DescribeDBClusterAttribute describeDBClusterAttribute(array $options = [])
 * @method DescribeDBClusterAuditLogCollector describeDBClusterAuditLogCollector(array $options = [])
 * @method DescribeDBClusterAvailableResources describeDBClusterAvailableResources(array $options = [])
 * @method DescribeDBClusterEndpoints describeDBClusterEndpoints(array $options = [])
 * @method DescribeDBClusterMigration describeDBClusterMigration(array $options = [])
 * @method DescribeDBClusterMonitor describeDBClusterMonitor(array $options = [])
 * @method DescribeDBClusterParameters describeDBClusterParameters(array $options = [])
 * @method DescribeDBClusterPerformance describeDBClusterPerformance(array $options = [])
 * @method DescribeDBClusters describeDBClusters(array $options = [])
 * @method DescribeDBClusterSSL describeDBClusterSSL(array $options = [])
 * @method DescribeDBClustersWithBackups describeDBClustersWithBackups(array $options = [])
 * @method DescribeDBClusterTDE describeDBClusterTDE(array $options = [])
 * @method DescribeDBClusterVersion describeDBClusterVersion(array $options = [])
 * @method DescribeDBInitializeVariable describeDBInitializeVariable(array $options = [])
 * @method DescribeDBLinks describeDBLinks(array $options = [])
 * @method DescribeDBNodePerformance describeDBNodePerformance(array $options = [])
 * @method DescribeDBNodesParameters describeDBNodesParameters(array $options = [])
 * @method DescribeDBProxyPerformance describeDBProxyPerformance(array $options = [])
 * @method DescribeDetachedBackups describeDetachedBackups(array $options = [])
 * @method DescribeGlobalDatabaseNetwork describeGlobalDatabaseNetwork(array $options = [])
 * @method DescribeGlobalDatabaseNetworks describeGlobalDatabaseNetworks(array $options = [])
 * @method DescribeLogBackupPolicy describeLogBackupPolicy(array $options = [])
 * @method DescribeMaskingRules describeMaskingRules(array $options = [])
 * @method DescribeMetaList describeMetaList(array $options = [])
 * @method DescribeParameterGroup describeParameterGroup(array $options = [])
 * @method DescribeParameterGroups describeParameterGroups(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method DescribePendingMaintenanceAction describePendingMaintenanceAction(array $options = [])
 * @method DescribePendingMaintenanceActions describePendingMaintenanceActions(array $options = [])
 * @method DescribePolarSQLCollectorPolicy describePolarSQLCollectorPolicy(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeScheduleTasks describeScheduleTasks(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeStoragePlan describeStoragePlan(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method FailoverDBCluster failoverDBCluster(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagResourcesForRegion listTagResourcesForRegion(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyAccountPassword modifyAccountPassword(array $options = [])
 * @method ModifyAutoRenewAttribute modifyAutoRenewAttribute(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyDBClusterAccessWhitelist modifyDBClusterAccessWhitelist(array $options = [])
 * @method ModifyDBClusterAndNodesParameters modifyDBClusterAndNodesParameters(array $options = [])
 * @method ModifyDBClusterAuditLogCollector modifyDBClusterAuditLogCollector(array $options = [])
 * @method ModifyDBClusterDescription modifyDBClusterDescription(array $options = [])
 * @method ModifyDBClusterEndpoint modifyDBClusterEndpoint(array $options = [])
 * @method ModifyDBClusterMaintainTime modifyDBClusterMaintainTime(array $options = [])
 * @method ModifyDBClusterMigration modifyDBClusterMigration(array $options = [])
 * @method ModifyDBClusterMonitor modifyDBClusterMonitor(array $options = [])
 * @method ModifyDBClusterParameters modifyDBClusterParameters(array $options = [])
 * @method ModifyDBClusterPrimaryZone modifyDBClusterPrimaryZone(array $options = [])
 * @method ModifyDBClusterSSL modifyDBClusterSSL(array $options = [])
 * @method ModifyDBClusterTDE modifyDBClusterTDE(array $options = [])
 * @method ModifyDBDescription modifyDBDescription(array $options = [])
 * @method ModifyDBEndpointAddress modifyDBEndpointAddress(array $options = [])
 * @method ModifyDBNodeClass modifyDBNodeClass(array $options = [])
 * @method ModifyDBNodeHotReplicaMode modifyDBNodeHotReplicaMode(array $options = [])
 * @method ModifyDBNodesParameters modifyDBNodesParameters(array $options = [])
 * @method ModifyGlobalDatabaseNetwork modifyGlobalDatabaseNetwork(array $options = [])
 * @method ModifyLogBackupPolicy modifyLogBackupPolicy(array $options = [])
 * @method ModifyMaskingRules modifyMaskingRules(array $options = [])
 * @method ModifyPendingMaintenanceAction modifyPendingMaintenanceAction(array $options = [])
 * @method RefreshProxyLevel refreshProxyLevel(array $options = [])
 * @method RemoveDBClusterFromGDN removeDBClusterFromGDN(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method RestartDBNode restartDBNode(array $options = [])
 * @method RestoreTable restoreTable(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TempModifyDBNode tempModifyDBNode(array $options = [])
 * @method TransformDBClusterPayType transformDBClusterPayType(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpgradeDBClusterMinorVersion upgradeDBClusterMinorVersion(array $options = [])
 * @method UpgradeDBClusterVersion upgradeDBClusterVersion(array $options = [])
 */
class PolardbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'polardb';

    /** @var string */
    public $version = '2017-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'polardb';
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
class CancelScheduleTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
class CheckAccountName extends Rpc
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
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CheckDBName extends Rpc
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
 * @method string getContinueEnableBinlog()
 * @method $this withContinueEnableBinlog($value)
 */
class CloseDBClusterMigration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
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
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCollate()
 * @method $this withCollate($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getCtype()
 * @method $this withCtype($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 */
class CreateDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getCreationCategory()
 * @method $this withCreationCategory($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getCreationOption()
 * @method $this withCreationOption($value)
 * @method string getSourceResourceId()
 * @method $this withSourceResourceId($value)
 * @method string getBackupRetentionPolicyOnClusterDeletion()
 * @method $this withBackupRetentionPolicyOnClusterDeletion($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getDBMinorVersion()
 * @method $this withDBMinorVersion($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 * @method string getLowerCaseTableNames()
 * @method $this withLowerCaseTableNames($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDefaultTimeZone()
 * @method $this withDefaultTimeZone($value)
 * @method string getClusterNetworkType()
 * @method $this withClusterNetworkType($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getCloneDataPoint()
 * @method $this withCloneDataPoint($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDBCluster extends Rpc
{
}

/**
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getDBEndpointDescription()
 * @method $this withDBEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 */
class CreateDBClusterEndpoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 */
class CreateDBEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceDBName()
 * @method $this withSourceDBName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTargetDBName()
 * @method $this withTargetDBName($value)
 * @method string getTargetIp()
 * @method $this withTargetIp($value)
 * @method string getDBLinkName()
 * @method $this withDBLinkName($value)
 * @method string getTargetPort()
 * @method $this withTargetPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTargetDBInstanceName()
 * @method $this withTargetDBInstanceName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTargetDBPasswd()
 * @method $this withTargetDBPasswd($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetDBAccount()
 * @method $this withTargetDBAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateDBLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointBindList()
 * @method $this withEndpointBindList($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method array getDBNode()
 * @method string getImciSwitch()
 * @method $this withImciSwitch($value)
 */
class CreateDBNodes extends Rpc
{

    /**
     * @param array $dBNode
     *
     * @return $this
     */
	public function withDBNode(array $dBNode)
	{
	    $this->data['DBNode'] = $dBNode;
		foreach ($dBNode as $depth1 => $depth1Value) {
			if(isset($depth1Value['TargetClass'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.TargetClass'] = $depth1Value['TargetClass'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNDescription()
 * @method $this withGDNDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateGlobalDatabaseNetwork extends Rpc
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
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getParameterGroupName()
 * @method $this withParameterGroupName($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getParameterGroupDesc()
 * @method $this withParameterGroupDesc($value)
 */
class CreateParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
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
 * @method string getStorageClass()
 * @method $this withStorageClass($value)
 */
class CreateStoragePlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBackup extends Rpc
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
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DeleteDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupRetentionPolicyOnClusterDeletion()
 * @method $this withBackupRetentionPolicyOnClusterDeletion($value)
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBClusterEndpoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 */
class DeleteDBEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBLinkName()
 * @method $this withDBLinkName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getDBNodeId()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBNodes extends Rpc
{

    /**
     * @param array $dBNodeId
     *
     * @return $this
     */
	public function withDBNodeId(array $dBNodeId)
	{
	    $this->data['DBNodeId'] = $dBNodeId;
		foreach ($dBNodeId as $i => $iValue) {
			$this->options['query']['DBNodeId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteGlobalDatabaseNetwork extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class DeleteMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteParameterGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
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
class DescribeAccounts extends Rpc
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupLogs extends Rpc
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
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackups extends Rpc
{
}

/**
 * @method string getBackupJobId()
 * @method $this withBackupJobId($value)
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
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackupTasks extends Rpc
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
class DescribeCharacterSetName extends Rpc
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
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeDatabases extends Rpc
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
class DescribeDBClusterAccessWhitelist extends Rpc
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
class DescribeDBClusterAuditLogCollector extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class DescribeDBClusterAvailableResources extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterEndpoints extends Rpc
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
class DescribeDBClusterMigration extends Rpc
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
class DescribeDBClusterMonitor extends Rpc
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
class DescribeDBClusterParameters extends Rpc
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
 * @method string getMetric()
 * @method $this withMetric($value)
 */
class DescribeDBClusterPerformance extends Rpc
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
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
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
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
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
class DescribeDBClusterSSL extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getIsDeleted()
 * @method $this withIsDeleted($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeDBClustersWithBackups extends Rpc
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
class DescribeDBClusterTDE extends Rpc
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
class DescribeDBClusterVersion extends Rpc
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
class DescribeDBInitializeVariable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBLinkName()
 * @method $this withDBLinkName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBLinks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
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
 * @method string getMetric()
 * @method $this withMetric($value)
 */
class DescribeDBNodePerformance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBNodesParameters extends Rpc
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
 * @method string getMetric()
 * @method $this withMetric($value)
 */
class DescribeDBProxyPerformance extends Rpc
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
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeDetachedBackups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGlobalDatabaseNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
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
class DescribeGlobalDatabaseNetworks extends Rpc
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
class DescribeLogBackupPolicy extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class DescribeMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGetDbName()
 * @method $this withGetDbName($value)
 */
class DescribeMetaList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeParameterGroup extends Rpc
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
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 */
class DescribeParameterGroups extends Rpc
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
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 */
class DescribeParameterTemplates extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribePendingMaintenanceAction extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePendingMaintenanceActions extends Rpc
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
class DescribePolarSQLCollectorPolicy extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeScheduleTasks extends Rpc
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSQLHASH()
 * @method $this withSQLHASH($value)
 */
class DescribeSlowLogRecords extends Rpc
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStoragePlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetDBNodeId()
 * @method $this withTargetDBNodeId($value)
 */
class FailoverDBCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
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
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class GrantAccountPrivilege extends Rpc
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
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListTagResourcesForRegion extends Rpc
{
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
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNewAccountPassword()
 * @method $this withNewAccountPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountPassword extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class ModifyAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataLevel2BackupRetentionPeriod()
 * @method $this withDataLevel2BackupRetentionPeriod($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getDataLevel1BackupRetentionPeriod()
 * @method $this withDataLevel1BackupRetentionPeriod($value)
 * @method string getBackupRetentionPolicyOnClusterDeletion()
 * @method $this withBackupRetentionPolicyOnClusterDeletion($value)
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
 * @method string getBackupFrequency()
 * @method $this withBackupFrequency($value)
 */
class ModifyBackupPolicy extends Rpc
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
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupIds()
 * @method $this withSecurityGroupIds($value)
 * @method string getDBClusterIPArrayName()
 * @method $this withDBClusterIPArrayName($value)
 */
class ModifyDBClusterAccessWhitelist extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyDBClusterAndNodesParameters extends Rpc
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
 * @method string getCollectorStatus()
 * @method $this withCollectorStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterAuditLogCollector extends Rpc
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
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getDBEndpointDescription()
 * @method $this withDBEndpointDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 */
class ModifyDBClusterEndpoint extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNewMasterInstanceId()
 * @method $this withNewMasterInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceRDSDBInstanceId()
 * @method $this withSourceRDSDBInstanceId($value)
 * @method string getSwapConnectionString()
 * @method $this withSwapConnectionString($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMigration extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMonitor extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyDBClusterParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class ModifyDBClusterPrimaryZone extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getSSLAutoRotate()
 * @method $this withSSLAutoRotate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getSSLEnabled()
 * @method $this withSSLEnabled($value)
 */
class ModifyDBClusterSSL extends Rpc
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
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getEncryptNewTables()
 * @method $this withEncryptNewTables($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 */
class ModifyDBClusterTDE extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class ModifyDBDescription extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getPrivateZoneName()
 * @method $this withPrivateZoneName($value)
 * @method string getPrivateZoneAddressPrefix()
 * @method $this withPrivateZoneAddressPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 */
class ModifyDBEndpointAddress extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getDBNodeTargetClass()
 * @method $this withDBNodeTargetClass($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method string getSubCategory()
 * @method $this withSubCategory($value)
 */
class ModifyDBNodeClass extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHotReplicaMode()
 * @method $this withHotReplicaMode($value)
 */
class ModifyDBNodeHotReplicaMode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getParameterGroupId()
 * @method $this withParameterGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyDBNodesParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getGDNDescription()
 * @method $this withGDNDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyGlobalDatabaseNetwork extends Rpc
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
 * @method string getLogBackupRetentionPeriod()
 * @method $this withLogBackupRetentionPeriod($value)
 */
class ModifyLogBackupPolicy extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getRuleConfig()
 * @method $this withRuleConfig($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getRuleNameList()
 * @method $this withRuleNameList($value)
 */
class ModifyMaskingRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class ModifyPendingMaintenanceAction extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getProxyTargetClass()
 * @method $this withProxyTargetClass($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class RefreshProxyLevel extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getGDNId()
 * @method $this withGDNId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RemoveDBClusterFromGDN extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
class ResetAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartDBNode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTableMeta()
 * @method $this withTableMeta($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class RevokeAccountPrivilege extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method array getDBNode()
 */
class TempModifyDBNode extends Rpc
{

    /**
     * @param array $dBNode
     *
     * @return $this
     */
	public function withDBNode(array $dBNode)
	{
	    $this->data['DBNode'] = $dBNode;
		foreach ($dBNode as $depth1 => $depth1Value) {
			if(isset($depth1Value['TargetClass'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.TargetClass'] = $depth1Value['TargetClass'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['DBNode.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class TransformDBClusterPayType extends Rpc
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

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class UpgradeDBClusterMinorVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUpgradeType()
 * @method $this withUpgradeType($value)
 * @method string getPlannedEndTime()
 * @method $this withPlannedEndTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlannedStartTime()
 * @method $this withPlannedStartTime($value)
 * @method string getFromTimeService()
 * @method $this withFromTimeService($value)
 */
class UpgradeDBClusterVersion extends Rpc
{
}
