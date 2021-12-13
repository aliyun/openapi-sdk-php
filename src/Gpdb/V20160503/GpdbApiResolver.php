<?php

namespace AlibabaCloud\Gpdb\V20160503;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddBuDBInstanceRelation addBuDBInstanceRelation(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method CheckServiceLinkedRole checkServiceLinkedRole(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method CreateECSDBInstance createECSDBInstance(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeAvailableResources describeAvailableResources(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeDataBackups describeDataBackups(array $options = [])
 * @method DescribeDBClusterPerformance describeDBClusterPerformance(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method DescribeDBInstanceOnECSAttribute describeDBInstanceOnECSAttribute(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method DescribeDBInstanceSQLPatterns describeDBInstanceSQLPatterns(array $options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method DescribeLogBackups describeLogBackups(array $options = [])
 * @method DescribeModifyParameterLog describeModifyParameterLog(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeResourceUsage describeResourceUsage(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeSlowSQLLogs describeSlowSQLLogs(array $options = [])
 * @method DescribeSpecification describeSpecification(array $options = [])
 * @method DescribeSQLCollectorPolicy describeSQLCollectorPolicy(array $options = [])
 * @method DescribeSQLLogByQueryId describeSQLLogByQueryId(array $options = [])
 * @method DescribeSQLLogCount describeSQLLogCount(array $options = [])
 * @method DescribeSQLLogFiles describeSQLLogFiles(array $options = [])
 * @method DescribeSQLLogRecords describeSQLLogRecords(array $options = [])
 * @method DescribeSQLLogs describeSQLLogs(array $options = [])
 * @method DescribeSQLLogsOnSlice describeSQLLogsOnSlice(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeUserEncryptionKeyList describeUserEncryptionKeyList(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyDBInstanceConnectionMode modifyDBInstanceConnectionMode(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType(array $options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL(array $options = [])
 * @method ModifyParameters modifyParameters(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifySQLCollectorPolicy modifySQLCollectorPolicy(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpgradeDBInstance upgradeDBInstance(array $options = [])
 * @method UpgradeDBVersion upgradeDBVersion(array $options = [])
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessUnit()
 * @method $this withBusinessUnit($value)
 */
class AddBuDBInstanceRelation extends Rpc
{
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceGroupCount()
 * @method $this withDBInstanceGroupCount($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
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
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstance extends Rpc
{
}

/**
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getDBInstanceCategory()
 * @method $this withDBInstanceCategory($value)
 * @method string getEncryptionType()
 * @method $this withEncryptionType($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getSrcDbInstanceName()
 * @method $this withSrcDbInstanceName($value)
 */
class CreateECSDBInstance extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DeleteDatabase extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBInstance extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeDBClusterPerformance extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceIPArrayList extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceNetInfo extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceOnECSAttribute extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
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
 * @method string getDBInstanceModes()
 * @method $this withDBInstanceModes($value)
 * @method string getDBInstanceStatuses()
 * @method $this withDBInstanceStatuses($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getSourceIP()
 * @method $this withSourceIP($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeDBInstanceSQLPatterns extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceSSL extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeParameters extends Rpc
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
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeRdsVpcs extends Rpc
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
 */
class DescribeResourceUsage extends Rpc
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
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeSlowLogRecords extends Rpc
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
 * @method string getMaxExecuteCost()
 * @method $this withMaxExecuteCost($value)
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
class DescribeSlowSQLLogs extends Rpc
{
}

/**
 * @method string getStorageType()
 * @method $this withStorageType($value)
 * @method string getCpuCores()
 * @method $this withCpuCores($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getTotalNodeNum()
 * @method $this withTotalNodeNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSpecification extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSQLCollectorPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class DescribeSQLLogByQueryId extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class DescribeSQLLogFiles extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeSQLLogRecords extends Rpc
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
class DescribeSQLLogs extends Rpc
{
}

/**
 * @method string getSliceId()
 * @method $this withSliceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMinExecuteCost()
 * @method $this withMinExecuteCost($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getMaxExecuteCost()
 * @method $this withMaxExecuteCost($value)
 * @method string getExecuteState()
 * @method $this withExecuteState($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class DescribeSQLLogsOnSlice extends Rpc
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
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceConnectionMode extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class ModifyDBInstanceMaintainTime extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class ModifyDBInstanceNetworkType extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceGroupCount()
 * @method $this withDBInstanceGroupCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
