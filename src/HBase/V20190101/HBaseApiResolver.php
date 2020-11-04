<?php

namespace AlibabaCloud\HBase\V20190101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserHdfsInfo addUserHdfsInfo(array $options = [])
 * @method ConvertInstance convertInstance(array $options = [])
 * @method CreateBackupPlan createBackupPlan(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateHbaseHaSlb createHbaseHaSlb(array $options = [])
 * @method CreateMultiZoneCluster createMultiZoneCluster(array $options = [])
 * @method CreateRestorePlan createRestorePlan(array $options = [])
 * @method CreateServerlessCluster createServerlessCluster(array $options = [])
 * @method DeleteHBaseHaDB deleteHBaseHaDB(array $options = [])
 * @method DeleteHbaseHaSlb deleteHbaseHaSlb(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteMultiZoneCluster deleteMultiZoneCluster(array $options = [])
 * @method DeleteServerlessCluster deleteServerlessCluster(array $options = [])
 * @method DeleteUserHdfsInfo deleteUserHdfsInfo(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method DescribeBackupPlanConfig describeBackupPlanConfig(array $options = [])
 * @method DescribeBackupStatus describeBackupStatus(array $options = [])
 * @method DescribeBackupSummary describeBackupSummary(array $options = [])
 * @method DescribeBackupTables describeBackupTables(array $options = [])
 * @method DescribeClusterConnection describeClusterConnection(array $options = [])
 * @method DescribeDBInstanceUsage describeDBInstanceUsage(array $options = [])
 * @method DescribeDeletedInstances describeDeletedInstances(array $options = [])
 * @method DescribeDiskWarningLine describeDiskWarningLine(array $options = [])
 * @method DescribeEndpoints describeEndpoints(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceType describeInstanceType(array $options = [])
 * @method DescribeIpWhitelist describeIpWhitelist(array $options = [])
 * @method DescribeMultiZoneAvailableRegions describeMultiZoneAvailableRegions(array $options = [])
 * @method DescribeMultiZoneAvailableResource describeMultiZoneAvailableResource(array $options = [])
 * @method DescribeMultiZoneCluster describeMultiZoneCluster(array $options = [])
 * @method DescribeRecoverableTimeRange describeRecoverableTimeRange(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRestoreFullDetails describeRestoreFullDetails(array $options = [])
 * @method DescribeRestoreIncrDetail describeRestoreIncrDetail(array $options = [])
 * @method DescribeRestoreSchemaDetails describeRestoreSchemaDetails(array $options = [])
 * @method DescribeRestoreSummary describeRestoreSummary(array $options = [])
 * @method DescribeRestoreTables describeRestoreTables(array $options = [])
 * @method DescribeSecurityGroups describeSecurityGroups(array $options = [])
 * @method EnableHBaseueBackup enableHBaseueBackup(array $options = [])
 * @method EnableHBaseueModule enableHBaseueModule(array $options = [])
 * @method EvaluateMultiZoneResource evaluateMultiZoneResource(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ModifyBackupPlanConfig modifyBackupPlanConfig(array $options = [])
 * @method ModifyClusterDeletionProtection modifyClusterDeletionProtection(array $options = [])
 * @method ModifyDiskWarningLine modifyDiskWarningLine(array $options = [])
 * @method ModifyInstanceMaintainTime modifyInstanceMaintainTime(array $options = [])
 * @method ModifyInstanceName modifyInstanceName(array $options = [])
 * @method ModifyInstanceType modifyInstanceType(array $options = [])
 * @method ModifyIpWhitelist modifyIpWhitelist(array $options = [])
 * @method ModifyMultiZoneClusterNodeType modifyMultiZoneClusterNodeType(array $options = [])
 * @method ModifySecurityGroups modifySecurityGroups(array $options = [])
 * @method ModifyUIAccountPassword modifyUIAccountPassword(array $options = [])
 * @method PurgeInstance purgeInstance(array $options = [])
 * @method QueryHBaseHaDB queryHBaseHaDB(array $options = [])
 * @method QueryXpackRelateDB queryXpackRelateDB(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ResizeColdStorageSize resizeColdStorageSize(array $options = [])
 * @method ResizeDiskSize resizeDiskSize(array $options = [])
 * @method ResizeMultiZoneClusterDiskSize resizeMultiZoneClusterDiskSize(array $options = [])
 * @method ResizeMultiZoneClusterNodeCount resizeMultiZoneClusterNodeCount(array $options = [])
 * @method ResizeNodeCount resizeNodeCount(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method SwitchHbaseHaSlb switchHbaseHaSlb(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnTagResources unTagResources(array $options = [])
 * @method UpgradeMultiZoneCluster upgradeMultiZoneCluster(array $options = [])
 * @method XpackRelateDB xpackRelateDB(array $options = [])
 */
class HBaseApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'HBase';

    /** @var string */
    public $version = '2019-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hbase';
}

/**
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddUserHdfsInfo extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class ConvertInstance extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateBackupPlan extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getMasterInstanceType()
 * @method $this withMasterInstanceType($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getColdStorageSize()
 * @method $this withColdStorageSize($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getCoreInstanceType()
 * @method $this withCoreInstanceType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateCluster extends Rpc
{
}

/**
 * @method string getHaTypes()
 * @method $this withHaTypes($value)
 * @method string getHbaseType()
 * @method $this withHbaseType($value)
 * @method string getBdsId()
 * @method $this withBdsId($value)
 * @method string getHaId()
 * @method $this withHaId($value)
 */
class CreateHbaseHaSlb extends Rpc
{
}

/**
 * @method string getArchVersion()
 * @method $this withArchVersion($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getLogDiskType()
 * @method $this withLogDiskType($value)
 * @method string getPrimaryVSwitchId()
 * @method $this withPrimaryVSwitchId($value)
 * @method string getLogInstanceType()
 * @method $this withLogInstanceType($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLogNodeCount()
 * @method $this withLogNodeCount($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getCoreDiskType()
 * @method $this withCoreDiskType($value)
 * @method string getArbiterZoneId()
 * @method $this withArbiterZoneId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMultiZoneCombination()
 * @method $this withMultiZoneCombination($value)
 * @method string getPrimaryZoneId()
 * @method $this withPrimaryZoneId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getStandbyVSwitchId()
 * @method $this withStandbyVSwitchId($value)
 * @method string getStandbyZoneId()
 * @method $this withStandbyZoneId($value)
 * @method string getMasterInstanceType()
 * @method $this withMasterInstanceType($value)
 * @method string getCoreNodeCount()
 * @method $this withCoreNodeCount($value)
 * @method string getLogDiskSize()
 * @method $this withLogDiskSize($value)
 * @method string getCoreInstanceType()
 * @method $this withCoreInstanceType($value)
 * @method string getCoreDiskSize()
 * @method $this withCoreDiskSize($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getArbiterVSwitchId()
 * @method $this withArbiterVSwitchId($value)
 */
class CreateMultiZoneCluster extends Rpc
{
}

/**
 * @method string getRestoreToDate()
 * @method $this withRestoreToDate($value)
 * @method string getTables()
 * @method $this withTables($value)
 * @method string getRestoreByCopy()
 * @method $this withRestoreByCopy($value)
 * @method string getRestoreAllTable()
 * @method $this withRestoreAllTable($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTargetClusterId()
 * @method $this withTargetClusterId($value)
 */
class CreateRestorePlan extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getServerlessCapability()
 * @method $this withServerlessCapability($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServerlessStorage()
 * @method $this withServerlessStorage($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getServerlessSpec()
 * @method $this withServerlessSpec($value)
 */
class CreateServerlessCluster extends Rpc
{
}

/**
 * @method string getHaId()
 * @method $this withHaId($value)
 * @method string getBdsId()
 * @method $this withBdsId($value)
 */
class DeleteHBaseHaDB extends Rpc
{
}

/**
 * @method string getHaId()
 * @method $this withHaId($value)
 * @method string getHaTypes()
 * @method $this withHaTypes($value)
 * @method string getBdsId()
 * @method $this withBdsId($value)
 */
class DeleteHbaseHaSlb extends Rpc
{
}

/**
 * @method string getImmediateDeleteFlag()
 * @method $this withImmediateDeleteFlag($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getImmediateDeleteFlag()
 * @method $this withImmediateDeleteFlag($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteMultiZoneCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DeleteServerlessCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNameService()
 * @method $this withNameService($value)
 */
class DeleteUserHdfsInfo extends Rpc
{
}

/**
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class DescribeAvailableResource extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBackupPlanConfig extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBackupStatus extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBackupSummary extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupRecordId()
 * @method $this withBackupRecordId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBackupTables extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterConnection extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeDBInstanceUsage extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDeletedInstances extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeDiskWarningLine extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeEndpoints extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeInstance extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getDbType()
 * @method $this withDbType($value)
 */
class DescribeInstances extends Rpc
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
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class DescribeInstanceType extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeIpWhitelist extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeMultiZoneAvailableRegions extends Rpc
{
}

/**
 * @method string getZoneCombination()
 * @method $this withZoneCombination($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class DescribeMultiZoneAvailableResource extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeMultiZoneCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeRecoverableTimeRange extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRestoreRecordId()
 * @method $this withRestoreRecordId($value)
 */
class DescribeRestoreFullDetails extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRestoreRecordId()
 * @method $this withRestoreRecordId($value)
 */
class DescribeRestoreIncrDetail extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRestoreRecordId()
 * @method $this withRestoreRecordId($value)
 */
class DescribeRestoreSchemaDetails extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeRestoreSummary extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRestoreRecordId()
 * @method $this withRestoreRecordId($value)
 */
class DescribeRestoreTables extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeSecurityGroups extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHbaseueClusterId()
 * @method $this withHbaseueClusterId($value)
 * @method string getColdStorageSize()
 * @method $this withColdStorageSize($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 */
class EnableHBaseueBackup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getModuleTypeName()
 * @method $this withModuleTypeName($value)
 * @method string getHbaseueClusterId()
 * @method $this withHbaseueClusterId($value)
 * @method string getBdsId()
 * @method $this withBdsId($value)
 * @method string getModuleClusterName()
 * @method $this withModuleClusterName($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getMasterInstanceType()
 * @method $this withMasterInstanceType($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getCoreInstanceType()
 * @method $this withCoreInstanceType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class EnableHBaseueModule extends Rpc
{
}

/**
 * @method string getArchVersion()
 * @method $this withArchVersion($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getLogDiskType()
 * @method $this withLogDiskType($value)
 * @method string getPrimaryVSwitchId()
 * @method $this withPrimaryVSwitchId($value)
 * @method string getLogInstanceType()
 * @method $this withLogInstanceType($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLogNodeCount()
 * @method $this withLogNodeCount($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getCoreDiskType()
 * @method $this withCoreDiskType($value)
 * @method string getArbiterZoneId()
 * @method $this withArbiterZoneId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMultiZoneCombination()
 * @method $this withMultiZoneCombination($value)
 * @method string getPrimaryZoneId()
 * @method $this withPrimaryZoneId($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getStandbyVSwitchId()
 * @method $this withStandbyVSwitchId($value)
 * @method string getStandbyZoneId()
 * @method $this withStandbyZoneId($value)
 * @method string getMasterInstanceType()
 * @method $this withMasterInstanceType($value)
 * @method string getCoreNodeCount()
 * @method $this withCoreNodeCount($value)
 * @method string getLogDiskSize()
 * @method $this withLogDiskSize($value)
 * @method string getCoreInstanceType()
 * @method $this withCoreInstanceType($value)
 * @method string getCoreDiskSize()
 * @method $this withCoreDiskSize($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getArbiterVSwitchId()
 * @method $this withArbiterVSwitchId($value)
 */
class EvaluateMultiZoneResource extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
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

class ListTags extends Rpc
{
}

/**
 * @method string getFullBackupCycle()
 * @method $this withFullBackupCycle($value)
 * @method string getTables()
 * @method $this withTables($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMinHFileBackupCount()
 * @method $this withMinHFileBackupCount($value)
 * @method string getNextFullBackupDate()
 * @method $this withNextFullBackupDate($value)
 */
class ModifyBackupPlanConfig extends Rpc
{
}

/**
 * @method string getProtection()
 * @method $this withProtection($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyClusterDeletionProtection extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getWarningLine()
 * @method $this withWarningLine($value)
 */
class ModifyDiskWarningLine extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaintainEndTime()
 * @method $this withMaintainEndTime($value)
 * @method string getMaintainStartTime()
 * @method $this withMaintainStartTime($value)
 */
class ModifyInstanceMaintainTime extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class ModifyInstanceName extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMasterInstanceType()
 * @method $this withMasterInstanceType($value)
 * @method string getCoreInstanceType()
 * @method $this withCoreInstanceType($value)
 */
class ModifyInstanceType extends Rpc
{
}

/**
 * @method string getIpList()
 * @method $this withIpList($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class ModifyIpWhitelist extends Rpc
{
}

/**
 * @method string getLogInstanceType()
 * @method $this withLogInstanceType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMasterInstanceType()
 * @method $this withMasterInstanceType($value)
 * @method string getCoreInstanceType()
 * @method $this withCoreInstanceType($value)
 */
class ModifyMultiZoneClusterNodeType extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSecurityGroupIds()
 * @method $this withSecurityGroupIds($value)
 */
class ModifySecurityGroups extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class ModifyUIAccountPassword extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class PurgeInstance extends Rpc
{
}

/**
 * @method string getBdsId()
 * @method $this withBdsId($value)
 */
class QueryHBaseHaDB extends Rpc
{
}

/**
 * @method string getHasSingleNode()
 * @method $this withHasSingleNode($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRelateDbType()
 * @method $this withRelateDbType($value)
 */
class QueryXpackRelateDB extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class RenewInstance extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getColdStorageSize()
 * @method $this withColdStorageSize($value)
 */
class ResizeColdStorageSize extends Rpc
{
}

/**
 * @method string getNodeDiskSize()
 * @method $this withNodeDiskSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResizeDiskSize extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLogDiskSize()
 * @method $this withLogDiskSize($value)
 * @method string getCoreDiskSize()
 * @method $this withCoreDiskSize($value)
 */
class ResizeMultiZoneClusterDiskSize extends Rpc
{
}

/**
 * @method string getPrimaryVSwitchId()
 * @method $this withPrimaryVSwitchId($value)
 * @method string getStandbyVSwitchId()
 * @method $this withStandbyVSwitchId($value)
 * @method string getLogNodeCount()
 * @method $this withLogNodeCount($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPrimaryCoreNodeCount()
 * @method $this withPrimaryCoreNodeCount($value)
 * @method string getCoreNodeCount()
 * @method $this withCoreNodeCount($value)
 * @method string getStandbyCoreNodeCount()
 * @method $this withStandbyCoreNodeCount($value)
 * @method string getArbiterVSwitchId()
 * @method $this withArbiterVSwitchId($value)
 */
class ResizeMultiZoneClusterNodeCount extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class ResizeNodeCount extends Rpc
{
}

/**
 * @method string getComponents()
 * @method $this withComponents($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RestartInstance extends Rpc
{
}

/**
 * @method string getHaTypes()
 * @method $this withHaTypes($value)
 * @method string getHbaseType()
 * @method $this withHbaseType($value)
 * @method string getBdsId()
 * @method $this withBdsId($value)
 * @method string getHaId()
 * @method $this withHaId($value)
 */
class SwitchHbaseHaSlb extends Rpc
{
}

/**
 * @method array getResourceId()
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
 * @method array getTagKey()
 */
class UnTagResources extends Rpc
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
 * @method string getRunMode()
 * @method $this withRunMode($value)
 * @method string getComponents()
 * @method $this withComponents($value)
 * @method string getUpgradeInsName()
 * @method $this withUpgradeInsName($value)
 * @method string getRestartComponents()
 * @method $this withRestartComponents($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVersions()
 * @method $this withVersions($value)
 */
class UpgradeMultiZoneCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRelateDbType()
 * @method $this withRelateDbType($value)
 * @method string getDbClusterIds()
 * @method $this withDbClusterIds($value)
 */
class XpackRelateDB extends Rpc
{
}
