<?php

namespace AlibabaCloud\Polardbx\V20200202;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AlignStoragePrimaryAzone alignStoragePrimaryAzone(array $options = [])
 * @method AllocateColdDataVolume allocateColdDataVolume(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method CancelActiveOperationTasks cancelActiveOperationTasks(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CheckCloudResourceAuthorized checkCloudResourceAuthorized(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateDB createDB(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method CreateSuperAccount createSuperAccount(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteDB deleteDB(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DescribeAccountList describeAccountList(array $options = [])
 * @method DescribeActiveOperationMaintainConf describeActiveOperationMaintainConf(array $options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount(array $options = [])
 * @method DescribeActiveOperationTasks describeActiveOperationTasks(array $options = [])
 * @method DescribeArchiveTableList describeArchiveTableList(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackupSet describeBackupSet(array $options = [])
 * @method DescribeBackupSetList describeBackupSetList(array $options = [])
 * @method DescribeBinaryLogList describeBinaryLogList(array $options = [])
 * @method DescribeCharacterSet describeCharacterSet(array $options = [])
 * @method DescribeColdDataBasicInfo describeColdDataBasicInfo(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeDBInstanceConfig describeDBInstanceConfig(array $options = [])
 * @method DescribeDBInstanceHA describeDBInstanceHA(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method DescribeDBInstanceTDE describeDBInstanceTDE(array $options = [])
 * @method DescribeDBInstanceTopology describeDBInstanceTopology(array $options = [])
 * @method DescribeDBInstanceViaEndpoint describeDBInstanceViaEndpoint(array $options = [])
 * @method DescribeDbList describeDbList(array $options = [])
 * @method DescribeDBNodePerformance describeDBNodePerformance(array $options = [])
 * @method DescribeDistributeTableList describeDistributeTableList(array $options = [])
 * @method DescribeEvents describeEvents(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeScaleOutMigrateTaskList describeScaleOutMigrateTaskList(array $options = [])
 * @method DescribeSecurityIps describeSecurityIps(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeUserEncryptionKeyList describeUserEncryptionKeyList(array $options = [])
 * @method DisableRightsSeparation disableRightsSeparation(array $options = [])
 * @method EnableRightsSeparation enableRightsSeparation(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyAccountPrivilege modifyAccountPrivilege(array $options = [])
 * @method ModifyActiveOperationMaintainConf modifyActiveOperationMaintainConf(array $options = [])
 * @method ModifyActiveOperationTasks modifyActiveOperationTasks(array $options = [])
 * @method ModifyDatabaseDescription modifyDatabaseDescription(array $options = [])
 * @method ModifyDBInstanceClass modifyDBInstanceClass(array $options = [])
 * @method ModifyDBInstanceConfig modifyDBInstanceConfig(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyParameter modifyParameter(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ReleaseColdDataVolume releaseColdDataVolume(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method SwitchDBInstanceHA switchDBInstanceHA(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateBackupPolicy updateBackupPolicy(array $options = [])
 * @method UpdateDBInstanceSSL updateDBInstanceSSL(array $options = [])
 * @method UpdateDBInstanceTDE updateDBInstanceTDE(array $options = [])
 * @method UpdatePolarDBXInstanceNode updatePolarDBXInstanceNode(array $options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion(array $options = [])
 */
class PolardbxApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'polardbx';

    /** @var string */
    public $version = '2020-02-02';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'polardbx';
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getStorageInstanceName()
 * @method $this withStorageInstanceName($value)
 */
class AlignStoragePrimaryAzone extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class AllocateColdDataVolume extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class AllocateInstancePublicConnection extends Rpc
{
}

/**
 * @method string getIds()
 * @method $this withIds($value)
 */
class CancelActiveOperationTasks extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 */
class CheckCloudResourceAuthorized extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSecurityAccountPassword()
 * @method $this withSecurityAccountPassword($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSecurityAccountName()
 * @method $this withSecurityAccountName($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 */
class CreateBackup extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getCharset()
 * @method $this withCharset($value)
 * @method string getSecurityAccountPassword()
 * @method $this withSecurityAccountPassword($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityAccountName()
 * @method $this withSecurityAccountName($value)
 * @method string getDbDescription()
 * @method $this withDbDescription($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getStoragePoolName()
 * @method $this withStoragePoolName($value)
 */
class CreateDB extends Rpc
{
}

/**
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getTertiaryZone()
 * @method $this withTertiaryZone($value)
 * @method string getCnClass()
 * @method $this withCnClass($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getSecondaryZone()
 * @method $this withSecondaryZone($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getIsReadDBInstance()
 * @method $this withIsReadDBInstance($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCNNodeCount()
 * @method $this withCNNodeCount($value)
 * @method string getPrimaryDBInstanceName()
 * @method $this withPrimaryDBInstanceName($value)
 * @method string getTopologyType()
 * @method $this withTopologyType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIsColumnarReadDBInstance()
 * @method $this withIsColumnarReadDBInstance($value)
 * @method string getDNNodeCount()
 * @method $this withDNNodeCount($value)
 * @method string getDBNodeCount()
 * @method $this withDBNodeCount($value)
 * @method string getDnClass()
 * @method $this withDnClass($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDnStorageSpace()
 * @method $this withDnStorageSpace($value)
 * @method string getPrimaryZone()
 * @method $this withPrimaryZone($value)
 * @method string getSeries()
 * @method $this withSeries($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class CreateSuperAccount extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSecurityAccountPassword()
 * @method $this withSecurityAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityAccountName()
 * @method $this withSecurityAccountName($value)
 */
class DeleteAccount extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DeleteDB extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DeleteDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class DescribeAccountList extends Rpc
{
}

class DescribeActiveOperationMaintainConf extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeActiveOperationTaskCount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getChangeLevel()
 * @method $this withChangeLevel($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInsName()
 * @method $this withInsName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getAllowCancel()
 * @method $this withAllowCancel($value)
 * @method string getDbType()
 * @method $this withDbType($value)
 * @method string getAllowChange()
 * @method $this withAllowChange($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeActiveOperationTasks extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeArchiveTableList extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeBackupPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getDestCrossRegion()
 * @method $this withDestCrossRegion($value)
 */
class DescribeBackupSet extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDestCrossRegion()
 * @method $this withDestCrossRegion($value)
 */
class DescribeBackupSetList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class DescribeBinaryLogList extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeCharacterSet extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeColdDataBasicInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class DescribeDBInstanceAttribute extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 */
class DescribeDBInstanceConfig extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeDBInstanceHA extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getMustHasCdc()
 * @method $this withMustHasCdc($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSeries()
 * @method $this withSeries($value)
 */
class DescribeDBInstances extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeDBInstanceSSL extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeDBInstanceTDE extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeDBInstanceTopology extends Rpc
{
}

/**
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 */
class DescribeDBInstanceViaEndpoint extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeDbList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDBNodeRole()
 * @method $this withDBNodeRole($value)
 * @method string getCharacterType()
 * @method $this withCharacterType($value)
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDBNodeIds()
 * @method $this withDBNodeIds($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeDBNodePerformance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DescribeDistributeTableList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeEvents extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getParamLevel()
 * @method $this withParamLevel($value)
 */
class DescribeParameters extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getParamLevel()
 * @method $this withParamLevel($value)
 */
class DescribeParameterTemplates extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScaleOutMigrateTaskList extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeSecurityIps extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class DescribeTags extends Rpc
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
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTasks extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeUserEncryptionKeyList extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDbaAccountPassword()
 * @method $this withDbaAccountPassword($value)
 * @method string getDbaAccountName()
 * @method $this withDbaAccountName($value)
 */
class DisableRightsSeparation extends Rpc
{
}

/**
 * @method string getSecurityAccountPassword()
 * @method $this withSecurityAccountPassword($value)
 * @method string getSecurityAccountDescription()
 * @method $this withSecurityAccountDescription($value)
 * @method string getAuditAccountPassword()
 * @method $this withAuditAccountPassword($value)
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSecurityAccountName()
 * @method $this withSecurityAccountName($value)
 * @method string getAuditAccountName()
 * @method $this withAuditAccountName($value)
 * @method string getAuditAccountDescription()
 * @method $this withAuditAccountDescription($value)
 */
class EnableRightsSeparation extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
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
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSecurityAccountPassword()
 * @method $this withSecurityAccountPassword($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getSecurityAccountName()
 * @method $this withSecurityAccountName($value)
 */
class ModifyAccountPrivilege extends Rpc
{
}

/**
 * @method string getCycleTime()
 * @method $this withCycleTime($value)
 * @method string getMaintainStartTime()
 * @method $this withMaintainStartTime($value)
 * @method string getCycleType()
 * @method $this withCycleType($value)
 * @method string getMaintainEndTime()
 * @method $this withMaintainEndTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyActiveOperationMaintainConf extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getImmediateStart()
 * @method $this withImmediateStart($value)
 */
class ModifyActiveOperationTasks extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbDescription()
 * @method $this withDbDescription($value)
 */
class ModifyDatabaseDescription extends Rpc
{
}

/**
 * @method string getSpecifiedDNSpecMapJson()
 * @method $this withSpecifiedDNSpecMapJson($value)
 * @method string getCnClass()
 * @method $this withCnClass($value)
 * @method string getTargetDBInstanceClass()
 * @method $this withTargetDBInstanceClass($value)
 * @method string getSpecifiedDNScale()
 * @method $this withSpecifiedDNScale($value)
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getDnClass()
 * @method $this withDnClass($value)
 */
class ModifyDBInstanceClass extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 */
class ModifyDBInstanceConfig extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getNewPort()
 * @method $this withNewPort($value)
 * @method string getNewPrefix()
 * @method $this withNewPrefix($value)
 */
class ModifyDBInstanceConnectionString extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 */
class ModifyDBInstanceDescription extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getParamLevel()
 * @method $this withParamLevel($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameter extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 */
class ModifySecurityIps extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class ReleaseColdDataVolume extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSecurityAccountPassword()
 * @method $this withSecurityAccountPassword($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityAccountName()
 * @method $this withSecurityAccountName($value)
 */
class ResetAccountPassword extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class RestartDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSwitchTimeMode()
 * @method $this withSwitchTimeMode($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getTargetPrimaryRegionId()
 * @method $this withTargetPrimaryRegionId($value)
 * @method string getTargetPrimaryAzoneId()
 * @method $this withTargetPrimaryAzoneId($value)
 */
class SwitchDBInstanceHA extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
 */
class TagResources extends Rpc
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
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
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
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getCrossRegionDataBackupRetention()
 * @method $this withCrossRegionDataBackupRetention($value)
 * @method string getForceCleanOnHighSpaceUsage()
 * @method $this withForceCleanOnHighSpaceUsage($value)
 * @method string getBackupPlanBegin()
 * @method $this withBackupPlanBegin($value)
 * @method string getRemoveLogRetention()
 * @method $this withRemoveLogRetention($value)
 * @method string getColdDataBackupRetention()
 * @method $this withColdDataBackupRetention($value)
 * @method string getLocalLogRetentionNumber()
 * @method $this withLocalLogRetentionNumber($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 * @method string getIsEnabled()
 * @method $this withIsEnabled($value)
 * @method string getColdDataBackupInterval()
 * @method $this withColdDataBackupInterval($value)
 * @method string getBackupWay()
 * @method $this withBackupWay($value)
 * @method string getDestCrossRegion()
 * @method $this withDestCrossRegion($value)
 * @method string getBackupSetRetention()
 * @method $this withBackupSetRetention($value)
 * @method string getIsCrossRegionDataBackupEnabled()
 * @method $this withIsCrossRegionDataBackupEnabled($value)
 * @method string getCrossRegionLogBackupRetention()
 * @method $this withCrossRegionLogBackupRetention($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getIsCrossRegionLogBackupEnabled()
 * @method $this withIsCrossRegionLogBackupEnabled($value)
 * @method string getLocalLogRetention()
 * @method $this withLocalLogRetention($value)
 * @method string getLogLocalRetentionSpace()
 * @method $this withLogLocalRetentionSpace($value)
 */
class UpdateBackupPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getCertCommonName()
 * @method $this withCertCommonName($value)
 * @method string getEnableSSL()
 * @method $this withEnableSSL($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class UpdateDBInstanceSSL extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getEncryptionKey()
 * @method $this withEncryptionKey($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getTDEStatus()
 * @method $this withTDEStatus($value)
 */
class UpdateDBInstanceTDE extends Rpc
{
}

/**
 * @method string getAddDNSpec()
 * @method $this withAddDNSpec($value)
 * @method string getStoragePoolName()
 * @method $this withStoragePoolName($value)
 * @method string getDbInstanceNodeCount()
 * @method $this withDbInstanceNodeCount($value)
 * @method string getCNNodeCount()
 * @method $this withCNNodeCount($value)
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDeleteDNIds()
 * @method $this withDeleteDNIds($value)
 * @method string getDNNodeCount()
 * @method $this withDNNodeCount($value)
 */
class UpdatePolarDBXInstanceNode extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSwitchMode()
 * @method $this withSwitchMode($value)
 * @method string getMinorVersion()
 * @method $this withMinorVersion($value)
 */
class UpgradeDBInstanceKernelVersion extends Rpc
{
}
