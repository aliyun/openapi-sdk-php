<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateContainerGroup
 *
 * @method array getContainer()
 * @method string getResourceOwnerId()
 * @method string getMemory()
 * @method string getSecurityGroupId()
 * @method array getInitContainer()
 * @method array getImageRegistryCredential()
 * @method array getTag()
 * @method string getEipInstanceId()
 * @method array getDnsConfigNameServer()
 * @method string getResourceOwnerAccount()
 * @method string getRestartPolicy()
 * @method string getOwnerAccount()
 * @method array getDnsConfigOption()
 * @method string getCpu()
 * @method array getDnsConfigSearch()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method array getVolume()
 * @method string getContainerGroupName()
 * @method string getZoneId()
 */
class CreateContainerGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Eci';

    /**
     * @var string
     */
    public $version = '2018-08-08';

    /**
     * @var string
     */
    public $action = 'CreateContainerGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'eci';

    /**
     * @deprecated deprecated since version 2.0, Use getContainer() instead.
     *
     * @return array
     */
    public function getContainers()
    {
        return $this->getContainer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContainer() instead.
     *
     * @param array $containers
     *
     * @return $this
     */
    public function setContainers(array $containers)
    {
        return $this->withContainer($containers);
    }

    /**
     * @param array $container
     *
     * @return $this
     */
    public function withContainer(array $container)
    {
        $this->data['Container'] = $container;
        foreach ($container as $i => $iValue) {
            $this->options['query']['Container.' . ($i + 1) . '.Image'] = $container[$i]['Image'];
            $this->options['query']['Container.' . ($i + 1) . '.Name'] = $container[$i]['Name'];
            $this->options['query']['Container.' . ($i + 1) . '.Cpu'] = $container[$i]['Cpu'];
            $this->options['query']['Container.' . ($i + 1) . '.Memory'] = $container[$i]['Memory'];
            $this->options['query']['Container.' . ($i + 1) . '.WorkingDir'] = $container[$i]['WorkingDir'];
            $this->options['query']['Container.' . ($i + 1) . '.ImagePullPolicy'] = $container[$i]['ImagePullPolicy'];
            foreach ($container[$i]['Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($container[$i]['Args'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }
            foreach ($container[$i]['VolumeMounts'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }
            foreach ($container[$i]['Ports'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }
            foreach ($container[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Path'] = $container[$i]['ReadinessProbe.HttpGet.Path'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Port'] = $container[$i]['ReadinessProbe.HttpGet.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.HttpGet.Scheme'] = $container[$i]['ReadinessProbe.HttpGet.Scheme'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.InitialDelaySeconds'] = $container[$i]['ReadinessProbe.InitialDelaySeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.PeriodSeconds'] = $container[$i]['ReadinessProbe.PeriodSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.SuccessThreshold'] = $container[$i]['ReadinessProbe.SuccessThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.FailureThreshold'] = $container[$i]['ReadinessProbe.FailureThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.TimeoutSeconds'] = $container[$i]['ReadinessProbe.TimeoutSeconds'];
            foreach ($container[$i]['ReadinessProbe.Exec.Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Path'] = $container[$i]['LivenessProbe.HttpGet.Path'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Port'] = $container[$i]['LivenessProbe.HttpGet.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.HttpGet.Scheme'] = $container[$i]['LivenessProbe.HttpGet.Scheme'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.InitialDelaySeconds'] = $container[$i]['LivenessProbe.InitialDelaySeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.PeriodSeconds'] = $container[$i]['LivenessProbe.PeriodSeconds'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.SuccessThreshold'] = $container[$i]['LivenessProbe.SuccessThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.FailureThreshold'] = $container[$i]['LivenessProbe.FailureThreshold'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.TimeoutSeconds'] = $container[$i]['LivenessProbe.TimeoutSeconds'];
            foreach ($container[$i]['LivenessProbe.Exec.Commands'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.Exec.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($container[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $container[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->options['query']['Container.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $container[$i]['SecurityContext.RunAsUser'];
            $this->options['query']['Container.' . ($i + 1) . '.ReadinessProbe.TcpSocket.Port'] = $container[$i]['ReadinessProbe.TcpSocket.Port'];
            $this->options['query']['Container.' . ($i + 1) . '.LivenessProbe.TcpSocket.Port'] = $container[$i]['LivenessProbe.TcpSocket.Port'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMemory() instead.
     *
     * @param string $memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        return $this->withMemory($memory);
    }

    /**
     * @param string $memory
     *
     * @return $this
     */
    public function withMemory($memory)
    {
        $this->data['Memory'] = $memory;
        $this->options['query']['Memory'] = $memory;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityGroupId() instead.
     *
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        return $this->withSecurityGroupId($securityGroupId);
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId($securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        $this->options['query']['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getInitContainer() instead.
     *
     * @return array
     */
    public function getInitContainers()
    {
        return $this->getInitContainer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInitContainer() instead.
     *
     * @param array $initContainers
     *
     * @return $this
     */
    public function setInitContainers(array $initContainers)
    {
        return $this->withInitContainer($initContainers);
    }

    /**
     * @param array $initContainer
     *
     * @return $this
     */
    public function withInitContainer(array $initContainer)
    {
        $this->data['InitContainer'] = $initContainer;
        foreach ($initContainer as $i => $iValue) {
            $this->options['query']['InitContainer.' . ($i + 1) . '.Name'] = $initContainer[$i]['Name'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Image'] = $initContainer[$i]['Image'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Cpu'] = $initContainer[$i]['Cpu'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.Memory'] = $initContainer[$i]['Memory'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.WorkingDir'] = $initContainer[$i]['WorkingDir'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.ImagePullPolicy'] = $initContainer[$i]['ImagePullPolicy'];
            foreach ($initContainer[$i]['Commands'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Command.' . ($j + 1)] = $jValue;
            }
            foreach ($initContainer[$i]['Args'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Arg.' . ($j + 1)] = $jValue;
            }
            foreach ($initContainer[$i]['VolumeMounts'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.VolumeMount.' . ($j + 1)] = $jValue;
            }
            foreach ($initContainer[$i]['Ports'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.Port.' . ($j + 1)] = $jValue;
            }
            foreach ($initContainer[$i]['EnvironmentVars'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.EnvironmentVar.' . ($j + 1)] = $jValue;
            }
            foreach ($initContainer[$i]['SecurityContext.Capability.Adds'] as $j => $jValue) {
                $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.Capability.Add.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.ReadOnlyRootFilesystem'] = $initContainer[$i]['SecurityContext.ReadOnlyRootFilesystem'];
            $this->options['query']['InitContainer.' . ($i + 1) . '.SecurityContext.RunAsUser'] = $initContainer[$i]['SecurityContext.RunAsUser'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getImageRegistryCredential() instead.
     *
     * @return array
     */
    public function getImageRegistryCredentials()
    {
        return $this->getImageRegistryCredential();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageRegistryCredential() instead.
     *
     * @param array $imageRegistryCredentials
     *
     * @return $this
     */
    public function setImageRegistryCredentials(array $imageRegistryCredentials)
    {
        return $this->withImageRegistryCredential($imageRegistryCredentials);
    }

    /**
     * @param array $imageRegistryCredential
     *
     * @return $this
     */
    public function withImageRegistryCredential(array $imageRegistryCredential)
    {
        $this->data['ImageRegistryCredential'] = $imageRegistryCredential;
        foreach ($imageRegistryCredential as $i => $iValue) {
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.Server'] = $imageRegistryCredential[$i]['Server'];
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.UserName'] = $imageRegistryCredential[$i]['UserName'];
            $this->options['query']['ImageRegistryCredential.' . ($i + 1) . '.Password'] = $imageRegistryCredential[$i]['Password'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getTag() instead.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->getTag();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        return $this->withTag($tags);
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEipInstanceId() instead.
     *
     * @param string $eipInstanceId
     *
     * @return $this
     */
    public function setEipInstanceId($eipInstanceId)
    {
        return $this->withEipInstanceId($eipInstanceId);
    }

    /**
     * @param string $eipInstanceId
     *
     * @return $this
     */
    public function withEipInstanceId($eipInstanceId)
    {
        $this->data['EipInstanceId'] = $eipInstanceId;
        $this->options['query']['EipInstanceId'] = $eipInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDnsConfigNameServer() instead.
     *
     * @return array
     */
    public function getDnsConfigNameServers()
    {
        return $this->getDnsConfigNameServer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDnsConfigNameServer() instead.
     *
     * @param array $dnsConfigNameServers
     *
     * @return $this
     */
    public function setDnsConfigNameServers(array $dnsConfigNameServers)
    {
        return $this->withDnsConfigNameServer($dnsConfigNameServers);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRestartPolicy() instead.
     *
     * @param string $restartPolicy
     *
     * @return $this
     */
    public function setRestartPolicy($restartPolicy)
    {
        return $this->withRestartPolicy($restartPolicy);
    }

    /**
     * @param string $restartPolicy
     *
     * @return $this
     */
    public function withRestartPolicy($restartPolicy)
    {
        $this->data['RestartPolicy'] = $restartPolicy;
        $this->options['query']['RestartPolicy'] = $restartPolicy;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDnsConfigOption() instead.
     *
     * @return array
     */
    public function getDnsConfigOptions()
    {
        return $this->getDnsConfigOption();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDnsConfigOption() instead.
     *
     * @param array $dnsConfigOptions
     *
     * @return $this
     */
    public function setDnsConfigOptions(array $dnsConfigOptions)
    {
        return $this->withDnsConfigOption($dnsConfigOptions);
    }

    /**
     * @param array $dnsConfigOption
     *
     * @return $this
     */
    public function withDnsConfigOption(array $dnsConfigOption)
    {
        $this->data['DnsConfigOption'] = $dnsConfigOption;
        foreach ($dnsConfigOption as $i => $iValue) {
            $this->options['query']['DnsConfig.Option.' . ($i + 1) . '.Name'] = $dnsConfigOption[$i]['Name'];
            $this->options['query']['DnsConfig.Option.' . ($i + 1) . '.Value'] = $dnsConfigOption[$i]['Value'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCpu() instead.
     *
     * @param string $cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {
        return $this->withCpu($cpu);
    }

    /**
     * @param string $cpu
     *
     * @return $this
     */
    public function withCpu($cpu)
    {
        $this->data['Cpu'] = $cpu;
        $this->options['query']['Cpu'] = $cpu;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDnsConfigSearch() instead.
     *
     * @return array
     */
    public function getDnsConfigSearchs()
    {
        return $this->getDnsConfigSearch();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDnsConfigSearch() instead.
     *
     * @param array $dnsConfigSearchs
     *
     * @return $this
     */
    public function setDnsConfigSearchs(array $dnsConfigSearchs)
    {
        return $this->withDnsConfigSearch($dnsConfigSearchs);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getVolume() instead.
     *
     * @return array
     */
    public function getVolumes()
    {
        return $this->getVolume();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVolume() instead.
     *
     * @param array $volumes
     *
     * @return $this
     */
    public function setVolumes(array $volumes)
    {
        return $this->withVolume($volumes);
    }

    /**
     * @param array $volume
     *
     * @return $this
     */
    public function withVolume(array $volume)
    {
        $this->data['Volume'] = $volume;
        foreach ($volume as $i => $iValue) {
            $this->options['query']['Volume.' . ($i + 1) . '.Name'] = $volume[$i]['Name'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.Server'] = $volume[$i]['NFSVolume.Server'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.Path'] = $volume[$i]['NFSVolume.Path'];
            $this->options['query']['Volume.' . ($i + 1) . '.NFSVolume.ReadOnly'] = $volume[$i]['NFSVolume.ReadOnly'];
            foreach ($volume[$i]['ConfigFileVolume.ConfigFileToPaths'] as $j => $jValue) {
                $this->options['query']['Volume.' . ($i + 1) . '.ConfigFileVolume.ConfigFileToPath.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Volume.' . ($i + 1) . '.Type'] = $volume[$i]['Type'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContainerGroupName() instead.
     *
     * @param string $containerGroupName
     *
     * @return $this
     */
    public function setContainerGroupName($containerGroupName)
    {
        return $this->withContainerGroupName($containerGroupName);
    }

    /**
     * @param string $containerGroupName
     *
     * @return $this
     */
    public function withContainerGroupName($containerGroupName)
    {
        $this->data['ContainerGroupName'] = $containerGroupName;
        $this->options['query']['ContainerGroupName'] = $containerGroupName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }
}
