<?php

namespace AlibabaCloud\HBase\V20190101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserHdfsInfo addUserHdfsInfo(array $options = [])
 * @method ConvertInstance convertInstance(array $options = [])
 * @method CreateHbaseHaSlb createHbaseHaSlb(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DeleteHbaseHaSlb deleteHbaseHaSlb(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteUserHdfsInfo deleteUserHdfsInfo(array $options = [])
 * @method DescribeDBInstanceUsage describeDBInstanceUsage(array $options = [])
 * @method DescribeEndpoints describeEndpoints(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceType describeInstanceType(array $options = [])
 * @method DescribeIpWhitelist describeIpWhitelist(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSecurityGroups describeSecurityGroups(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyInstanceMaintainTime modifyInstanceMaintainTime(array $options = [])
 * @method ModifyInstanceName modifyInstanceName(array $options = [])
 * @method ModifyIpWhitelist modifyIpWhitelist(array $options = [])
 * @method ModifySecurityGroups modifySecurityGroups(array $options = [])
 * @method ModifyUIAccountPassword modifyUIAccountPassword(array $options = [])
 * @method QueryHBaseHaDB queryHBaseHaDB(array $options = [])
 * @method QueryXpackRelateDB queryXpackRelateDB(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ResizeDiskSize resizeDiskSize(array $options = [])
 * @method ResizeNodeCount resizeNodeCount(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method SwitchHbaseHaSlb switchHbaseHaSlb(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnTagResources unTagResources(array $options = [])
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
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getDbInstanceConnType()
 * @method $this withDbInstanceConnType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getDepMode()
 * @method $this withDepMode($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getDbInstanceType()
 * @method $this withDbInstanceType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCoreDiskType()
 * @method $this withCoreDiskType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getCoreInstanceQuantity()
 * @method $this withCoreInstanceQuantity($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getSrcDBInstanceId()
 * @method $this withSrcDBInstanceId($value)
 * @method string getMasterInstanceType()
 * @method $this withMasterInstanceType($value)
 * @method string getColdStorageSize()
 * @method $this withColdStorageSize($value)
 * @method string getCoreDiskQuantity()
 * @method $this withCoreDiskQuantity($value)
 * @method string getIsColdStorage()
 * @method $this withIsColdStorage($value)
 * @method string getCoreInstanceType()
 * @method $this withCoreInstanceType($value)
 * @method string getCoreDiskSize()
 * @method $this withCoreDiskSize($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getDbType()
 * @method $this withDbType($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateInstance extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteInstance extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeDBInstanceUsage extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeInstances extends Rpc
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
			$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getBdsId()
 * @method $this withBdsId($value)
 */
class QueryHBaseHaDB extends Rpc
{
}

/**
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
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
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
			$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getRelateDbType()
 * @method $this withRelateDbType($value)
 * @method string getDbClusterIds()
 * @method $this withDbClusterIds($value)
 */
class XpackRelateDB extends Rpc
{
}
