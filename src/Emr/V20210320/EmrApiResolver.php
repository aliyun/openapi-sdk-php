<?php

namespace AlibabaCloud\Emr\V20210320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddApplication addApplication(array $options = [])
 * @method AddApplications addApplications(array $options = [])
 * @method CancelOperationOrders cancelOperationOrders(array $options = [])
 * @method CreateAutoScalingPolicy createAutoScalingPolicy(array $options = [])
 * @method CreateAutoScalingRule createAutoScalingRule(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateClusterScript createClusterScript(array $options = [])
 * @method CreateNodeGroup createNodeGroup(array $options = [])
 * @method CreateOnAckCluster createOnAckCluster(array $options = [])
 * @method CreateOnKubeCluster createOnKubeCluster(array $options = [])
 * @method CreateScalingGroup createScalingGroup(array $options = [])
 * @method DecreaseNodes decreaseNodes(array $options = [])
 * @method DeleteAutoScalingPolicy deleteAutoScalingPolicy(array $options = [])
 * @method DeleteAutoScalingRule deleteAutoScalingRule(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteClusterScript deleteClusterScript(array $options = [])
 * @method DeleteNodeGroup deleteNodeGroup(array $options = [])
 * @method DeleteOnAckCluster deleteOnAckCluster(array $options = [])
 * @method DeleteScalingGroup deleteScalingGroup(array $options = [])
 * @method DisableAutoScalingPolicy disableAutoScalingPolicy(array $options = [])
 * @method EnableAutoScalingPolicy enableAutoScalingPolicy(array $options = [])
 * @method GetApplication getApplication(array $options = [])
 * @method GetCluster getCluster(array $options = [])
 * @method GetClusterScriptExecutionResult getClusterScriptExecutionResult(array $options = [])
 * @method GetNodeGroup getNodeGroup(array $options = [])
 * @method GetOnAckCluster getOnAckCluster(array $options = [])
 * @method GetOnKubeCluster getOnKubeCluster(array $options = [])
 * @method GetOnKubeClusterResourceQuota getOnKubeClusterResourceQuota(array $options = [])
 * @method GetOnKubeClusterResourceUsage getOnKubeClusterResourceUsage(array $options = [])
 * @method GetOperation getOperation(array $options = [])
 * @method GetScalingGroup getScalingGroup(array $options = [])
 * @method IncreaseClusterDisk increaseClusterDisk(array $options = [])
 * @method IncreaseNodes increaseNodes(array $options = [])
 * @method JoinResourceGroup joinResourceGroup(array $options = [])
 * @method ListApplicationConfigFiles listApplicationConfigFiles(array $options = [])
 * @method ListApplicationConfigHistory listApplicationConfigHistory(array $options = [])
 * @method ListApplicationConfigs listApplicationConfigs(array $options = [])
 * @method ListApplications listApplications(array $options = [])
 * @method ListAutoScalingActivities listAutoScalingActivities(array $options = [])
 * @method ListAutoScalingMetrics listAutoScalingMetrics(array $options = [])
 * @method ListAutoScalingPolicies listAutoScalingPolicies(array $options = [])
 * @method ListAutoScalingRules listAutoScalingRules(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListClusters2 listClusters2(array $options = [])
 * @method ListClusterScripts listClusterScripts(array $options = [])
 * @method ListComponentHealth listComponentHealth(array $options = [])
 * @method ListComponentInstances listComponentInstances(array $options = [])
 * @method ListComponents listComponents(array $options = [])
 * @method ListNodeGroups listNodeGroups(array $options = [])
 * @method ListNodes listNodes(array $options = [])
 * @method ListNodesv3 listNodesv3(array $options = [])
 * @method ListOnAckClusters listOnAckClusters(array $options = [])
 * @method ListOnAckComponents listOnAckComponents(array $options = [])
 * @method ListOnKubeClusterDedicatedNodes listOnKubeClusterDedicatedNodes(array $options = [])
 * @method ListOnKubeClusterInspectionResults listOnKubeClusterInspectionResults(array $options = [])
 * @method ListOnKubeClusters listOnKubeClusters(array $options = [])
 * @method ListOnKubeComponents listOnKubeComponents(array $options = [])
 * @method ListResourceHealthInspection listResourceHealthInspection(array $options = [])
 * @method ListScalingActivities listScalingActivities(array $options = [])
 * @method ListScalingGroups listScalingGroups(array $options = [])
 * @method ListScalingMetrics listScalingMetrics(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ReleaseOnKubeCluster releaseOnKubeCluster(array $options = [])
 * @method RunApplicationAction runApplicationAction(array $options = [])
 * @method RunScalingAction runScalingAction(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TagResourcesSystemTags tagResourcesSystemTags(array $options = [])
 * @method TerminateOperation terminateOperation(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UntagResourcesSystemTags untagResourcesSystemTags(array $options = [])
 * @method UpdateAckClusterNodePools updateAckClusterNodePools(array $options = [])
 * @method UpdateAckClusterNodes updateAckClusterNodes(array $options = [])
 * @method UpdateApplicationConfigs updateApplicationConfigs(array $options = [])
 * @method UpdateAutoScalingRule updateAutoScalingRule(array $options = [])
 * @method UpdateClusterAttribute updateClusterAttribute(array $options = [])
 * @method UpdateClusterScript updateClusterScript(array $options = [])
 * @method UpdateOnKubeClusterDedicatedNodePools updateOnKubeClusterDedicatedNodePools(array $options = [])
 * @method UpdateOnKubeClusterDedicatedNodes updateOnKubeClusterDedicatedNodes(array $options = [])
 * @method UpdateScalingGroup updateScalingGroup(array $options = [])
 */
class EmrApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Emr';

    /** @var string */
    public $version = '2021-03-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'emr';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getApplications()
 * @method $this withApplications($value)
 */
class AddApplication extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getApplications()
 * @method $this withApplications($value)
 */
class AddApplications extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class CancelOperationOrders extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleSpecs()
 * @method $this withScalingRuleSpecs($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getEnableWhenCreate()
 * @method $this withEnableWhenCreate($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class CreateAutoScalingPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingRuleSpec()
 * @method $this withScalingRuleSpec($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getScalingPolicyId()
 * @method $this withScalingPolicyId($value)
 */
class CreateAutoScalingRule extends Rpc
{
}

/**
 * @method string getMainVersion()
 * @method $this withMainVersion($value)
 * @method string getNodeKeyPairName()
 * @method $this withNodeKeyPairName($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getMetaStoreType()
 * @method $this withMetaStoreType($value)
 * @method string getReleaseVersion()
 * @method $this withReleaseVersion($value)
 * @method string getDeployMode()
 * @method $this withDeployMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getClickhouseConf()
 * @method $this withClickhouseConf($value)
 * @method string getNodeGroups()
 * @method $this withNodeGroups($value)
 * @method string getMetaStoreConf()
 * @method $this withMetaStoreConf($value)
 * @method string getNodeRamRole()
 * @method $this withNodeRamRole($value)
 * @method string getMasterWithPublicIp()
 * @method $this withMasterWithPublicIp($value)
 * @method string getUsers()
 * @method $this withUsers($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getNodeAttributes()
 * @method $this withNodeAttributes($value)
 * @method string getNodeRootPassword()
 * @method $this withNodeRootPassword($value)
 * @method string getBootstrapScripts()
 * @method $this withBootstrapScripts($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityMode()
 * @method $this withSecurityMode($value)
 * @method string getSubscriptionConfig()
 * @method $this withSubscriptionConfig($value)
 * @method string getEmrStudioConfigs()
 * @method $this withEmrStudioConfigs($value)
 * @method string getSlaveSecurityGroupId()
 * @method $this withSlaveSecurityGroupId($value)
 * @method string getOptionApplications()
 * @method $this withOptionApplications($value)
 * @method string getApplicationConfigs()
 * @method $this withApplicationConfigs($value)
 * @method string getComponentLayouts()
 * @method $this withComponentLayouts($value)
 * @method string getPromotions()
 * @method $this withPromotions($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 * @method string getApplications()
 * @method $this withApplications($value)
 */
class CreateCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterScripts()
 * @method $this withClusterScripts($value)
 * @method string getScriptType()
 * @method $this withScriptType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class CreateClusterScript extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNodeGroup()
 * @method $this withNodeGroup($value)
 * @method string getSlaveSecurityGroupId()
 * @method $this withSlaveSecurityGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class CreateNodeGroup extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getAckNodePools()
 * @method $this withAckNodePools($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getAckNamespace()
 * @method $this withAckNamespace($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getAckNodes()
 * @method $this withAckNodes($value)
 * @method string getProductRoleName()
 * @method $this withProductRoleName($value)
 * @method string getApplications()
 * @method $this withApplications($value)
 */
class CreateOnAckCluster extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getAckNodePools()
 * @method $this withAckNodePools($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getAckNamespace()
 * @method $this withAckNamespace($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getAckNodes()
 * @method $this withAckNodes($value)
 * @method string getProductRoleName()
 * @method $this withProductRoleName($value)
 * @method string getApplications()
 * @method $this withApplications($value)
 */
class CreateOnKubeCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingConfig()
 * @method $this withScalingConfig($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getScalingRuleList()
 * @method $this withScalingRuleList($value)
 */
class CreateScalingGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNodeGroups()
 * @method $this withNodeGroups($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class DecreaseNodes extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getScalingPolicyId()
 * @method $this withScalingPolicyId($value)
 */
class DeleteAutoScalingPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class DeleteAutoScalingRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getForceRelease()
 * @method $this withForceRelease($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScriptType()
 * @method $this withScriptType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScriptBizId()
 * @method $this withScriptBizId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class DeleteClusterScript extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class DeleteNodeGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getProductRoleName()
 * @method $this withProductRoleName($value)
 */
class DeleteOnAckCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class DeleteScalingGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getScalingPolicyId()
 * @method $this withScalingPolicyId($value)
 */
class DisableAutoScalingPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getScalingPolicyId()
 * @method $this withScalingPolicyId($value)
 */
class EnableAutoScalingPolicy extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetApplication extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScriptBizId()
 * @method $this withScriptBizId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetClusterScriptExecutionResult extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetNodeGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetOnAckCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetOnKubeCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetOnKubeClusterResourceQuota extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetOnKubeClusterResourceUsage extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetOperation extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class GetScalingGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeGroups()
 * @method $this withNodeGroups($value)
 * @method string getRollingRestart()
 * @method $this withRollingRestart($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getDataDiskSize()
 * @method $this withDataDiskSize($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class IncreaseClusterDisk extends Rpc
{
}

/**
 * @method string getAutoPayOrder()
 * @method $this withAutoPayOrder($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeGroupList()
 * @method $this withNodeGroupList($value)
 * @method string getNodeGroups()
 * @method $this withNodeGroups($value)
 * @method string getApplicationConfigs()
 * @method $this withApplicationConfigs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPromotions()
 * @method $this withPromotions($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class IncreaseNodes extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class JoinResourceGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListApplicationConfigFiles extends Rpc
{
}

/**
 * @method string getModifier()
 * @method $this withModifier($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getConfigFileName()
 * @method $this withConfigFileName($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigItemKey()
 * @method $this withConfigItemKey($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 */
class ListApplicationConfigHistory extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigFileName()
 * @method $this withConfigFileName($value)
 * @method string getConfigItemKey()
 * @method $this withConfigItemKey($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListApplicationConfigs extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationNames()
 * @method $this withApplicationNames($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListApplications extends Rpc
{
}

/**
 * @method string getScalingActivityStates()
 * @method $this withScalingActivityStates($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getScalingActivityType()
 * @method $this withScalingActivityType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getScalingPolicyId()
 * @method $this withScalingPolicyId($value)
 */
class ListAutoScalingActivities extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListAutoScalingMetrics extends Rpc
{
}

/**
 * @method string getScalingPolicyState()
 * @method $this withScalingPolicyState($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListAutoScalingPolicies extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingRuleType()
 * @method $this withScalingRuleType($value)
 * @method string getScalingRuleState()
 * @method $this withScalingRuleState($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getScalingPolicyId()
 * @method $this withScalingPolicyId($value)
 */
class ListAutoScalingRules extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIaasTypes()
 * @method $this withIaasTypes($value)
 * @method string getClusterIds()
 * @method $this withClusterIds($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getClusterStates()
 * @method $this withClusterStates($value)
 * @method string getPaymentTypes()
 * @method $this withPaymentTypes($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getClusterTypes()
 * @method $this withClusterTypes($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPaymentStatuses()
 * @method $this withPaymentStatuses($value)
 */
class ListClusters extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIaasTypes()
 * @method $this withIaasTypes($value)
 * @method string getClusterIds()
 * @method $this withClusterIds($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getClusterStates()
 * @method $this withClusterStates($value)
 * @method string getPaymentTypes()
 * @method $this withPaymentTypes($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getClusterTypes()
 * @method $this withClusterTypes($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPaymentStatuses()
 * @method $this withPaymentStatuses($value)
 */
class ListClusters2 extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScriptType()
 * @method $this withScriptType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListClusterScripts extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListComponentHealth extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeNames()
 * @method $this withNodeNames($value)
 * @method string getComponentNames()
 * @method $this withComponentNames($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationNames()
 * @method $this withApplicationNames($value)
 * @method string getComponentStatuses()
 * @method $this withComponentStatuses($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getNodeIds()
 * @method $this withNodeIds($value)
 */
class ListComponentInstances extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getComponentNames()
 * @method $this withComponentNames($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationNames()
 * @method $this withApplicationNames($value)
 * @method string getComponentStatuses()
 * @method $this withComponentStatuses($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListComponents extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeGroupIds()
 * @method $this withNodeGroupIds($value)
 * @method string getNodeGroupTypes()
 * @method $this withNodeGroupTypes($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getNodeGroupStatuses()
 * @method $this withNodeGroupStatuses($value)
 * @method string getNodeGroupNames()
 * @method $this withNodeGroupNames($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListNodeGroups extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeNames()
 * @method $this withNodeNames($value)
 * @method string getPublicIp()
 * @method $this withPublicIp($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPrivateIp()
 * @method $this withPrivateIp($value)
 * @method string getNodeStatuses()
 * @method $this withNodeStatuses($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getNodeIds()
 * @method $this withNodeIds($value)
 */
class ListNodes extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeNames()
 * @method $this withNodeNames($value)
 * @method string getPublicIp()
 * @method $this withPublicIp($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPrivateIp()
 * @method $this withPrivateIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getNodeIds()
 * @method $this withNodeIds($value)
 */
class ListNodesv3 extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterTypes()
 * @method $this withClusterTypes($value)
 * @method string getMainVersion()
 * @method $this withMainVersion($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getReleaseVersion()
 * @method $this withReleaseVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getClusterStatuses()
 * @method $this withClusterStatuses($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListOnAckClusters extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListOnAckComponents extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDedicatedNodePools()
 * @method $this withDedicatedNodePools($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListOnKubeClusterDedicatedNodes extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getClusterStatus()
 * @method $this withClusterStatus($value)
 * @method string getAckNamespace()
 * @method $this withAckNamespace($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListOnKubeClusterInspectionResults extends Rpc
{
}

/**
 * @method string getClusterTypes()
 * @method $this withClusterTypes($value)
 * @method string getMainVersion()
 * @method $this withMainVersion($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getReleaseVersion()
 * @method $this withReleaseVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getClusterStatuses()
 * @method $this withClusterStatuses($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListOnKubeClusters extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListOnKubeComponents extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeNames()
 * @method $this withNodeNames($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getHealthStatuses()
 * @method $this withHealthStatuses($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListResourceHealthInspection extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListScalingActivities extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListScalingGroups extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class ListScalingMetrics extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class ListTagResources extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getProductRoleName()
 * @method $this withProductRoleName($value)
 */
class ReleaseOnKubeCluster extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getExecuteStrategy()
 * @method $this withExecuteStrategy($value)
 * @method string getNodeCountPerBatch()
 * @method $this withNodeCountPerBatch($value)
 * @method string getComponentInstanceSelector()
 * @method $this withComponentInstanceSelector($value)
 * @method string getRollingExecute()
 * @method $this withRollingExecute($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getCustomParams()
 * @method $this withCustomParams($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class RunApplicationAction extends Rpc
{
}

/**
 * @method string getScalingActionType()
 * @method $this withScalingActionType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getActionParam()
 * @method $this withActionParam($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class RunScalingAction extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class TagResources extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class TagResourcesSystemTags extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class TerminateOperation extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getUntagAll()
 * @method $this withUntagAll($value)
 * @method string getTagKeys()
 * @method $this withTagKeys($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class UntagResources extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTagKeys()
 * @method $this withTagKeys($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class UntagResourcesSystemTags extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAckNodePools()
 * @method $this withAckNodePools($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class UpdateAckClusterNodePools extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getAckNodes()
 * @method $this withAckNodes($value)
 * @method string getSkippedNodePools()
 * @method $this withSkippedNodePools($value)
 */
class UpdateAckClusterNodes extends Rpc
{
}

/**
 * @method string getConfigs()
 * @method $this withConfigs($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRefreshNodeConfig()
 * @method $this withRefreshNodeConfig($value)
 * @method string getApplicationConfigs()
 * @method $this withApplicationConfigs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRefreshConfig()
 * @method $this withRefreshConfig($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class UpdateApplicationConfigs extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getScalingRuleSpec()
 * @method $this withScalingRuleSpec($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class UpdateAutoScalingRule extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class UpdateClusterAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getScriptType()
 * @method $this withScriptType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScript()
 * @method $this withScript($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class UpdateClusterScript extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDedicatedNodePools()
 * @method $this withDedicatedNodePools($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getProductRoleName()
 * @method $this withProductRoleName($value)
 */
class UpdateOnKubeClusterDedicatedNodePools extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getAckClusterId()
 * @method $this withAckClusterId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDedicatedNodePools()
 * @method $this withDedicatedNodePools($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 * @method string getDedicatedNodes()
 * @method $this withDedicatedNodes($value)
 */
class UpdateOnKubeClusterDedicatedNodes extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScalingGroupConfig()
 * @method $this withScalingGroupConfig($value)
 * @method string getScalingRules()
 * @method $this withScalingRules($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSystemDebug()
 * @method $this withSystemDebug($value)
 */
class UpdateScalingGroup extends Rpc
{
}
