<?php

namespace AlibabaCloud\Alikafka\V20190916;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method ConvertPostPayOrder convertPostPayOrder(array $options = [])
 * @method CreateAcl createAcl(array $options = [])
 * @method CreateConsumerGroup createConsumerGroup(array $options = [])
 * @method CreatePostPayOrder createPostPayOrder(array $options = [])
 * @method CreatePrePayOrder createPrePayOrder(array $options = [])
 * @method CreateSaslUser createSaslUser(array $options = [])
 * @method CreateTopic createTopic(array $options = [])
 * @method DeleteAcl deleteAcl(array $options = [])
 * @method DeleteConsumerGroup deleteConsumerGroup(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteSaslUser deleteSaslUser(array $options = [])
 * @method DeleteTopic deleteTopic(array $options = [])
 * @method DescribeAcls describeAcls(array $options = [])
 * @method DescribeSaslUsers describeSaslUsers(array $options = [])
 * @method GetAllInstanceIdList getAllInstanceIdList(array $options = [])
 * @method GetAllowedIpList getAllowedIpList(array $options = [])
 * @method GetConsumerList getConsumerList(array $options = [])
 * @method GetConsumerProgress getConsumerProgress(array $options = [])
 * @method GetInstanceList getInstanceList(array $options = [])
 * @method GetQuotaTip getQuotaTip(array $options = [])
 * @method GetTopicList getTopicList(array $options = [])
 * @method GetTopicStatus getTopicStatus(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyInstanceName modifyInstanceName(array $options = [])
 * @method ModifyPartitionNum modifyPartitionNum(array $options = [])
 * @method ModifyTopicRemark modifyTopicRemark(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method StartInstance startInstance(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAllowedIp updateAllowedIp(array $options = [])
 * @method UpdateConsumerOffset updateConsumerOffset(array $options = [])
 * @method UpdateInstanceConfig updateInstanceConfig(array $options = [])
 * @method UpgradeInstanceVersion upgradeInstanceVersion(array $options = [])
 * @method UpgradePostPayOrder upgradePostPayOrder(array $options = [])
 * @method UpgradePrePayOrder upgradePrePayOrder(array $options = [])
 */
class AlikafkaApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'alikafka';

    /** @var string */
    public $version = '2019-09-16';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ConvertPostPayOrder extends Rpc
{
}

/**
 * @method string getAclResourcePatternType()
 * @method $this withAclResourcePatternType($value)
 * @method string getAclResourceType()
 * @method $this withAclResourceType($value)
 * @method string getAclOperationType()
 * @method $this withAclOperationType($value)
 * @method string getAclResourceName()
 * @method $this withAclResourceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateAcl extends Rpc
{
}

/**
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getTag()
 */
class CreateConsumerGroup extends Rpc
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
 * @method string getIoMax()
 * @method $this withIoMax($value)
 * @method string getEipMax()
 * @method $this withEipMax($value)
 * @method string getSpecType()
 * @method $this withSpecType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getPartitionNum()
 * @method $this withPartitionNum($value)
 * @method string getPaidType()
 * @method $this withPaidType($value)
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getIoMaxSpec()
 * @method $this withIoMaxSpec($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getTopicQuota()
 * @method $this withTopicQuota($value)
 * @method string getDeployType()
 * @method $this withDeployType($value)
 */
class CreatePostPayOrder extends Rpc
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
 * @method string getIoMax()
 * @method $this withIoMax($value)
 * @method string getEipMax()
 * @method $this withEipMax($value)
 * @method string getSpecType()
 * @method $this withSpecType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getPartitionNum()
 * @method $this withPartitionNum($value)
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getIoMaxSpec()
 * @method $this withIoMaxSpec($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getTopicQuota()
 * @method $this withTopicQuota($value)
 * @method string getDeployType()
 * @method $this withDeployType($value)
 */
class CreatePrePayOrder extends Rpc
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
 * @method string getType()
 * @method $this withType($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateSaslUser extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getReplicationFactor()
 * @method $this withReplicationFactor($value)
 * @method string getMinInsyncReplicas()
 * @method $this withMinInsyncReplicas($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getCompactTopic()
 * @method $this withCompactTopic($value)
 * @method array getTag()
 * @method string getPartitionNum()
 * @method $this withPartitionNum($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getLocalTopic()
 * @method $this withLocalTopic($value)
 */
class CreateTopic extends Rpc
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
 * @method string getAclResourcePatternType()
 * @method $this withAclResourcePatternType($value)
 * @method string getAclResourceType()
 * @method $this withAclResourceType($value)
 * @method string getAclOperationType()
 * @method $this withAclOperationType($value)
 * @method string getAclResourceName()
 * @method $this withAclResourceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DeleteAcl extends Rpc
{
}

/**
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteConsumerGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DeleteSaslUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class DeleteTopic extends Rpc
{
}

/**
 * @method string getAclResourcePatternType()
 * @method $this withAclResourcePatternType($value)
 * @method string getAclResourceType()
 * @method $this withAclResourceType($value)
 * @method string getAclResourceName()
 * @method $this withAclResourceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DescribeAcls extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeSaslUsers extends Rpc
{
}

class GetAllInstanceIdList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetAllowedIpList extends Rpc
{
}

/**
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetConsumerList extends Rpc
{
}

/**
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetConsumerProgress extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getInstanceId()
 * @method array getTag()
 */
class GetInstanceList extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
	public function withInstanceId(array $instanceId)
	{
	    $this->data['InstanceId'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetQuotaTip extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class GetTopicList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class GetTopicStatus extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 */
class ListTagResources extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class ModifyInstanceName extends Rpc
{
}

/**
 * @method string getAddPartitionNum()
 * @method $this withAddPartitionNum($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class ModifyPartitionNum extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class ModifyTopicRemark extends Rpc
{
}

/**
 * @method string getForceDeleteInstance()
 * @method $this withForceDeleteInstance($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getReleaseIgnoreTime()
 * @method $this withReleaseIgnoreTime($value)
 */
class ReleaseInstance extends Rpc
{
}

/**
 * @method string getSelectedZones()
 * @method $this withSelectedZones($value)
 * @method string getIsEipInner()
 * @method $this withIsEipInner($value)
 * @method string getSecurityGroup()
 * @method $this withSecurityGroup($value)
 * @method string getDeployModule()
 * @method $this withDeployModule($value)
 * @method string getIsSetUserAndPassword()
 * @method $this withIsSetUserAndPassword($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getNotifier()
 * @method $this withNotifier($value)
 * @method string getIsForceSelectedZones()
 * @method $this withIsForceSelectedZones($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getUserPhoneNum()
 * @method $this withUserPhoneNum($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getCrossZone()
 * @method $this withCrossZone($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class StartInstance extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getAllowedListIp()
 * @method $this withAllowedListIp($value)
 * @method string getUpdateType()
 * @method $this withUpdateType($value)
 * @method string getAllowedListType()
 * @method $this withAllowedListType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateAllowedIp extends Rpc
{
}

/**
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getResetType()
 * @method $this withResetType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOffsets()
 * @method $this withOffsets($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getTime()
 * @method $this withTime($value)
 */
class UpdateConsumerOffset extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class UpdateInstanceConfig extends Rpc
{
}

/**
 * @method string getTargetVersion()
 * @method $this withTargetVersion($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpgradeInstanceVersion extends Rpc
{
}

/**
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getIoMax()
 * @method $this withIoMax($value)
 * @method string getEipModel()
 * @method $this withEipModel($value)
 * @method string getIoMaxSpec()
 * @method $this withIoMaxSpec($value)
 * @method string getTopicQuota()
 * @method $this withTopicQuota($value)
 * @method string getEipMax()
 * @method $this withEipMax($value)
 * @method string getSpecType()
 * @method $this withSpecType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPartitionNum()
 * @method $this withPartitionNum($value)
 */
class UpgradePostPayOrder extends Rpc
{
}

/**
 * @method string getDiskSize()
 * @method $this withDiskSize($value)
 * @method string getIoMax()
 * @method $this withIoMax($value)
 * @method string getEipModel()
 * @method $this withEipModel($value)
 * @method string getIoMaxSpec()
 * @method $this withIoMaxSpec($value)
 * @method string getTopicQuota()
 * @method $this withTopicQuota($value)
 * @method string getEipMax()
 * @method $this withEipMax($value)
 * @method string getSpecType()
 * @method $this withSpecType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPartitionNum()
 * @method $this withPartitionNum($value)
 */
class UpgradePrePayOrder extends Rpc
{
}
