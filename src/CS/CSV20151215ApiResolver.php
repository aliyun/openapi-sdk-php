<?php

namespace AlibabaCloud\CS;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the CS based on the method name as the Api name.
 *
 * @package   AlibabaCloud\CS
 *
 * @method V20151215\AttachInstances attachInstances(array $options = [])
 * @method V20151215\BatchUpdateSharedService batchUpdateSharedService(array $options = [])
 * @method V20151215\BindSLB bindSLB(array $options = [])
 * @method V20151215\CheckAliyunCSServiceRole checkAliyunCSServiceRole(array $options = [])
 * @method V20151215\CheckSecurityGroup checkSecurityGroup(array $options = [])
 * @method V20151215\CleanUpControllerEvent cleanUpControllerEvent(array $options = [])
 * @method V20151215\CleanUpETCD cleanUpETCD(array $options = [])
 * @method V20151215\CreateAutoScale createAutoScale(array $options = [])
 * @method V20151215\CreateCluster createCluster(array $options = [])
 * @method V20151215\CreateMonitoringUser createMonitoringUser(array $options = [])
 * @method V20151215\CreateTrigger createTrigger(array $options = [])
 * @method V20151215\CreateTriggerHook createTriggerHook(array $options = [])
 * @method V20151215\DeleteAutoScale deleteAutoScale(array $options = [])
 * @method V20151215\DeleteCluster deleteCluster(array $options = [])
 * @method V20151215\DeleteClusterNode deleteClusterNode(array $options = [])
 * @method V20151215\DeleteTrigger deleteTrigger(array $options = [])
 * @method V20151215\DeployEMLSolution deployEMLSolution(array $options = [])
 * @method V20151215\DeploySharedService deploySharedService(array $options = [])
 * @method V20151215\DescribeAgentVersions describeAgentVersions(array $options = [])
 * @method V20151215\DescribeApiVersion describeApiVersion(array $options = [])
 * @method V20151215\DescribeClusterAutoScale describeClusterAutoScale(array $options = [])
 * @method V20151215\DescribeClusterCRL describeClusterCRL(array $options = [])
 * @method V20151215\DescribeClusterCerts describeClusterCerts(array $options = [])
 * @method V20151215\DescribeClusterDetail describeClusterDetail(array $options = [])
 * @method V20151215\DescribeClusterEndpoint describeClusterEndpoint(array $options = [])
 * @method V20151215\DescribeClusterEndpoints describeClusterEndpoints(array $options = [])
 * @method V20151215\DescribeClusterExtInfo describeClusterExtInfo(array $options = [])
 * @method V20151215\DescribeClusterLogs describeClusterLogs(array $options = [])
 * @method V20151215\DescribeClusterNodes describeClusterNodes(array $options = [])
 * @method V20151215\DescribeClusterSharedServices describeClusterSharedServices(array $options = [])
 * @method V20151215\DescribeClusterSnapshots describeClusterSnapshots(array $options = [])
 * @method V20151215\DescribeClusterStatus describeClusterStatus(array $options = [])
 * @method V20151215\DescribeClusterUserKubeconfig describeClusterUserKubeconfig(array $options = [])
 * @method V20151215\DescribeClusterVxlanPortRule describeClusterVxlanPortRule(array $options = [])
 * @method V20151215\DescribeClusters describeClusters(array $options = [])
 * @method V20151215\DescribeRamUsers describeRamUsers(array $options = [])
 * @method V20151215\DescribeRegionImages describeRegionImages(array $options = [])
 * @method V20151215\DescribeRegionSharedServices describeRegionSharedServices(array $options = [])
 * @method V20151215\DescribeTrigger describeTrigger(array $options = [])
 * @method V20151215\DescribeTriggerHookStatus describeTriggerHookStatus(array $options = [])
 * @method V20151215\DescribeUserInstances describeUserInstances(array $options = [])
 * @method V20151215\DescribeUserIoOptimizedInstances describeUserIoOptimizedInstances(array $options = [])
 * @method V20151215\DescribeUserQuota describeUserQuota(array $options = [])
 * @method V20151215\DescribeUserResourceDomain describeUserResourceDomain(array $options = [])
 * @method V20151215\DescribeUserResources describeUserResources(array $options = [])
 * @method V20151215\DescribeUserServices describeUserServices(array $options = [])
 * @method V20151215\DescribeVxlanPortsRules describeVxlanPortsRules(array $options = [])
 * @method V20151215\DownloadClusterNodeCerts downloadClusterNodeCerts(array $options = [])
 * @method V20151215\FixSecurityGroup fixSecurityGroup(array $options = [])
 * @method V20151215\LoginAliyunHub loginAliyunHub(array $options = [])
 * @method V20151215\ProbeTriggerHook probeTriggerHook(array $options = [])
 * @method V20151215\PushMonitoringData pushMonitoringData(array $options = [])
 * @method V20151215\ReDeploySharedService reDeploySharedService(array $options = [])
 * @method V20151215\RecoverController recoverController(array $options = [])
 * @method V20151215\RecoverControllers recoverControllers(array $options = [])
 * @method V20151215\ResetClusterNode resetClusterNode(array $options = [])
 * @method V20151215\RevokeClusterCerts revokeClusterCerts(array $options = [])
 * @method V20151215\RevokeClusterToken revokeClusterToken(array $options = [])
 * @method V20151215\RevokeTrigger revokeTrigger(array $options = [])
 * @method V20151215\RevokeTriggerHook revokeTriggerHook(array $options = [])
 * @method V20151215\ScaleCluster scaleCluster(array $options = [])
 * @method V20151215\UnBindSLB unBindSLB(array $options = [])
 * @method V20151215\UpdateAutoScale updateAutoScale(array $options = [])
 * @method V20151215\UpdateClusterAgentVersion updateClusterAgentVersion(array $options = [])
 * @method V20151215\UpdateClusterDockerVersion updateClusterDockerVersion(array $options = [])
 * @method V20151215\UpdateClusterKubenetesVersion updateClusterKubenetesVersion(array $options = [])
 * @method V20151215\UpdateController updateController(array $options = [])
 * @method V20151215\UpdateControllers updateControllers(array $options = [])
 * @method V20151215\UpdateRamPolicy updateRamPolicy(array $options = [])
 * @method V20151215\UpdateSharedService updateSharedService(array $options = [])
 * @method V20151215\UpdateSharedServices updateSharedServices(array $options = [])
 * @method V20151215\UpgradeClusterAgent upgradeClusterAgent(array $options = [])
 */
class CSV20151215ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\CS\\V20151215';
}
