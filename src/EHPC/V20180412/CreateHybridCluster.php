<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api CreateHybridCluster
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
 * @method string getResourceGroupId()
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
class CreateHybridCluster extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
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
