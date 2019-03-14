<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api CreateCluster
 *
 * @method string getSccClusterId()
 * @method string getImageId()
 * @method string getEcsOrderManagerInstanceType()
 * @method string getEhpcVersion()
 * @method string getAccountType()
 * @method string getSecurityGroupId()
 * @method string getDescription()
 * @method string getKeyPairName()
 * @method string getSecurityGroupName()
 * @method string getEcsOrderComputeInstanceType()
 * @method string getJobQueue()
 * @method string getImageOwnerAlias()
 * @method string getVolumeType()
 * @method string getDeployMode()
 * @method string getEcsOrderManagerCount()
 * @method string getResourceGroupId()
 * @method string getPassword()
 * @method string getEcsOrderLoginCount()
 * @method string getRemoteVisEnable()
 * @method string getSystemDiskSize()
 * @method string getComputeSpotPriceLimit()
 * @method string getAutoRenewPeriod()
 * @method string getPeriod()
 * @method string getVolumeProtocol()
 * @method string getClientVersion()
 * @method string getOsTag()
 * @method string getRemoteDirectory()
 * @method string getEcsOrderComputeCount()
 * @method string getComputeSpotStrategy()
 * @method array getPostInstallScript()
 * @method string getVSwitchId()
 * @method string getPeriodUnit()
 * @method array getApplication()
 * @method string getAutoRenew()
 * @method string getEcsChargeType()
 * @method string getInputFileUrl()
 * @method string getVpcId()
 * @method string getHaEnable()
 * @method string getName()
 * @method string getSchedulerType()
 * @method string getVolumeId()
 * @method string getVolumeMountpoint()
 * @method string getEcsOrderLoginInstanceType()
 * @method string getZoneId()
 */
class CreateCluster extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $sccClusterId
     *
     * @return $this
     */
    public function withSccClusterId($sccClusterId)
    {
        $this->data['SccClusterId'] = $sccClusterId;
        $this->options['query']['SccClusterId'] = $sccClusterId;

        return $this;
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $ecsOrderManagerInstanceType
     *
     * @return $this
     */
    public function withEcsOrderManagerInstanceType($ecsOrderManagerInstanceType)
    {
        $this->data['EcsOrderManagerInstanceType'] = $ecsOrderManagerInstanceType;
        $this->options['query']['EcsOrder.Manager.InstanceType'] = $ecsOrderManagerInstanceType;

        return $this;
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
     * @param string $accountType
     *
     * @return $this
     */
    public function withAccountType($accountType)
    {
        $this->data['AccountType'] = $accountType;
        $this->options['query']['AccountType'] = $accountType;

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
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function withImageOwnerAlias($imageOwnerAlias)
    {
        $this->data['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->options['query']['ImageOwnerAlias'] = $imageOwnerAlias;

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
     * @param string $deployMode
     *
     * @return $this
     */
    public function withDeployMode($deployMode)
    {
        $this->data['DeployMode'] = $deployMode;
        $this->options['query']['DeployMode'] = $deployMode;

        return $this;
    }

    /**
     * @param string $ecsOrderManagerCount
     *
     * @return $this
     */
    public function withEcsOrderManagerCount($ecsOrderManagerCount)
    {
        $this->data['EcsOrderManagerCount'] = $ecsOrderManagerCount;
        $this->options['query']['EcsOrder.Manager.Count'] = $ecsOrderManagerCount;

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
     * @param string $ecsOrderLoginCount
     *
     * @return $this
     */
    public function withEcsOrderLoginCount($ecsOrderLoginCount)
    {
        $this->data['EcsOrderLoginCount'] = $ecsOrderLoginCount;
        $this->options['query']['EcsOrder.Login.Count'] = $ecsOrderLoginCount;

        return $this;
    }

    /**
     * @param string $remoteVisEnable
     *
     * @return $this
     */
    public function withRemoteVisEnable($remoteVisEnable)
    {
        $this->data['RemoteVisEnable'] = $remoteVisEnable;
        $this->options['query']['RemoteVisEnable'] = $remoteVisEnable;

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function withSystemDiskSize($systemDiskSize)
    {
        $this->data['SystemDiskSize'] = $systemDiskSize;
        $this->options['query']['SystemDiskSize'] = $systemDiskSize;

        return $this;
    }

    /**
     * @param string $computeSpotPriceLimit
     *
     * @return $this
     */
    public function withComputeSpotPriceLimit($computeSpotPriceLimit)
    {
        $this->data['ComputeSpotPriceLimit'] = $computeSpotPriceLimit;
        $this->options['query']['ComputeSpotPriceLimit'] = $computeSpotPriceLimit;

        return $this;
    }

    /**
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function withAutoRenewPeriod($autoRenewPeriod)
    {
        $this->data['AutoRenewPeriod'] = $autoRenewPeriod;
        $this->options['query']['AutoRenewPeriod'] = $autoRenewPeriod;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

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
     * @param string $ecsOrderComputeCount
     *
     * @return $this
     */
    public function withEcsOrderComputeCount($ecsOrderComputeCount)
    {
        $this->data['EcsOrderComputeCount'] = $ecsOrderComputeCount;
        $this->options['query']['EcsOrder.Compute.Count'] = $ecsOrderComputeCount;

        return $this;
    }

    /**
     * @param string $computeSpotStrategy
     *
     * @return $this
     */
    public function withComputeSpotStrategy($computeSpotStrategy)
    {
        $this->data['ComputeSpotStrategy'] = $computeSpotStrategy;
        $this->options['query']['ComputeSpotStrategy'] = $computeSpotStrategy;

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
     * @param string $periodUnit
     *
     * @return $this
     */
    public function withPeriodUnit($periodUnit)
    {
        $this->data['PeriodUnit'] = $periodUnit;
        $this->options['query']['PeriodUnit'] = $periodUnit;

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
     * @param string $autoRenew
     *
     * @return $this
     */
    public function withAutoRenew($autoRenew)
    {
        $this->data['AutoRenew'] = $autoRenew;
        $this->options['query']['AutoRenew'] = $autoRenew;

        return $this;
    }

    /**
     * @param string $ecsChargeType
     *
     * @return $this
     */
    public function withEcsChargeType($ecsChargeType)
    {
        $this->data['EcsChargeType'] = $ecsChargeType;
        $this->options['query']['EcsChargeType'] = $ecsChargeType;

        return $this;
    }

    /**
     * @param string $inputFileUrl
     *
     * @return $this
     */
    public function withInputFileUrl($inputFileUrl)
    {
        $this->data['InputFileUrl'] = $inputFileUrl;
        $this->options['query']['InputFileUrl'] = $inputFileUrl;

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
     * @param string $haEnable
     *
     * @return $this
     */
    public function withHaEnable($haEnable)
    {
        $this->data['HaEnable'] = $haEnable;
        $this->options['query']['HaEnable'] = $haEnable;

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
     * @param string $schedulerType
     *
     * @return $this
     */
    public function withSchedulerType($schedulerType)
    {
        $this->data['SchedulerType'] = $schedulerType;
        $this->options['query']['SchedulerType'] = $schedulerType;

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
     * @param string $ecsOrderLoginInstanceType
     *
     * @return $this
     */
    public function withEcsOrderLoginInstanceType($ecsOrderLoginInstanceType)
    {
        $this->data['EcsOrderLoginInstanceType'] = $ecsOrderLoginInstanceType;
        $this->options['query']['EcsOrder.Login.InstanceType'] = $ecsOrderLoginInstanceType;

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
}
