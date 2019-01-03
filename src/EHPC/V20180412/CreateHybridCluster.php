<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateHybridCluster
 *
 * @method string getEhpcVersion()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getKeyPairName()
 * @method string getSecurityGroupName()
 * @method string getEcsOrderComputeInstanceType()
 * @method string getOnPremiseVolumeRemotePath()
 * @method string getJobQueue()
 * @method string getVolumeType()
 * @method string getPassword()
 * @method string getOnPremiseVolumeMountPoint()
 * @method string getOnPremiseVolumeProtocol()
 * @method string getVolumeProtocol()
 * @method string getOnPremiseVolumeLocalPath()
 * @method string getClientVersion()
 * @method string getOsTag()
 * @method string getRemoteDirectory()
 * @method array getPostInstallScript()
 * @method string getVSwitchId()
 * @method string getNodes()
 * @method array getApplication()
 * @method string getDomain()
 * @method string getVpcId()
 * @method string getName()
 * @method string getVolumeId()
 * @method string getVolumeMountpoint()
 * @method string getZoneId()
 * @method string getLocation()
 */
class CreateHybridCluster extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'CreateHybridCluster';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withEhpcVersion() instead.
     *
     * @param string $ehpcVersion
     *
     * @return $this
     */
    public function setEhpcVersion($ehpcVersion)
    {
        return $this->withEhpcVersion($ehpcVersion);
    }

    /**
     * @param string $ehpcVersion
     *
     * @return $this
     */
    public function withEhpcVersion($ehpcVersion)
    {
        $this->data['EhpcVersion'] = $ehpcVersion;
        $this->options['query']['EhpcVersion'] = $ehpcVersion;

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKeyPairName() instead.
     *
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        return $this->withKeyPairName($keyPairName);
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function withKeyPairName($keyPairName)
    {
        $this->data['KeyPairName'] = $keyPairName;
        $this->options['query']['KeyPairName'] = $keyPairName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityGroupName() instead.
     *
     * @param string $securityGroupName
     *
     * @return $this
     */
    public function setSecurityGroupName($securityGroupName)
    {
        return $this->withSecurityGroupName($securityGroupName);
    }

    /**
     * @param string $securityGroupName
     *
     * @return $this
     */
    public function withSecurityGroupName($securityGroupName)
    {
        $this->data['SecurityGroupName'] = $securityGroupName;
        $this->options['query']['SecurityGroupName'] = $securityGroupName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEcsOrderComputeInstanceType() instead.
     *
     * @param string $ecsOrderComputeInstanceType
     *
     * @return $this
     */
    public function setEcsOrderComputeInstanceType($ecsOrderComputeInstanceType)
    {
        return $this->withEcsOrderComputeInstanceType($ecsOrderComputeInstanceType);
    }

    /**
     * @param string $ecsOrderComputeInstanceType
     *
     * @return $this
     */
    public function withEcsOrderComputeInstanceType($ecsOrderComputeInstanceType)
    {
        $this->data['EcsOrderComputeInstanceType'] = $ecsOrderComputeInstanceType;
        $this->options['query']['EcsOrder.Compute.InstanceType'] = $ecsOrderComputeInstanceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOnPremiseVolumeRemotePath() instead.
     *
     * @param string $onPremiseVolumeRemotePath
     *
     * @return $this
     */
    public function setOnPremiseVolumeRemotePath($onPremiseVolumeRemotePath)
    {
        return $this->withOnPremiseVolumeRemotePath($onPremiseVolumeRemotePath);
    }

    /**
     * @param string $onPremiseVolumeRemotePath
     *
     * @return $this
     */
    public function withOnPremiseVolumeRemotePath($onPremiseVolumeRemotePath)
    {
        $this->data['OnPremiseVolumeRemotePath'] = $onPremiseVolumeRemotePath;
        $this->options['query']['OnPremiseVolumeRemotePath'] = $onPremiseVolumeRemotePath;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withJobQueue() instead.
     *
     * @param string $jobQueue
     *
     * @return $this
     */
    public function setJobQueue($jobQueue)
    {
        return $this->withJobQueue($jobQueue);
    }

    /**
     * @param string $jobQueue
     *
     * @return $this
     */
    public function withJobQueue($jobQueue)
    {
        $this->data['JobQueue'] = $jobQueue;
        $this->options['query']['JobQueue'] = $jobQueue;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVolumeType() instead.
     *
     * @param string $volumeType
     *
     * @return $this
     */
    public function setVolumeType($volumeType)
    {
        return $this->withVolumeType($volumeType);
    }

    /**
     * @param string $volumeType
     *
     * @return $this
     */
    public function withVolumeType($volumeType)
    {
        $this->data['VolumeType'] = $volumeType;
        $this->options['query']['VolumeType'] = $volumeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOnPremiseVolumeMountPoint() instead.
     *
     * @param string $onPremiseVolumeMountPoint
     *
     * @return $this
     */
    public function setOnPremiseVolumeMountPoint($onPremiseVolumeMountPoint)
    {
        return $this->withOnPremiseVolumeMountPoint($onPremiseVolumeMountPoint);
    }

    /**
     * @param string $onPremiseVolumeMountPoint
     *
     * @return $this
     */
    public function withOnPremiseVolumeMountPoint($onPremiseVolumeMountPoint)
    {
        $this->data['OnPremiseVolumeMountPoint'] = $onPremiseVolumeMountPoint;
        $this->options['query']['OnPremiseVolumeMountPoint'] = $onPremiseVolumeMountPoint;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOnPremiseVolumeProtocol() instead.
     *
     * @param string $onPremiseVolumeProtocol
     *
     * @return $this
     */
    public function setOnPremiseVolumeProtocol($onPremiseVolumeProtocol)
    {
        return $this->withOnPremiseVolumeProtocol($onPremiseVolumeProtocol);
    }

    /**
     * @param string $onPremiseVolumeProtocol
     *
     * @return $this
     */
    public function withOnPremiseVolumeProtocol($onPremiseVolumeProtocol)
    {
        $this->data['OnPremiseVolumeProtocol'] = $onPremiseVolumeProtocol;
        $this->options['query']['OnPremiseVolumeProtocol'] = $onPremiseVolumeProtocol;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVolumeProtocol() instead.
     *
     * @param string $volumeProtocol
     *
     * @return $this
     */
    public function setVolumeProtocol($volumeProtocol)
    {
        return $this->withVolumeProtocol($volumeProtocol);
    }

    /**
     * @param string $volumeProtocol
     *
     * @return $this
     */
    public function withVolumeProtocol($volumeProtocol)
    {
        $this->data['VolumeProtocol'] = $volumeProtocol;
        $this->options['query']['VolumeProtocol'] = $volumeProtocol;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOnPremiseVolumeLocalPath() instead.
     *
     * @param string $onPremiseVolumeLocalPath
     *
     * @return $this
     */
    public function setOnPremiseVolumeLocalPath($onPremiseVolumeLocalPath)
    {
        return $this->withOnPremiseVolumeLocalPath($onPremiseVolumeLocalPath);
    }

    /**
     * @param string $onPremiseVolumeLocalPath
     *
     * @return $this
     */
    public function withOnPremiseVolumeLocalPath($onPremiseVolumeLocalPath)
    {
        $this->data['OnPremiseVolumeLocalPath'] = $onPremiseVolumeLocalPath;
        $this->options['query']['OnPremiseVolumeLocalPath'] = $onPremiseVolumeLocalPath;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientVersion() instead.
     *
     * @param string $clientVersion
     *
     * @return $this
     */
    public function setClientVersion($clientVersion)
    {
        return $this->withClientVersion($clientVersion);
    }

    /**
     * @param string $clientVersion
     *
     * @return $this
     */
    public function withClientVersion($clientVersion)
    {
        $this->data['ClientVersion'] = $clientVersion;
        $this->options['query']['ClientVersion'] = $clientVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOsTag() instead.
     *
     * @param string $osTag
     *
     * @return $this
     */
    public function setOsTag($osTag)
    {
        return $this->withOsTag($osTag);
    }

    /**
     * @param string $osTag
     *
     * @return $this
     */
    public function withOsTag($osTag)
    {
        $this->data['OsTag'] = $osTag;
        $this->options['query']['OsTag'] = $osTag;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemoteDirectory() instead.
     *
     * @param string $remoteDirectory
     *
     * @return $this
     */
    public function setRemoteDirectory($remoteDirectory)
    {
        return $this->withRemoteDirectory($remoteDirectory);
    }

    /**
     * @param string $remoteDirectory
     *
     * @return $this
     */
    public function withRemoteDirectory($remoteDirectory)
    {
        $this->data['RemoteDirectory'] = $remoteDirectory;
        $this->options['query']['RemoteDirectory'] = $remoteDirectory;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPostInstallScript() instead.
     *
     * @return array
     */
    public function getPostInstallScripts()
    {
        return $this->getPostInstallScript();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPostInstallScript() instead.
     *
     * @param array $postInstallScripts
     *
     * @return $this
     */
    public function setPostInstallScripts(array $postInstallScripts)
    {
        return $this->withPostInstallScript($postInstallScripts);
    }

    /**
     * @param array $postInstallScript
     *
     * @return $this
     */
    public function withPostInstallScript(array $postInstallScript)
    {
        $this->data['PostInstallScript'] = $postInstallScript;
        foreach ($postInstallScript as $i => $iValue) {
            $this->options['query']['PostInstallScript.' . ($i + 1) . '.Args'] = $postInstallScript[$i]['Args'];
            $this->options['query']['PostInstallScript.' . ($i + 1) . '.Url'] = $postInstallScript[$i]['Url'];
        }

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
     * @deprecated deprecated since version 2.0, Use withNodes() instead.
     *
     * @param string $nodes
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        return $this->withNodes($nodes);
    }

    /**
     * @param string $nodes
     *
     * @return $this
     */
    public function withNodes($nodes)
    {
        $this->data['Nodes'] = $nodes;
        $this->options['query']['Nodes'] = $nodes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getApplication() instead.
     *
     * @return array
     */
    public function getApplications()
    {
        return $this->getApplication();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withApplication() instead.
     *
     * @param array $applications
     *
     * @return $this
     */
    public function setApplications(array $applications)
    {
        return $this->withApplication($applications);
    }

    /**
     * @param array $application
     *
     * @return $this
     */
    public function withApplication(array $application)
    {
        $this->data['Application'] = $application;
        foreach ($application as $i => $iValue) {
            $this->options['query']['Application.' . ($i + 1) . '.Tag'] = $application[$i]['Tag'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomain() instead.
     *
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        return $this->withDomain($domain);
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVolumeId() instead.
     *
     * @param string $volumeId
     *
     * @return $this
     */
    public function setVolumeId($volumeId)
    {
        return $this->withVolumeId($volumeId);
    }

    /**
     * @param string $volumeId
     *
     * @return $this
     */
    public function withVolumeId($volumeId)
    {
        $this->data['VolumeId'] = $volumeId;
        $this->options['query']['VolumeId'] = $volumeId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVolumeMountpoint() instead.
     *
     * @param string $volumeMountpoint
     *
     * @return $this
     */
    public function setVolumeMountpoint($volumeMountpoint)
    {
        return $this->withVolumeMountpoint($volumeMountpoint);
    }

    /**
     * @param string $volumeMountpoint
     *
     * @return $this
     */
    public function withVolumeMountpoint($volumeMountpoint)
    {
        $this->data['VolumeMountpoint'] = $volumeMountpoint;
        $this->options['query']['VolumeMountpoint'] = $volumeMountpoint;

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

    /**
     * @deprecated deprecated since version 2.0, Use withLocation() instead.
     *
     * @param string $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        return $this->withLocation($location);
    }

    /**
     * @param string $location
     *
     * @return $this
     */
    public function withLocation($location)
    {
        $this->data['Location'] = $location;
        $this->options['query']['Location'] = $location;

        return $this;
    }
}
