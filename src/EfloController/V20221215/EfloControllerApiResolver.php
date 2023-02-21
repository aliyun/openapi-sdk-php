<?php

namespace AlibabaCloud\EfloController\V20221215;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DescribeCluster describeCluster(array $options = [])
 * @method DescribeNode describeNode(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeTask describeTask(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method ExtendCluster extendCluster(array $options = [])
 * @method ListClusterNodes listClusterNodes(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListFreeNodes listFreeNodes(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method RebootNodes rebootNodes(array $options = [])
 * @method ReimageNodes reimageNodes(array $options = [])
 * @method ShrinkCluster shrinkCluster(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class EfloControllerApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'eflo-controller';

    /** @var string */
    public $version = '2022-12-15';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getService()
 * @method $this withService($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getComponents()
 * @method string getClusterName()
 * @method string getNetworks()
 * @method string getResourceGroupId()
 * @method string getClusterDescription()
 * @method string getNodeGroups()
 * @method array getTag()
 * @method string getIgnoreFailedNodeTasks()
 * @method string getClusterType()
 */
class CreateCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponents($value)
    {
        $this->data['Components'] = $value;
        $this->options['form_params']['Components'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterName($value)
    {
        $this->data['ClusterName'] = $value;
        $this->options['form_params']['ClusterName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworks($value)
    {
        $this->data['Networks'] = $value;
        $this->options['form_params']['Networks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterDescription($value)
    {
        $this->data['ClusterDescription'] = $value;
        $this->options['form_params']['ClusterDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroups($value)
    {
        $this->data['NodeGroups'] = $value;
        $this->options['form_params']['NodeGroups'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreFailedNodeTasks($value)
    {
        $this->data['IgnoreFailedNodeTasks'] = $value;
        $this->options['form_params']['IgnoreFailedNodeTasks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['form_params']['ClusterType'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class DeleteCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class DescribeCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeId()
 */
class DescribeNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeId($value)
    {
        $this->data['NodeId'] = $value;
        $this->options['form_params']['NodeId'] = $value;

        return $this;
    }
}

/**
 * @method string getAcceptLanguage()
 */
class DescribeRegions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptLanguage($value)
    {
        $this->data['AcceptLanguage'] = $value;
        $this->options['form_params']['AcceptLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 */
class DescribeTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getAcceptLanguage()
 */
class DescribeZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptLanguage($value)
    {
        $this->data['AcceptLanguage'] = $value;
        $this->options['form_params']['AcceptLanguage'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreFailedNodeTasks()
 * @method string getClusterId()
 * @method string getNodeGroups()
 */
class ExtendCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreFailedNodeTasks($value)
    {
        $this->data['IgnoreFailedNodeTasks'] = $value;
        $this->options['form_params']['IgnoreFailedNodeTasks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroups($value)
    {
        $this->data['NodeGroups'] = $value;
        $this->options['form_params']['NodeGroups'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method string getNodeGroupId()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListClusterNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListClusters extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getMachineType()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListFreeNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMachineType($value)
    {
        $this->data['MachineType'] = $value;
        $this->options['form_params']['MachineType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getService()
 * @method $this withService($value)
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
 * @method string getIgnoreFailedNodeTasks()
 * @method string getClusterId()
 * @method string getNodes()
 */
class RebootNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreFailedNodeTasks($value)
    {
        $this->data['IgnoreFailedNodeTasks'] = $value;
        $this->options['form_params']['IgnoreFailedNodeTasks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodes($value)
    {
        $this->data['Nodes'] = $value;
        $this->options['form_params']['Nodes'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreFailedNodeTasks()
 * @method string getClusterId()
 * @method string getNodes()
 */
class ReimageNodes extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreFailedNodeTasks($value)
    {
        $this->data['IgnoreFailedNodeTasks'] = $value;
        $this->options['form_params']['IgnoreFailedNodeTasks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodes($value)
    {
        $this->data['Nodes'] = $value;
        $this->options['form_params']['Nodes'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreFailedNodeTasks()
 * @method string getClusterId()
 * @method string getNodeGroups()
 */
class ShrinkCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreFailedNodeTasks($value)
    {
        $this->data['IgnoreFailedNodeTasks'] = $value;
        $this->options['form_params']['IgnoreFailedNodeTasks'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroups($value)
    {
        $this->data['NodeGroups'] = $value;
        $this->options['form_params']['NodeGroups'] = $value;

        return $this;
    }
}

/**
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getService()
 * @method $this withService($value)
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
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getService()
 * @method $this withService($value)
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
