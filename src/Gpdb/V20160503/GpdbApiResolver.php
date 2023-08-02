<?php

namespace AlibabaCloud\Gpdb\V20160503;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method CheckServiceLinkedRole checkServiceLinkedRole(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateCollection createCollection(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method CreateDBInstancePlan createDBInstancePlan(array $options = [])
 * @method CreateNamespace createNamespace(array $options = [])
 * @method CreateSampleData createSampleData(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method CreateVectorIndex createVectorIndex(array $options = [])
 * @method DeleteCollection deleteCollection(array $options = [])
 * @method DeleteCollectionData deleteCollectionData(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DeleteDBInstancePlan deleteDBInstancePlan(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method DeleteVectorIndex deleteVectorIndex(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeAvailableResources describeAvailableResources(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeCollection describeCollection(array $options = [])
 * @method DescribeDataBackups describeDataBackups(array $options = [])
 * @method DescribeDataReDistributeInfo describeDataReDistributeInfo(array $options = [])
 * @method DescribeDataShareInstances describeDataShareInstances(array $options = [])
 * @method DescribeDataSharePerformance describeDataSharePerformance(array $options = [])
 * @method DescribeDBClusterNode describeDBClusterNode(array $options = [])
 * @method DescribeDBClusterPerformance describeDBClusterPerformance(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeDBInstanceDataBloat describeDBInstanceDataBloat(array $options = [])
 * @method DescribeDBInstanceDataSkew describeDBInstanceDataSkew(array $options = [])
 * @method DescribeDBInstanceDiagnosisSummary describeDBInstanceDiagnosisSummary(array $options = [])
 * @method DescribeDBInstanceErrorLog describeDBInstanceErrorLog(array $options = [])
 * @method DescribeDBInstanceIndexUsage describeDBInstanceIndexUsage(array $options = [])
 * @method DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method DescribeDBInstancePlans describeDBInstancePlans(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method DescribeDiagnosisDimensions describeDiagnosisDimensions(array $options = [])
 * @method DescribeDiagnosisMonitorPerformance describeDiagnosisMonitorPerformance(array $options = [])
 * @method DescribeDiagnosisRecords describeDiagnosisRecords(array $options = [])
 * @method DescribeDiagnosisSQLInfo describeDiagnosisSQLInfo(array $options = [])
 * @method DescribeDownloadRecords describeDownloadRecords(array $options = [])
 * @method DescribeDownloadSQLLogs describeDownloadSQLLogs(array $options = [])
 * @method DescribeHealthStatus describeHealthStatus(array $options = [])
 * @method DescribeLogBackups describeLogBackups(array $options = [])
 * @method DescribeModifyParameterLog describeModifyParameterLog(array $options = [])
 * @method DescribeNamespace describeNamespace(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSampleData describeSampleData(array $options = [])
 * @method DescribeSQLLogCount describeSQLLogCount(array $options = [])
 * @method DescribeSQLLogsV2 describeSQLLogsV2(array $options = [])
 * @method DescribeSupportFeatures describeSupportFeatures(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeUserEncryptionKeyList describeUserEncryptionKeyList(array $options = [])
 * @method DescribeWaitingSQLInfo describeWaitingSQLInfo(array $options = [])
 * @method DescribeWaitingSQLRecords describeWaitingSQLRecords(array $options = [])
 * @method DownloadDiagnosisRecords downloadDiagnosisRecords(array $options = [])
 * @method DownloadSQLLogsRecords downloadSQLLogsRecords(array $options = [])
 * @method GrantCollection grantCollection(array $options = [])
 * @method InitVectorDatabase initVectorDatabase(array $options = [])
 * @method ListCollections listCollections(array $options = [])
 * @method ListNamespaces listNamespaces(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyDBInstanceConfig modifyDBInstanceConfig(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method ModifyDBInstanceResourceGroup modifyDBInstanceResourceGroup(array $options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL(array $options = [])
 * @method ModifyParameters modifyParameters(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifySQLCollectorPolicy modifySQLCollectorPolicy(array $options = [])
 * @method ModifyVectorConfiguration modifyVectorConfiguration(array $options = [])
 * @method PauseInstance pauseInstance(array $options = [])
 * @method QueryCollectionData queryCollectionData(array $options = [])
 * @method RebalanceDBInstance rebalanceDBInstance(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method ResumeInstance resumeInstance(array $options = [])
 * @method SetDataShareInstance setDataShareInstance(array $options = [])
 * @method SetDBInstancePlanStatus setDBInstancePlanStatus(array $options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnloadSampleData unloadSampleData(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateDBInstancePlan updateDBInstancePlan(array $options = [])
 * @method UpgradeDBInstance upgradeDBInstance(array $options = [])
 * @method UpgradeDBVersion upgradeDBVersion(array $options = [])
 * @method UpsertCollectionData upsertCollectionData(array $options = [])
 */
class GpdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'gpdb';

    /** @var string */
    public $version = '2016-05-03';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class AllocateInstancePublicConnection extends Rpc
{
}

class CheckServiceLinkedRole extends Rpc
{
}

/**
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getMetadata()
 * @method $this withMetadata($value)
 * @method string getFullTextRetrievalFields()
 * @method $this withFullTextRetrievalFields($value)
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParser()
 * @method $this withParser($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class CreateCollection extends Rpc
{
}

/**
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getDBInstanceCategory()
 * @method $this withDBInstanceCategory($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEncryptionType()
 * @method $this withEncryptionType($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getServerlessMode()
 * @method $this withServerlessMode($value)
 * @method array getTag()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getVectorConfigurationStatus()
 * @method $this withVectorConfigurationStatus($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSegDiskPerformanceLevel()
 * @method $this withSegDiskPerformanceLevel($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceSpec()
 * @method $this withInstanceSpec($value)
 * @method string getStorageSize()
 * @method $this withStorageSize($value)
 * @method string getSegStorageType()
 * @method $this withSegStorageType($value)
 * @method string getMasterNodeNum()
 * @method $this withMasterNodeNum($value)
 * @method string getSegNodeNum()
 * @method $this withSegNodeNum($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getCreateSampleData()
 * @method $this withCreateSampleData($value)
 * @method string getDBInstanceGroupCount()
 * @method $this withDBInstanceGroupCount($value)
 * @method string getDBInstanceMode()
 * @method $this withDBInstanceMode($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getServerlessResource()
 * @method $this withServerlessResource($value)
 * @method string getIdleTime()
 * @method $this withIdleTime($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDBInstance extends Rpc
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
 * @method string getPlanType()
 * @method $this withPlanType($value)
 * @method string getPlanStartDate()
 * @method $this withPlanStartDate($value)
 * @method string getPlanConfig()
 * @method $this withPlanConfig($value)
 * @method string getPlanName()
 * @method $this withPlanName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPlanDesc()
 * @method $this withPlanDesc($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlanEndDate()
 * @method $this withPlanEndDate($value)
 * @method string getPlanScheduleType()
 * @method $this withPlanScheduleType($value)
 */
class CreateDBInstancePlan extends Rpc
{
}

/**
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespacePassword()
 * @method $this withNamespacePassword($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class CreateNamespace extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateSampleData extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateServiceLinkedRole extends Rpc
{
}

/**
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getMetrics()
 * @method $this withMetrics($value)
 */
class CreateVectorIndex extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespacePassword()
 * @method $this withNamespacePassword($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteCollection extends Rpc
{
}

/**
 * @method string getCollectionDataFilter()
 * @method $this withCollectionDataFilter($value)
 * @method string getCollectionData()
 * @method $this withCollectionData($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespacePassword()
 * @method $this withNamespacePassword($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteCollectionData extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class DeleteDBInstancePlan extends Rpc
{
}

/**
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteNamespace extends Rpc
{
}

/**
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteVectorIndex extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeAccounts extends Rpc
{
}

/**
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeAvailableResources extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeBackupPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespacePassword()
 * @method $this withNamespacePassword($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeCollection extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeDataBackups extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDataReDistributeInfo extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchValue()
 * @method $this withSearchValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDataShareInstances extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeDataSharePerformance extends Rpc
{
}

/**
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBClusterNode extends Rpc
{
}

/**
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 */
class DescribeDBClusterPerformance extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceDataBloat extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceDataSkew extends Rpc
{
}

/**
 * @method string getStartStatus()
 * @method $this withStartStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSyncMode()
 * @method $this withSyncMode($value)
 * @method string getRolePreferd()
 * @method $this withRolePreferd($value)
 */
class DescribeDBInstanceDiagnosisSummary extends Rpc
{
}

/**
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLogLevel()
 * @method $this withLogLevel($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeDBInstanceErrorLog extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceIndexUsage extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceIPArrayList extends Rpc
{
}

/**
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceNetInfo extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeDBInstancePerformance extends Rpc
{
}

/**
 * @method string getPlanType()
 * @method $this withPlanType($value)
 * @method string getPlanCreateDate()
 * @method $this withPlanCreateDate($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPlanDesc()
 * @method $this withPlanDesc($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlanScheduleType()
 * @method $this withPlanScheduleType($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class DescribeDBInstancePlans extends Rpc
{
}

/**
 * @method string getDBInstanceModes()
 * @method $this withDBInstanceModes($value)
 * @method string getDBInstanceStatuses()
 * @method $this withDBInstanceStatuses($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method array getTag()
 * @method string getDBInstanceIds()
 * @method $this withDBInstanceIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceCategories()
 * @method $this withDBInstanceCategories($value)
 * @method string getInstanceDeployTypes()
 * @method $this withInstanceDeployTypes($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class DescribeDBInstances extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceSSL extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDiagnosisDimensions extends Rpc
{
}

/**
 * @method string getQueryCondition()
 * @method $this withQueryCondition($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeDiagnosisMonitorPerformance extends Rpc
{
}

/**
 * @method string getQueryCondition()
 * @method $this withQueryCondition($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeDiagnosisRecords extends Rpc
{
}

/**
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getQueryID()
 * @method $this withQueryID($value)
 */
class DescribeDiagnosisSQLInfo extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDownloadRecords extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDownloadSQLLogs extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeHealthStatus extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeLogBackups extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeModifyParameterLog extends Rpc
{
}

/**
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeNamespace extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeParameters extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVpcs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVSwitchs extends Rpc
{
}

/**
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSampleData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getSourceIP()
 * @method $this withSourceIP($value)
 * @method string getMinExecuteCost()
 * @method $this withMinExecuteCost($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxExecuteCost()
 * @method $this withMaxExecuteCost($value)
 * @method string getExecuteCost()
 * @method $this withExecuteCost($value)
 * @method string getExecuteState()
 * @method $this withExecuteState($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOperationClass()
 * @method $this withOperationClass($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeSQLLogCount extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getSourceIP()
 * @method $this withSourceIP($value)
 * @method string getMinExecuteCost()
 * @method $this withMinExecuteCost($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxExecuteCost()
 * @method $this withMaxExecuteCost($value)
 * @method string getExecuteCost()
 * @method $this withExecuteCost($value)
 * @method string getExecuteState()
 * @method $this withExecuteState($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOperationClass()
 * @method $this withOperationClass($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeSQLLogsV2 extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSupportFeatures extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeTags extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeUserEncryptionKeyList extends Rpc
{
}

/**
 * @method string getPID()
 * @method $this withPID($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeWaitingSQLInfo extends Rpc
{
}

/**
 * @method string getQueryCondition()
 * @method $this withQueryCondition($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeWaitingSQLRecords extends Rpc
{
}

/**
 * @method string getQueryCondition()
 * @method $this withQueryCondition($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DownloadDiagnosisRecords extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getSourceIP()
 * @method $this withSourceIP($value)
 * @method string getMinExecuteCost()
 * @method $this withMinExecuteCost($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getMaxExecuteCost()
 * @method $this withMaxExecuteCost($value)
 * @method string getExecuteCost()
 * @method $this withExecuteCost($value)
 * @method string getExecuteState()
 * @method $this withExecuteState($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOperationClass()
 * @method $this withOperationClass($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DownloadSQLLogsRecords extends Rpc
{
}

/**
 * @method string getGrantType()
 * @method $this withGrantType($value)
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGrantToNamespace()
 * @method $this withGrantToNamespace($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GrantCollection extends Rpc
{
}

/**
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class InitVectorDatabase extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespacePassword()
 * @method $this withNamespacePassword($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class ListCollections extends Rpc
{
}

/**
 * @method string getManagerAccount()
 * @method $this withManagerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getManagerAccountPassword()
 * @method $this withManagerAccountPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListNamespaces extends Rpc
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
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRecoveryPointPeriod()
 * @method $this withRecoveryPointPeriod($value)
 * @method string getEnableRecoveryPoint()
 * @method $this withEnableRecoveryPoint($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 */
class ModifyBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getServerlessResource()
 * @method $this withServerlessResource($value)
 * @method string getIdleTime()
 * @method $this withIdleTime($value)
 */
class ModifyDBInstanceConfig extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class ModifyDBInstanceConnectionString extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 */
class ModifyDBInstanceDescription extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class ModifyDBInstanceMaintainTime extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ModifyDBInstanceResourceGroup extends Rpc
{
}

/**
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSSLEnabled()
 * @method $this withSSLEnabled($value)
 */
class ModifyDBInstanceSSL extends Rpc
{
}

/**
 * @method string getForceRestartInstance()
 * @method $this withForceRestartInstance($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameters extends Rpc
{
}

/**
 * @method string getDBInstanceIPArrayName()
 * @method $this withDBInstanceIPArrayName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this withDBInstanceIPArrayAttribute($value)
 */
class ModifySecurityIps extends Rpc
{
}

/**
 * @method string getSQLCollectorStatus()
 * @method $this withSQLCollectorStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifySQLCollectorPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getVectorConfigurationStatus()
 * @method $this withVectorConfigurationStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyVectorConfiguration extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PauseInstance extends Rpc
{
}

/**
 * @method string getTopK()
 * @method $this withTopK($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getVector()
 * @method $this withVector($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNamespacePassword()
 * @method $this withNamespacePassword($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class QueryCollectionData extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RebalanceDBInstance extends Rpc
{
}

/**
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class ResetAccountPassword extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RestartDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResumeInstance extends Rpc
{
}

/**
 * @method string getInstanceList()
 * @method $this withInstanceList($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDataShareInstance extends Rpc
{
}

/**
 * @method string getPlanStatus()
 * @method $this withPlanStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class SetDBInstancePlanStatus extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class SwitchDBInstanceNetType extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnloadSampleData extends Rpc
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
 * @method string getPlanStartDate()
 * @method $this withPlanStartDate($value)
 * @method string getPlanConfig()
 * @method $this withPlanConfig($value)
 * @method string getPlanName()
 * @method $this withPlanName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPlanDesc()
 * @method $this withPlanDesc($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlanEndDate()
 * @method $this withPlanEndDate($value)
 * @method string getPlanId()
 * @method $this withPlanId($value)
 */
class UpdateDBInstancePlan extends Rpc
{
}

/**
 * @method string getInstanceSpec()
 * @method $this withInstanceSpec($value)
 * @method string getStorageSize()
 * @method $this withStorageSize($value)
 * @method string getSegStorageType()
 * @method $this withSegStorageType($value)
 * @method string getMasterNodeNum()
 * @method $this withMasterNodeNum($value)
 * @method string getUpgradeType()
 * @method $this withUpgradeType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSegNodeNum()
 * @method $this withSegNodeNum($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceGroupCount()
 * @method $this withDBInstanceGroupCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSegDiskPerformanceLevel()
 * @method $this withSegDiskPerformanceLevel($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class UpgradeDBInstance extends Rpc
{
}

/**
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getMajorVersion()
 * @method $this withMajorVersion($value)
 * @method string getMinorVersion()
 * @method $this withMinorVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeDBVersion extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRows()
 * @method $this withRows($value)
 * @method string getNamespacePassword()
 * @method $this withNamespacePassword($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpsertCollectionData extends Rpc
{
}
