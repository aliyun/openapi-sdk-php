<?php

namespace AlibabaCloud\Smc\V20190601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateReplicationJob createReplicationJob(array $options = [])
 * @method DeleteReplicationJob deleteReplicationJob(array $options = [])
 * @method DeleteSourceServer deleteSourceServer(array $options = [])
 * @method DescribeReplicationJobs describeReplicationJobs(array $options = [])
 * @method DescribeSourceServers describeSourceServers(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyReplicationJobAttribute modifyReplicationJobAttribute(array $options = [])
 * @method ModifySourceServerAttribute modifySourceServerAttribute(array $options = [])
 * @method StartReplicationJob startReplicationJob(array $options = [])
 * @method StopReplicationJob stopReplicationJob(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class SmcApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'smc';

    /** @var string */
    public $version = '2019-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'smc';
}

/**
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getReplicationParameters()
 * @method $this withReplicationParameters($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method array getTag()
 * @method string getNetMode()
 * @method $this withNetMode($value)
 * @method string getContainerNamespace()
 * @method $this withContainerNamespace($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getValidTime()
 * @method $this withValidTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getScheduledStartTime()
 * @method $this withScheduledStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceRamRole()
 * @method $this withInstanceRamRole($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxNumberOfImageToKeep()
 * @method $this withMaxNumberOfImageToKeep($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getContainerRepository()
 * @method $this withContainerRepository($value)
 * @method string getContainerTag()
 * @method $this withContainerTag($value)
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getRunOnce()
 * @method $this withRunOnce($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getSystemDiskPart()
 * @method array getDataDisk()
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateReplicationJob extends Rpc
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
     * @param array $systemDiskPart
     *
     * @return $this
     */
	public function withSystemDiskPart(array $systemDiskPart)
	{
	    $this->data['SystemDiskPart'] = $systemDiskPart;
		foreach ($systemDiskPart as $depth1 => $depth1Value) {
			if(isset($depth1Value['SizeBytes'])){
				$this->options['query']['SystemDiskPart.' . ($depth1 + 1) . '.SizeBytes'] = $depth1Value['SizeBytes'];
			}
			if(isset($depth1Value['Block'])){
				$this->options['query']['SystemDiskPart.' . ($depth1 + 1) . '.Block'] = $depth1Value['Block'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['SystemDiskPart.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
		}

		return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			foreach ($depth1Value['Part'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['SizeBytes'])){
					$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Part.' . ($depth2 + 1) . '.SizeBytes'] = $depth2Value['SizeBytes'];
				}
				if(isset($depth2Value['Block'])){
					$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Part.' . ($depth2 + 1) . '.Block'] = $depth2Value['Block'];
				}
				if(isset($depth2Value['Device'])){
					$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Part.' . ($depth2 + 1) . '.Device'] = $depth2Value['Device'];
				}
			}
			if(isset($depth1Value['Index'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DeleteReplicationJob extends Rpc
{
}

/**
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteSourceServer extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getJobId()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getSourceId()
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeReplicationJobs extends Rpc
{

    /**
     * @param array $jobId
     *
     * @return $this
     */
	public function withJobId(array $jobId)
	{
	    $this->data['JobId'] = $jobId;
		foreach ($jobId as $i => $iValue) {
			$this->options['query']['JobId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceId
     *
     * @return $this
     */
	public function withSourceId(array $sourceId)
	{
	    $this->data['SourceId'] = $sourceId;
		foreach ($sourceId as $i => $iValue) {
			$this->options['query']['SourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method array getSourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeSourceServers extends Rpc
{

    /**
     * @param array $sourceId
     *
     * @return $this
     */
	public function withSourceId(array $sourceId)
	{
	    $this->data['SourceId'] = $sourceId;
		foreach ($sourceId as $i => $iValue) {
			$this->options['query']['SourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
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
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getContainerRepository()
 * @method $this withContainerRepository($value)
 * @method string getContainerTag()
 * @method $this withContainerTag($value)
 * @method string getContainerNamespace()
 * @method $this withContainerNamespace($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getSystemDiskPart()
 * @method string getValidTime()
 * @method $this withValidTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDataDisk()
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getScheduledStartTime()
 * @method $this withScheduledStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceRamRole()
 * @method $this withInstanceRamRole($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxNumberOfImageToKeep()
 * @method $this withMaxNumberOfImageToKeep($value)
 */
class ModifyReplicationJobAttribute extends Rpc
{

    /**
     * @param array $systemDiskPart
     *
     * @return $this
     */
	public function withSystemDiskPart(array $systemDiskPart)
	{
	    $this->data['SystemDiskPart'] = $systemDiskPart;
		foreach ($systemDiskPart as $depth1 => $depth1Value) {
			if(isset($depth1Value['SizeBytes'])){
				$this->options['query']['SystemDiskPart.' . ($depth1 + 1) . '.SizeBytes'] = $depth1Value['SizeBytes'];
			}
			if(isset($depth1Value['Block'])){
				$this->options['query']['SystemDiskPart.' . ($depth1 + 1) . '.Block'] = $depth1Value['Block'];
			}
			if(isset($depth1Value['Device'])){
				$this->options['query']['SystemDiskPart.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			}
		}

		return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function withDataDisk(array $dataDisk)
	{
	    $this->data['DataDisk'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			if(isset($depth1Value['Size'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			foreach ($depth1Value['Part'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['SizeBytes'])){
					$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Part.' . ($depth2 + 1) . '.SizeBytes'] = $depth2Value['SizeBytes'];
				}
				if(isset($depth2Value['Block'])){
					$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Part.' . ($depth2 + 1) . '.Block'] = $depth2Value['Block'];
				}
				if(isset($depth2Value['Device'])){
					$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Part.' . ($depth2 + 1) . '.Device'] = $depth2Value['Device'];
				}
			}
			if(isset($depth1Value['Index'])){
				$this->options['query']['DataDisk.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifySourceServerAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class StartReplicationJob extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class StopReplicationJob extends Rpc
{
}

/**
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
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
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
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
