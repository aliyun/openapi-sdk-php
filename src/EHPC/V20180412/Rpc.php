<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

class V20180412Rpc extends Rpc
{
    /** @var string */
    public $product = 'EHPC';

    /** @var string */
    public $version = '2018-04-12';

    /** @var string */
    public $serviceCode = 'ehs';
}

/**
 * @method string getReportType()
 * @method $this withReportType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetAccountingReport extends V20180412Rpc
{
}

/**
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class InstallSoftware extends V20180412Rpc
{
}

/**
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UninstallSoftware extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListInstalledSoftware extends V20180412Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListNodesByQueue extends V20180412Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method array getNode()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class SetQueue extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNode(array $value)
    {
        $this->data['Node'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Node.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteQueue extends V20180412Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddQueue extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCpfsFileSystems extends V20180412Rpc
{
}

class ListAvailableFileSystemTypes extends V20180412Rpc
{
}

/**
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCidrIp()
 * @method $this withCidrIp($value)
 */
class StopVisualService extends V20180412Rpc
{
}

/**
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCidrIp()
 * @method $this withCidrIp($value)
 */
class StartVisualService extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetVisualServiceStatus extends V20180412Rpc
{
}

/**
 * @method string getPasswd()
 * @method $this withPasswd($value)
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyVisualServicePasswd extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClustersMeta extends V20180412Rpc
{
}

/**
 * @method string getTargetFile()
 * @method $this withTargetFile($value)
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class CreateJobFile extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFileSystemWithMountTargets extends V20180412Rpc
{
}

/**
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class ListAvailableEcsTypes extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListQueues extends V20180412Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getSkuCode()
 * @method $this withSkuCode($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeImagePrice extends V20180412Rpc
{
}

/**
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method array getCommodities()
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCommodities(array $value)
    {
        $this->data['Commodities'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Commodities.' . ($i + 1) . '.Amount'] = $value[$i]['Amount'];
            $this->options['query']['Commodities.' . ($i + 1) . '.Period'] = $value[$i]['Period'];
            $this->options['query']['Commodities.' . ($i + 1) . '.NodeType'] = $value[$i]['NodeType'];
            $this->options['query']['Commodities.' . ($i + 1) . '.SystemDiskCategory'] = $value[$i]['SystemDiskCategory'];
            $this->options['query']['Commodities.' . ($i + 1) . '.SystemDiskSize'] = $value[$i]['SystemDiskSize'];
            $this->options['query']['Commodities.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['Commodities.' . ($i + 1) . '.NetworkType'] = $value[$i]['NetworkType'];
        }

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCloudMetricProfilings extends V20180412Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 * @method string getFreq()
 * @method $this withFreq($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RunCloudMetricProfiling extends V20180412Rpc
{
}

/**
 * @method string getProfilingId()
 * @method $this withProfilingId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetCloudMetricProfiling extends V20180412Rpc
{
}

/**
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddLocalNodes extends V20180412Rpc
{
}

/**
 * @method string getAggregationType()
 * @method $this withAggregationType($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getMetricCategories()
 * @method $this withMetricCategories($value)
 * @method string getMetricScope()
 * @method $this withMetricScope($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getAggregationInterval()
 * @method $this withAggregationInterval($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 */
class GetCloudMetricLogs extends V20180412Rpc
{
}

/**
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class PullImage extends V20180412Rpc
{
}

/**
 * @method string getDefaultRepoLocation()
 * @method $this withDefaultRepoLocation($value)
 * @method string getDBPassword()
 * @method $this withDBPassword($value)
 * @method array getRepo()
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBUsername()
 * @method $this withDBUsername($value)
 * @method string getDBServerInfo()
 * @method $this withDBServerInfo($value)
 * @method string getPullUpdateTimeout()
 * @method $this withPullUpdateTimeout($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getImageExpirationTimeout()
 * @method $this withImageExpirationTimeout($value)
 */
class ModifyImageGatewayConfig extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRepo(array $value)
    {
        $this->data['Repo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Repo.' . ($i + 1) . '.Auth'] = $value[$i]['Auth'];
            $this->options['query']['Repo.' . ($i + 1) . '.Location'] = $value[$i]['Location'];
            $this->options['query']['Repo.' . ($i + 1) . '.URL'] = $value[$i]['URL'];
        }

        return $this;
    }
}

/**
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListContainerImages extends V20180412Rpc
{
}

/**
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class DescribeImage extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeImageGatewayConfig extends V20180412Rpc
{
}

/**
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class DeleteImage extends V20180412Rpc
{
}

/**
 * @method string getEhpcVersion()
 * @method $this withEhpcVersion($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getEcsOrderComputeInstanceType()
 * @method string getOnPremiseVolumeRemotePath()
 * @method $this withOnPremiseVolumeRemotePath($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getVolumeType()
 * @method $this withVolumeType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getOnPremiseVolumeMountPoint()
 * @method $this withOnPremiseVolumeMountPoint($value)
 * @method string getOnPremiseVolumeProtocol()
 * @method $this withOnPremiseVolumeProtocol($value)
 * @method string getVolumeProtocol()
 * @method $this withVolumeProtocol($value)
 * @method string getOnPremiseVolumeLocalPath()
 * @method $this withOnPremiseVolumeLocalPath($value)
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method string getRemoteDirectory()
 * @method $this withRemoteDirectory($value)
 * @method array getPostInstallScript()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method array getApplication()
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVolumeId()
 * @method $this withVolumeId($value)
 * @method string getVolumeMountpoint()
 * @method $this withVolumeMountpoint($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class CreateHybridCluster extends V20180412Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderComputeInstanceType($value)
    {
        $this->data['EcsOrderComputeInstanceType'] = $value;
        $this->options['query']['EcsOrder.Compute.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPostInstallScript(array $value)
    {
        $this->data['PostInstallScript'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PostInstallScript.' . ($i + 1) . '.Args'] = $value[$i]['Args'];
            $this->options['query']['PostInstallScript.' . ($i + 1) . '.Url'] = $value[$i]['Url'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withApplication(array $value)
    {
        $this->data['Application'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Application.' . ($i + 1) . '.Tag'] = $value[$i]['Tag'];
        }

        return $this;
    }
}

/**
 * @method string getNode()
 * @method $this withNode($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetHybridClusterConfig extends V20180412Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class ModifyContainerAppAttributes extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListContainerApps extends V20180412Rpc
{
}

/**
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class DescribeContainerApp extends V20180412Rpc
{
}

/**
 * @method array getContainerApp()
 */
class DeleteContainerApps extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withContainerApp(array $value)
    {
        $this->data['ContainerApp'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ContainerApp.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class AddContainerApp extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCommands extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 */
class ListInvocationStatus extends V20180412Rpc
{
}

/**
 * @method array getInstance()
 * @method string getInvokeRecordStatus()
 * @method $this withInvokeRecordStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListInvocationResults extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstance(array $value)
    {
        $this->data['Instance'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method array getInstance()
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 */
class InvokeShellCommand extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstance(array $value)
    {
        $this->data['Instance'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeAutoScaleConfig extends V20180412Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 */
class RecoverCluster extends V20180412Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopNodes extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstance(array $value)
    {
        $this->data['Instance'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StartCluster extends V20180412Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StartNodes extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstance(array $value)
    {
        $this->data['Instance'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopCluster extends V20180412Rpc
{
}

/**
 * @method string getJobs()
 * @method $this withJobs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopJobs extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusters extends V20180412Rpc
{
}

class ListRegions extends V20180412Rpc
{
}

/**
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOnlyDetached()
 * @method $this withOnlyDetached($value)
 */
class ListNodesNoPaging extends V20180412Rpc
{
}

/**
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getRerunable()
 * @method $this withRerunable($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobs extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class ModifyUserPasswords extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUser(array $value)
    {
        $this->data['User'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['User.' . ($i + 1) . '.Password'] = $value[$i]['Password'];
            $this->options['query']['User.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }
}

/**
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class ListPreferredEcsTypes extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetAutoScaleConfig extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class ModifyUserGroups extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUser(array $value)
    {
        $this->data['User'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['User.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['User.' . ($i + 1) . '.Group'] = $value[$i]['Group'];
        }

        return $this;
    }
}

/**
 * @method string getShrinkIdleTimes()
 * @method $this withShrinkIdleTimes($value)
 * @method string getGrowTimeoutInMinutes()
 * @method $this withGrowTimeoutInMinutes($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getEnableAutoGrow()
 * @method $this withEnableAutoGrow($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getEnableAutoShrink()
 * @method $this withEnableAutoShrink($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getMaxNodesInCluster()
 * @method $this withMaxNodesInCluster($value)
 * @method string getExcludeNodes()
 * @method $this withExcludeNodes($value)
 * @method string getShrinkIntervalInMinutes()
 * @method $this withShrinkIntervalInMinutes($value)
 * @method array getQueues()
 * @method string getExtraNodesGrowRatio()
 * @method $this withExtraNodesGrowRatio($value)
 * @method string getGrowIntervalInMinutes()
 * @method $this withGrowIntervalInMinutes($value)
 * @method string getGrowRatio()
 * @method $this withGrowRatio($value)
 */
class SetAutoScaleConfig extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withQueues(array $value)
    {
        $this->data['Queues'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Queues.' . ($i + 1) . '.SpotStrategy'] = $value[$i]['SpotStrategy'];
            $this->options['query']['Queues.' . ($i + 1) . '.QueueName'] = $value[$i]['QueueName'];
            foreach ($value[$i]['InstanceTypess'] as $j => $jValue) {
                $this->options['query']['Queues.' . ($i + 1) . '.InstanceTypes.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Queues.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['Queues.' . ($i + 1) . '.EnableAutoGrow'] = $value[$i]['EnableAutoGrow'];
            $this->options['query']['Queues.' . ($i + 1) . '.SpotPriceLimit'] = $value[$i]['SpotPriceLimit'];
            $this->options['query']['Queues.' . ($i + 1) . '.EnableAutoShrink'] = $value[$i]['EnableAutoShrink'];
        }

        return $this;
    }
}

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 */
class EditJobTemplate extends V20180412Rpc
{
}

/**
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getComputeSpotStrategy()
 * @method $this withComputeSpotStrategy($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getEcsChargeType()
 * @method $this withEcsChargeType($value)
 * @method string getCreateMode()
 * @method $this withCreateMode($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getComputeSpotPriceLimit()
 * @method $this withComputeSpotPriceLimit($value)
 */
class AddNodes extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class DeleteUsers extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUser(array $value)
    {
        $this->data['User'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['User.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }
}

class ListImages extends V20180412Rpc
{
}

/**
 * @method string getJobs()
 * @method $this withJobs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteJobs extends V20180412Rpc
{
}

/**
 * @method string getReleaseInstance()
 * @method $this withReleaseInstance($value)
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteNodes extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstance(array $value)
    {
        $this->data['Instance'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getBaseOsTag()
 * @method $this withBaseOsTag($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 */
class ListCustomImages extends V20180412Rpc
{
}

/**
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResetNodes extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstance(array $value)
    {
        $this->data['Instance'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
        }

        return $this;
    }
}

/**
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class SetJobUser extends V20180412Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobTemplates extends V20180412Rpc
{
}

/**
 * @method string getEhpcVersion()
 * @method $this withEhpcVersion($value)
 */
class ListSoftwares extends V20180412Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class AddUsers extends V20180412Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUser(array $value)
    {
        $this->data['User'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['User.' . ($i + 1) . '.Password'] = $value[$i]['Password'];
            $this->options['query']['User.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['User.' . ($i + 1) . '.Group'] = $value[$i]['Group'];
        }

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeCluster extends V20180412Rpc
{
}

class ListCurrentClientVersion extends V20180412Rpc
{
}

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getPostCmdLine()
 * @method $this withPostCmdLine($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getUnzipCmd()
 * @method $this withUnzipCmd($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getInputFileUrl()
 * @method $this withInputFileUrl($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class SubmitJob extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListVolumes extends V20180412Rpc
{
}

/**
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListNodes extends V20180412Rpc
{
}

/**
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeClient extends V20180412Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyClusterAttributes extends V20180412Rpc
{
}

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 */
class CreateJobTemplate extends V20180412Rpc
{
}

/**
 * @method string getSccClusterId()
 * @method $this withSccClusterId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getEcsOrderManagerInstanceType()
 * @method string getEhpcVersion()
 * @method $this withEhpcVersion($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getEcsOrderComputeInstanceType()
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getVolumeType()
 * @method $this withVolumeType($value)
 * @method string getDeployMode()
 * @method $this withDeployMode($value)
 * @method string getEcsOrderManagerCount()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getEcsOrderLoginCount()
 * @method string getRemoteVisEnable()
 * @method $this withRemoteVisEnable($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getComputeSpotPriceLimit()
 * @method $this withComputeSpotPriceLimit($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getVolumeProtocol()
 * @method $this withVolumeProtocol($value)
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method string getRemoteDirectory()
 * @method $this withRemoteDirectory($value)
 * @method string getEcsOrderComputeCount()
 * @method string getComputeSpotStrategy()
 * @method $this withComputeSpotStrategy($value)
 * @method array getPostInstallScript()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method array getApplication()
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getEcsChargeType()
 * @method $this withEcsChargeType($value)
 * @method string getInputFileUrl()
 * @method $this withInputFileUrl($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getHaEnable()
 * @method $this withHaEnable($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 * @method string getVolumeId()
 * @method $this withVolumeId($value)
 * @method string getVolumeMountpoint()
 * @method $this withVolumeMountpoint($value)
 * @method string getEcsOrderLoginInstanceType()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateCluster extends V20180412Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderManagerInstanceType($value)
    {
        $this->data['EcsOrderManagerInstanceType'] = $value;
        $this->options['query']['EcsOrder.Manager.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderComputeInstanceType($value)
    {
        $this->data['EcsOrderComputeInstanceType'] = $value;
        $this->options['query']['EcsOrder.Compute.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderManagerCount($value)
    {
        $this->data['EcsOrderManagerCount'] = $value;
        $this->options['query']['EcsOrder.Manager.Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderLoginCount($value)
    {
        $this->data['EcsOrderLoginCount'] = $value;
        $this->options['query']['EcsOrder.Login.Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderComputeCount($value)
    {
        $this->data['EcsOrderComputeCount'] = $value;
        $this->options['query']['EcsOrder.Compute.Count'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPostInstallScript(array $value)
    {
        $this->data['PostInstallScript'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PostInstallScript.' . ($i + 1) . '.Args'] = $value[$i]['Args'];
            $this->options['query']['PostInstallScript.' . ($i + 1) . '.Url'] = $value[$i]['Url'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withApplication(array $value)
    {
        $this->data['Application'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Application.' . ($i + 1) . '.Tag'] = $value[$i]['Tag'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderLoginInstanceType($value)
    {
        $this->data['EcsOrderLoginInstanceType'] = $value;
        $this->options['query']['EcsOrder.Login.InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getReleaseInstance()
 * @method $this withReleaseInstance($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsers extends V20180412Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusterLogs extends V20180412Rpc
{
}

/**
 * @method string getTemplates()
 * @method $this withTemplates($value)
 */
class DeleteJobTemplates extends V20180412Rpc
{
}

/**
 * @method string getJobs()
 * @method $this withJobs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RerunJobs extends V20180412Rpc
{
}
