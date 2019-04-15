<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeMultiContainerGroupMetric describeMultiContainerGroupMetric(array $options = [])
 * @method UpdateContainerGroupByTemplate updateContainerGroupByTemplate(array $options = [])
 * @method ExportContainerGroupTemplate exportContainerGroupTemplate(array $options = [])
 * @method CreateContainerGroupFromTemplate createContainerGroupFromTemplate(array $options = [])
 * @method DescribeContainerGroupMetric describeContainerGroupMetric(array $options = [])
 * @method UpdateContainerGroup updateContainerGroup(array $options = [])
 * @method RestartContainerGroup restartContainerGroup(array $options = [])
 * @method DescribeContainerGroupPrice describeContainerGroupPrice(array $options = [])
 * @method ExecContainerCommand execContainerCommand(array $options = [])
 * @method DescribeContainerExecUri describeContainerExecUri(array $options = [])
 * @method DeleteContainerGroup deleteContainerGroup(array $options = [])
 * @method DescribeContainerGroups describeContainerGroups(array $options = [])
 * @method DescribeContainerLog describeContainerLog(array $options = [])
 * @method CreateContainerGroup createContainerGroup(array $options = [])
 */
class EciApiResolver
{
    use ApiResolverTrait;
}

class V20180808Rpc extends Rpc
{
    /** @var string */
    public $product = 'Eci';

    /** @var string */
    public $version = '2018-08-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'eci';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContainerGroupIds()
 * @method $this withContainerGroupIds($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMultiContainerGroupMetric extends V20180808Rpc
{
}

/**
 * @method string getTemplate()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateContainerGroupByTemplate extends V20180808Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplate($value)
    {
        $this->data['Template'] = $value;
        $this->options['form_params']['Template'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ExportContainerGroupTemplate extends V20180808Rpc
{
}

/**
 * @method string getTemplate()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateContainerGroupFromTemplate extends V20180808Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplate($value)
    {
        $this->data['Template'] = $value;
        $this->options['form_params']['Template'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeContainerGroupMetric extends V20180808Rpc
{
}

/**
 * @method array getContainer()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getInitContainer()
 * @method array getImageRegistryCredential()
 * @method array getTag()
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method array getDnsConfigNameServer()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRestartPolicy()
 * @method $this withRestartPolicy($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getDnsConfigOption()
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method array getDnsConfigSearch()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getVolume()
 */
class UpdateContainerGroup extends V20180808Rpc
{

    /**
     * @param array $container
     *
     * @return $this
     */
    public function withContainer(array $container)
    {
        $this->data['Container'] = $container;
        foreach ($container as $depth1 => $depth1Value) {
            $this->options['query']['Container.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Stdin'] = $depth1Value['Stdin'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.StdinOnce'] = $depth1Value['StdinOnce'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Tty'] = $depth1Value['Tty'];
            foreach ($depth1Value['Command'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['Arg'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['EnvironmentVar'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['Port'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.Port.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['VolumeMount'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TcpSocket.Port'] = $depth1Value['ReadinessProbeTcpSocketPort'];
            foreach ($depth1Value['ReadinessProbeExecCommand'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.Exec.Command.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Path'] = $depth1Value['ReadinessProbeHttpGetPath'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Port'] = $depth1Value['ReadinessProbeHttpGetPort'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $depth1Value['ReadinessProbeHttpGetScheme'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $depth1Value['ReadinessProbeInitialDelaySeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.PeriodSeconds'] = $depth1Value['ReadinessProbePeriodSeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.SuccessThreshold'] = $depth1Value['ReadinessProbeSuccessThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.FailureThreshold'] = $depth1Value['ReadinessProbeFailureThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TimeoutSeconds'] = $depth1Value['ReadinessProbeTimeoutSeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TcpSocket.Port'] = $depth1Value['LivenessProbeTcpSocketPort'];
            foreach ($depth1Value['LivenessProbeExecCommand'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.Exec.Command.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Path'] = $depth1Value['LivenessProbeHttpGetPath'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Port'] = $depth1Value['LivenessProbeHttpGetPort'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Scheme'] = $depth1Value['LivenessProbeHttpGetScheme'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.InitialDelaySeconds'] = $depth1Value['LivenessProbeInitialDelaySeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.PeriodSeconds'] = $depth1Value['LivenessProbePeriodSeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.SuccessThreshold'] = $depth1Value['LivenessProbeSuccessThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.FailureThreshold'] = $depth1Value['LivenessProbeFailureThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TimeoutSeconds'] = $depth1Value['LivenessProbeTimeoutSeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
            foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Container.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
        }

        return $this;
    }

    /**
     * @param array $initContainer
     *
     * @return $this
     */
    public function withInitContainer(array $initContainer)
    {
        $this->data['InitContainer'] = $initContainer;
        foreach ($initContainer as $depth1 => $depth1Value) {
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Stdin'] = $depth1Value['Stdin'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.StdinOnce'] = $depth1Value['StdinOnce'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Tty'] = $depth1Value['Tty'];
            foreach ($depth1Value['Command'] as $i => $iValue) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['Arg'] as $i => $iValue) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['EnvironmentVar'] as $depth2 => $depth2Value) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Key'] = $depth2Value['Key'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
            }
            foreach ($depth1Value['Port'] as $depth2 => $depth2Value) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Protocol'] = $depth2Value['Protocol'];
            }
            foreach ($depth1Value['VolumeMount'] as $depth2 => $depth2Value) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.SubPath'] = $depth2Value['SubPath'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.ReadOnly'] = $depth2Value['ReadOnly'];
            }
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
            foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
        }

        return $this;
    }

    /**
     * @param array $imageRegistryCredential
     *
     * @return $this
     */
    public function withImageRegistryCredential(array $imageRegistryCredential)
    {
        $this->data['ImageRegistryCredential'] = $imageRegistryCredential;
        foreach ($imageRegistryCredential as $depth1 => $depth1Value) {
            $this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Server'] = $depth1Value['Server'];
            $this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
            $this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $dnsConfigNameServer
     *
     * @return $this
     */
    public function withDnsConfigNameServer(array $dnsConfigNameServer)
    {
        $this->data['DnsConfigNameServer'] = $dnsConfigNameServer;
        foreach ($dnsConfigNameServer as $i => $iValue) {
            $this->options['query']['DnsConfig.NameServer.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $dnsConfigOption
     *
     * @return $this
     */
    public function withDnsConfigOption(array $dnsConfigOption)
    {
        $this->data['DnsConfigOption'] = $dnsConfigOption;
        foreach ($dnsConfigOption as $depth1 => $depth1Value) {
            $this->options['query']['DnsConfig.Option.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['DnsConfig.Option.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $dnsConfigSearch
     *
     * @return $this
     */
    public function withDnsConfigSearch(array $dnsConfigSearch)
    {
        $this->data['DnsConfigSearch'] = $dnsConfigSearch;
        foreach ($dnsConfigSearch as $i => $iValue) {
            $this->options['query']['DnsConfig.Search.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $volume
     *
     * @return $this
     */
    public function withVolume(array $volume)
    {
        $this->data['Volume'] = $volume;
        foreach ($volume as $depth1 => $depth1Value) {
            $this->options['query']['Volume.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Server'] = $depth1Value['NFSVolumeServer'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Path'] = $depth1Value['NFSVolumePath'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.ReadOnly'] = $depth1Value['NFSVolumeReadOnly'];
            foreach ($depth1Value['ConfigFileVolumeConfigFileToPath'] as $depth2 => $depth2Value) {
                $this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($depth2 + 1) . '.Content'] = $depth2Value['Content'];
                $this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($depth2 + 1) . '.Path'] = $depth2Value['Path'];
            }
            $this->options['query']['Volume.' . ($depth1 + 1) . '.EmptyDirVolume.Medium'] = $depth1Value['EmptyDirVolumeMedium'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartContainerGroup extends V20180808Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeContainerGroupPrice extends V20180808Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContainerName()
 * @method $this withContainerName($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class ExecContainerCommand extends V20180808Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContainerName()
 * @method $this withContainerName($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class DescribeContainerExecUri extends V20180808Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteContainerGroup extends V20180808Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContainerGroupIds()
 * @method $this withContainerGroupIds($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getContainerGroupName()
 * @method $this withContainerGroupName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeContainerGroups extends V20180808Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getContainerName()
 * @method $this withContainerName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTail()
 * @method $this withTail($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeContainerLog extends V20180808Rpc
{
}

/**
 * @method array getContainer()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDnsPolicy()
 * @method $this withDnsPolicy($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getHostAliase()
 * @method array getInitContainer()
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getImageRegistryCredential()
 * @method array getTag()
 * @method string getEipInstanceId()
 * @method $this withEipInstanceId($value)
 * @method array getArn()
 * @method array getDnsConfigNameServer()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRestartPolicy()
 * @method $this withRestartPolicy($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getDnsConfigOption()
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method array getDnsConfigSearch()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getVolume()
 * @method string getContainerGroupName()
 * @method $this withContainerGroupName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateContainerGroup extends V20180808Rpc
{

    /**
     * @param array $container
     *
     * @return $this
     */
    public function withContainer(array $container)
    {
        $this->data['Container'] = $container;
        foreach ($container as $depth1 => $depth1Value) {
            $this->options['query']['Container.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
            foreach ($depth1Value['Command'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['Arg'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['VolumeMount'] as $depth2 => $depth2Value) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
                $this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.ReadOnly'] = $depth2Value['ReadOnly'];
                $this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
                $this->options['query']['Container.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.SubPath'] = $depth2Value['SubPath'];
            }
            foreach ($depth1Value['Port'] as $depth2 => $depth2Value) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Protocol'] = $depth2Value['Protocol'];
                $this->options['query']['Container.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
            }
            foreach ($depth1Value['EnvironmentVar'] as $depth2 => $depth2Value) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Key'] = $depth2Value['Key'];
                $this->options['query']['Container.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
            }
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Path'] = $depth1Value['ReadinessProbeHttpGetPath'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Port'] = $depth1Value['ReadinessProbeHttpGetPort'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $depth1Value['ReadinessProbeHttpGetScheme'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $depth1Value['ReadinessProbeInitialDelaySeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.PeriodSeconds'] = $depth1Value['ReadinessProbePeriodSeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.SuccessThreshold'] = $depth1Value['ReadinessProbeSuccessThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.FailureThreshold'] = $depth1Value['ReadinessProbeFailureThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TimeoutSeconds'] = $depth1Value['ReadinessProbeTimeoutSeconds'];
            foreach ($depth1Value['ReadinessProbeExecCommand'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.Exec.Command.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Path'] = $depth1Value['LivenessProbeHttpGetPath'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Port'] = $depth1Value['LivenessProbeHttpGetPort'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.HttpGet.Scheme'] = $depth1Value['LivenessProbeHttpGetScheme'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.InitialDelaySeconds'] = $depth1Value['LivenessProbeInitialDelaySeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.PeriodSeconds'] = $depth1Value['LivenessProbePeriodSeconds'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.SuccessThreshold'] = $depth1Value['LivenessProbeSuccessThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.FailureThreshold'] = $depth1Value['LivenessProbeFailureThreshold'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TimeoutSeconds'] = $depth1Value['LivenessProbeTimeoutSeconds'];
            foreach ($depth1Value['LivenessProbeExecCommand'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.Exec.Command.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
                $this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.ReadinessProbe.TcpSocket.Port'] = $depth1Value['ReadinessProbeTcpSocketPort'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.LivenessProbe.TcpSocket.Port'] = $depth1Value['LivenessProbeTcpSocketPort'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Stdin'] = $depth1Value['Stdin'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.StdinOnce'] = $depth1Value['StdinOnce'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Tty'] = $depth1Value['Tty'];
            $this->options['query']['Container.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
        }

        return $this;
    }

    /**
     * @param array $hostAliase
     *
     * @return $this
     */
    public function withHostAliase(array $hostAliase)
    {
        $this->data['HostAliase'] = $hostAliase;
        foreach ($hostAliase as $depth1 => $depth1Value) {
            $this->options['query']['HostAliase.' . ($depth1 + 1) . '.Ip'] = $depth1Value['Ip'];
            foreach ($depth1Value['Hostname'] as $i => $iValue) {
                $this->options['query']['HostAliase.' . ($depth1 + 1) . '.Hostname.' . ($i + 1)] = $iValue;
            }
        }

        return $this;
    }

    /**
     * @param array $initContainer
     *
     * @return $this
     */
    public function withInitContainer(array $initContainer)
    {
        $this->data['InitContainer'] = $initContainer;
        foreach ($initContainer as $depth1 => $depth1Value) {
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Image'] = $depth1Value['Image'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Cpu'] = $depth1Value['Cpu'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Memory'] = $depth1Value['Memory'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.WorkingDir'] = $depth1Value['WorkingDir'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.ImagePullPolicy'] = $depth1Value['ImagePullPolicy'];
            foreach ($depth1Value['Command'] as $i => $iValue) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Command.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['Arg'] as $i => $iValue) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Arg.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['VolumeMount'] as $depth2 => $depth2Value) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.ReadOnly'] = $depth2Value['ReadOnly'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.VolumeMount.' . ($depth2 + 1) . '.SubPath'] = $depth2Value['SubPath'];
            }
            foreach ($depth1Value['Port'] as $depth2 => $depth2Value) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Protocol'] = $depth2Value['Protocol'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Port.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
            }
            foreach ($depth1Value['EnvironmentVar'] as $depth2 => $depth2Value) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Key'] = $depth2Value['Key'];
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.EnvironmentVar.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
            }
            foreach ($depth1Value['SecurityContextCapabilityAdd'] as $i => $iValue) {
                $this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.Capability.Add.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $depth1Value['SecurityContextReadOnlyRootFilesystem'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.SecurityContext.RunAsUser'] = $depth1Value['SecurityContextRunAsUser'];
            $this->options['query']['InitContainer.' . ($depth1 + 1) . '.Gpu'] = $depth1Value['Gpu'];
        }

        return $this;
    }

    /**
     * @param array $imageRegistryCredential
     *
     * @return $this
     */
    public function withImageRegistryCredential(array $imageRegistryCredential)
    {
        $this->data['ImageRegistryCredential'] = $imageRegistryCredential;
        foreach ($imageRegistryCredential as $depth1 => $depth1Value) {
            $this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Server'] = $depth1Value['Server'];
            $this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
            $this->options['query']['ImageRegistryCredential.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $arn
     *
     * @return $this
     */
    public function withArn(array $arn)
    {
        $this->data['Arn'] = $arn;
        foreach ($arn as $depth1 => $depth1Value) {
            $this->options['query']['Arn.' . ($depth1 + 1) . '.RoleArn'] = $depth1Value['RoleArn'];
            $this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
            $this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
        }

        return $this;
    }

    /**
     * @param array $dnsConfigNameServer
     *
     * @return $this
     */
    public function withDnsConfigNameServer(array $dnsConfigNameServer)
    {
        $this->data['DnsConfigNameServer'] = $dnsConfigNameServer;
        foreach ($dnsConfigNameServer as $i => $iValue) {
            $this->options['query']['DnsConfig.NameServer.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $dnsConfigOption
     *
     * @return $this
     */
    public function withDnsConfigOption(array $dnsConfigOption)
    {
        $this->data['DnsConfigOption'] = $dnsConfigOption;
        foreach ($dnsConfigOption as $depth1 => $depth1Value) {
            $this->options['query']['DnsConfig.Option.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['DnsConfig.Option.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $dnsConfigSearch
     *
     * @return $this
     */
    public function withDnsConfigSearch(array $dnsConfigSearch)
    {
        $this->data['DnsConfigSearch'] = $dnsConfigSearch;
        foreach ($dnsConfigSearch as $i => $iValue) {
            $this->options['query']['DnsConfig.Search.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $volume
     *
     * @return $this
     */
    public function withVolume(array $volume)
    {
        $this->data['Volume'] = $volume;
        foreach ($volume as $depth1 => $depth1Value) {
            $this->options['query']['Volume.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Server'] = $depth1Value['NFSVolumeServer'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.Path'] = $depth1Value['NFSVolumePath'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.NFSVolume.ReadOnly'] = $depth1Value['NFSVolumeReadOnly'];
            foreach ($depth1Value['ConfigFileVolumeConfigFileToPath'] as $depth2 => $depth2Value) {
                $this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($depth2 + 1) . '.Content'] = $depth2Value['Content'];
                $this->options['query']['Volume.' . ($depth1 + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($depth2 + 1) . '.Path'] = $depth2Value['Path'];
            }
            $this->options['query']['Volume.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['Volume.' . ($depth1 + 1) . '.EmptyDirVolume.Medium'] = $depth1Value['EmptyDirVolumeMedium'];
        }

        return $this;
    }
}
