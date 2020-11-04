<?php

namespace AlibabaCloud\Cassandra\V20190101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocatePublicContactPoints allocatePublicContactPoints(array $options = [])
 * @method CreateBackupPlan createBackupPlan(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateDataCenter createDataCenter(array $options = [])
 * @method DeleteBackupPlan deleteBackupPlan(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteDataCenter deleteDataCenter(array $options = [])
 * @method DeleteNodeToolExecutionHistory deleteNodeToolExecutionHistory(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeBackup describeBackup(array $options = [])
 * @method DescribeBackupPlan describeBackupPlan(array $options = [])
 * @method DescribeBackupPlans describeBackupPlans(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeCluster describeCluster(array $options = [])
 * @method DescribeClusterDashboard describeClusterDashboard(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeClusterStatus describeClusterStatus(array $options = [])
 * @method DescribeContactPoints describeContactPoints(array $options = [])
 * @method DescribeDataCenter describeDataCenter(array $options = [])
 * @method DescribeDataCenters describeDataCenters(array $options = [])
 * @method DescribeDeletedClusters describeDeletedClusters(array $options = [])
 * @method DescribeInstanceType describeInstanceType(array $options = [])
 * @method DescribeIpWhitelist describeIpWhitelist(array $options = [])
 * @method DescribeIpWhitelistGroups describeIpWhitelistGroups(array $options = [])
 * @method DescribeNodeToolExecutionHistories describeNodeToolExecutionHistories(array $options = [])
 * @method DescribeNodeToolExecutionHistory describeNodeToolExecutionHistory(array $options = [])
 * @method DescribeParameterModificationHistories describeParameterModificationHistories(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSecurityGroups describeSecurityGroups(array $options = [])
 * @method ExecuteNodeTool executeNodeTool(array $options = [])
 * @method GetCmsUrl getCmsUrl(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ModifyAccountPassword modifyAccountPassword(array $options = [])
 * @method ModifyBackupPlan modifyBackupPlan(array $options = [])
 * @method ModifyCluster modifyCluster(array $options = [])
 * @method ModifyDataCenter modifyDataCenter(array $options = [])
 * @method ModifyInstanceMaintainTime modifyInstanceMaintainTime(array $options = [])
 * @method ModifyInstanceType modifyInstanceType(array $options = [])
 * @method ModifyIpWhitelist modifyIpWhitelist(array $options = [])
 * @method ModifyIpWhitelistGroup modifyIpWhitelistGroup(array $options = [])
 * @method ModifyParameter modifyParameter(array $options = [])
 * @method ModifySecurityGroups modifySecurityGroups(array $options = [])
 * @method PurgeCluster purgeCluster(array $options = [])
 * @method RebootCluster rebootCluster(array $options = [])
 * @method ReleasePublicContactPoints releasePublicContactPoints(array $options = [])
 * @method ResizeDiskSize resizeDiskSize(array $options = [])
 * @method ResizeNodeCount resizeNodeCount(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnTagResources unTagResources(array $options = [])
 * @method UpgradeClusterVersion upgradeClusterVersion(array $options = [])
 */
class CassandraApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cassandra';

    /** @var string */
    public $version = '2019-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'Cassandra';
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AllocatePublicContactPoints extends Rpc
{
}

/**
 * @method string getRetentionPeriod()
 * @method $this withRetentionPeriod($value)
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBackupTime()
 * @method $this withBackupTime($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 */
class CreateBackupPlan extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getMajorVersion()
 * @method $this withMajorVersion($value)
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getDataCenterName()
 * @method $this withDataCenterName($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getDataCenterName()
 * @method $this withDataCenterName($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDataCenter extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteBackupPlan extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteDataCenter extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DeleteNodeToolExecutionHistory extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeAccounts extends Rpc
{
}

/**
 * @method string getBackupType()
 * @method $this withBackupType($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBackup extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBackupPlan extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBackupPlans extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 */
class DescribeBackups extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDashboard extends Rpc
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
 */
class DescribeClusters extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterStatus extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeContactPoints extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeDataCenter extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeDataCenters extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDeletedClusters extends Rpc
{
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeIpWhitelistGroups extends Rpc
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
class DescribeNodeToolExecutionHistories extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDcId()
 * @method $this withDcId($value)
 */
class DescribeNodeToolExecutionHistory extends Rpc
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
class DescribeParameterModificationHistories extends Rpc
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
class DescribeParameters extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeSecurityGroups extends Rpc
{
}

/**
 * @method string getExecuteNodes()
 * @method $this withExecuteNodes($value)
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getArguments()
 * @method $this withArguments($value)
 */
class ExecuteNodeTool extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetCmsUrl extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class ModifyAccountPassword extends Rpc
{
}

/**
 * @method string getRetentionPeriod()
 * @method $this withRetentionPeriod($value)
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBackupTime()
 * @method $this withBackupTime($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 */
class ModifyBackupPlan extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyCluster extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDataCenterName()
 * @method $this withDataCenterName($value)
 */
class ModifyDataCenter extends Rpc
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
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class ModifyInstanceType extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getIpList()
 * @method $this withIpList($value)
 */
class ModifyIpWhitelist extends Rpc
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
class ModifyIpWhitelistGroup extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class ModifyParameter extends Rpc
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
 */
class PurgeCluster extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RebootCluster extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ReleasePublicContactPoints extends Rpc
{
}

/**
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResizeDiskSize extends Rpc
{
}

/**
 * @method string getDataCenterId()
 * @method $this withDataCenterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 */
class ResizeNodeCount extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeClusterVersion extends Rpc
{
}
