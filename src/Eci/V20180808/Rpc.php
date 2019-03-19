<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\Rpc;

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
 * @method string getTemplate()
 * @method $this withTemplate($value)
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
 * @method $this withTemplate($value)
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
 * @method array getDnsConfigSearch()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getVolume()
 */
class UpdateContainerGroup extends V20180808Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withContainer(array $value)
    {
        $this->data['Container'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Container.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Container.' . ($i + 1) . '.Image'] = $value[$i]['Image'];
            $this->options['query']['Container.' . ($i + 1) . '.Cpu'] = $value[$i]['Cpu'];
            $this->options['query']['Container.' . ($i + 1) . '.Memory'] = $value[$i]['Memory'];
            $this->options['query']['Container.' . ($i + 1) . '.WorkingDir'] = $value[$i]['WorkingDir'];
            $this->options['query']['Container.' . ($i + 1) . '.ImagePullPolicy'] = $value[$i]['ImagePullPolicy'];
            $this->options['query']['Container.' . ($i + 1) . '.Stdin'] = $value[$i]['Stdin'];
            $this->options['query']['Container.' . ($i + 1) . '.StdinOnce'] = $value[$i]['StdinOnce'];
            $this->options['query']['Container.' . ($i + 1) . '.Tty'] = $value[$i]['Tty'];
            foreach ($value[$i]['Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Args'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Ports'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['VolumeMounts'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.TcpSocket.Port'] = $value[$i]['ReadinessProbe.TcpSocket.Port'];
            foreach ($value[$i]['ReadinessProbe.Exec.Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Path'] = $value[$i]['ReadinessProbe.HttpGet.Path'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Port'] = $value[$i]['ReadinessProbe.HttpGet.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $value[$i]['ReadinessProbe.HttpGet.Scheme'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $value[$i]['ReadinessProbe.InitialDelaySeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.PeriodSeconds'] = $value[$i]['ReadinessProbe.PeriodSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.SuccessThreshold'] = $value[$i]['ReadinessProbe.SuccessThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.FailureThreshold'] = $value[$i]['ReadinessProbe.FailureThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.TimeoutSeconds'] = $value[$i]['ReadinessProbe.TimeoutSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.TcpSocket.Port'] = $value[$i]['LivenessProbe.TcpSocket.Port'];
            foreach ($value[$i]['LivenessProbe.Exec.Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Path'] = $value[$i]['LivenessProbe.HttpGet.Path'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Port'] = $value[$i]['LivenessProbe.HttpGet.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Scheme'] = $value[$i]['LivenessProbe.HttpGet.Scheme'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.InitialDelaySeconds'] = $value[$i]['LivenessProbe.InitialDelaySeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.PeriodSeconds'] = $value[$i]['LivenessProbe.PeriodSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.SuccessThreshold'] = $value[$i]['LivenessProbe.SuccessThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.FailureThreshold'] = $value[$i]['LivenessProbe.FailureThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.TimeoutSeconds'] = $value[$i]['LivenessProbe.TimeoutSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $value[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $value[$i]['SecurityContext.RunAsUser'];
            foreach ($value[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.GpuAmount'] = $value[$i]['GpuAmount'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInitContainer(array $value)
    {
        $this->data['InitContainer'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InitContainer.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Image'] = $value[$i]['Image'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Cpu'] = $value[$i]['Cpu'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Memory'] = $value[$i]['Memory'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.WorkingDir'] = $value[$i]['WorkingDir'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.ImagePullPolicy'] = $value[$i]['ImagePullPolicy'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Stdin'] = $value[$i]['Stdin'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.StdinOnce'] = $value[$i]['StdinOnce'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Tty'] = $value[$i]['Tty'];
            foreach ($value[$i]['Commands'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Args'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Ports'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['VolumeMounts'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $value[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $value[$i]['SecurityContext.RunAsUser'];
            foreach ($value[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['InitContainer.' . ($i + 1) . '.GpuAmount'] = $value[$i]['GpuAmount'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withImageRegistryCredential(array $value)
    {
        $this->data['ImageRegistryCredential'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.Server'] = $value[$i]['Server'];
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.UserName'] = $value[$i]['UserName'];
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.Password'] = $value[$i]['Password'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDnsConfigNameServer(array $value)
    {
        $this->data['DnsConfigNameServer'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DnsConfig.NameServer.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDnsConfigOption(array $value)
    {
        $this->data['DnsConfigOption'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DnsConfig.Option.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['DnsConfig.Option.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDnsConfigSearch(array $value)
    {
        $this->data['DnsConfigSearch'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DnsConfig.Search.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withVolume(array $value)
    {
        $this->data['Volume'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Volume.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Volume.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.Server'] = $value[$i]['NFSVolume.Server'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.Path'] = $value[$i]['NFSVolume.Path'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.ReadOnly'] = $value[$i]['NFSVolume.ReadOnly'];
            foreach ($value[$i]['ConfigFileVolume.ConfigFileToPaths'] as $j => $jValue) {
                $this->options['query']['Volume.' . ($i + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($j + 1)] = $jValue;
            }
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
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
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
 * @method array getImageRegistryCredential()
 * @method array getTag()
 * @method string getEipInstanceId()
 * @method $this withEipInstanceId($value)
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
     * @param array $value
     *
     * @return $this
     */
    public function withContainer(array $value)
    {
        $this->data['Container'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Container.' . ($i + 1) . '.Image'] = $value[$i]['Image'];
            $this->options['query']['Container.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Container.' . ($i + 1) . '.Cpu'] = $value[$i]['Cpu'];
            $this->options['query']['Container.' . ($i + 1) . '.Memory'] = $value[$i]['Memory'];
            $this->options['query']['Container.' . ($i + 1) . '.WorkingDir'] = $value[$i]['WorkingDir'];
            $this->options['query']['Container.' . ($i + 1) . '.ImagePullPolicy'] = $value[$i]['ImagePullPolicy'];
            foreach ($value[$i]['Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Args'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['VolumeMounts'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Ports'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Path'] = $value[$i]['ReadinessProbe.HttpGet.Path'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Port'] = $value[$i]['ReadinessProbe.HttpGet.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $value[$i]['ReadinessProbe.HttpGet.Scheme'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $value[$i]['ReadinessProbe.InitialDelaySeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.PeriodSeconds'] = $value[$i]['ReadinessProbe.PeriodSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.SuccessThreshold'] = $value[$i]['ReadinessProbe.SuccessThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.FailureThreshold'] = $value[$i]['ReadinessProbe.FailureThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.TimeoutSeconds'] = $value[$i]['ReadinessProbe.TimeoutSeconds'];
            foreach ($value[$i]['ReadinessProbe.Exec.Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Path'] = $value[$i]['LivenessProbe.HttpGet.Path'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Port'] = $value[$i]['LivenessProbe.HttpGet.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Scheme'] = $value[$i]['LivenessProbe.HttpGet.Scheme'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.InitialDelaySeconds'] = $value[$i]['LivenessProbe.InitialDelaySeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.PeriodSeconds'] = $value[$i]['LivenessProbe.PeriodSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.SuccessThreshold'] = $value[$i]['LivenessProbe.SuccessThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.FailureThreshold'] = $value[$i]['LivenessProbe.FailureThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.TimeoutSeconds'] = $value[$i]['LivenessProbe.TimeoutSeconds'];
            foreach ($value[$i]['LivenessProbe.Exec.Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $value[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $value[$i]['SecurityContext.RunAsUser'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.TcpSocket.Port'] = $value[$i]['ReadinessProbe.TcpSocket.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.TcpSocket.Port'] = $value[$i]['LivenessProbe.TcpSocket.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.Stdin'] = $value[$i]['Stdin'];
            $this->options['query']['Container.' . ($i + 1) . '.StdinOnce'] = $value[$i]['StdinOnce'];
            $this->options['query']['Container.' . ($i + 1) . '.Tty'] = $value[$i]['Tty'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostAliase(array $value)
    {
        $this->data['HostAliase'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostAliase.' . ($i + 1) . '.Ip'] = $value[$i]['Ip'];
            foreach ($value[$i]['Hostnames'] as $j => $jValue) {
                $this->options['query']['HostAliase.' . ($i + 1) . '.Hostname.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInitContainer(array $value)
    {
        $this->data['InitContainer'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InitContainer.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Image'] = $value[$i]['Image'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Cpu'] = $value[$i]['Cpu'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Memory'] = $value[$i]['Memory'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.WorkingDir'] = $value[$i]['WorkingDir'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.ImagePullPolicy'] = $value[$i]['ImagePullPolicy'];
            foreach ($value[$i]['Commands'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Args'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['VolumeMounts'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Ports'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $value[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $value[$i]['SecurityContext.RunAsUser'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withImageRegistryCredential(array $value)
    {
        $this->data['ImageRegistryCredential'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.Server'] = $value[$i]['Server'];
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.UserName'] = $value[$i]['UserName'];
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.Password'] = $value[$i]['Password'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDnsConfigNameServer(array $value)
    {
        $this->data['DnsConfigNameServer'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DnsConfig.NameServer.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDnsConfigOption(array $value)
    {
        $this->data['DnsConfigOption'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DnsConfig.Option.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['DnsConfig.Option.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDnsConfigSearch(array $value)
    {
        $this->data['DnsConfigSearch'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DnsConfig.Search.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withVolume(array $value)
    {
        $this->data['Volume'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Volume.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.Server'] = $value[$i]['NFSVolume.Server'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.Path'] = $value[$i]['NFSVolume.Path'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.ReadOnly'] = $value[$i]['NFSVolume.ReadOnly'];
            foreach ($value[$i]['ConfigFileVolume.ConfigFileToPaths'] as $j => $jValue) {
                $this->options['query']['Volume.' . ($i + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Volume.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
        }

        return $this;
    }
}
