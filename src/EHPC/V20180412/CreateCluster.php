<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCluster
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
 * @method string getPassword()
 * @method string getEcsOrderLoginCount()
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
class CreateCluster extends RpcRequest
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
    public $action = 'CreateCluster';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withSccClusterId() instead.
     *
     * @param string $sccClusterId
     *
     * @return $this
     */
    public function setSccClusterId($sccClusterId)
    {
        return $this->withSccClusterId($sccClusterId);
    }

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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
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
     * @deprecated deprecated since version 2.0, Use withEcsOrderManagerInstanceType() instead.
     *
     * @param string $ecsOrderManagerInstanceType
     *
     * @return $this
     */
    public function setEcsOrderManagerInstanceType($ecsOrderManagerInstanceType)
    {
        return $this->withEcsOrderManagerInstanceType($ecsOrderManagerInstanceType);
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
     * @deprecated deprecated since version 2.0, Use withAccountType() instead.
     *
     * @param string $accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        return $this->withAccountType($accountType);
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
     * @deprecated deprecated since version 2.0, Use withImageOwnerAlias() instead.
     *
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        return $this->withImageOwnerAlias($imageOwnerAlias);
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
     * @deprecated deprecated since version 2.0, Use withDeployMode() instead.
     *
     * @param string $deployMode
     *
     * @return $this
     */
    public function setDeployMode($deployMode)
    {
        return $this->withDeployMode($deployMode);
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
     * @deprecated deprecated since version 2.0, Use withEcsOrderManagerCount() instead.
     *
     * @param string $ecsOrderManagerCount
     *
     * @return $this
     */
    public function setEcsOrderManagerCount($ecsOrderManagerCount)
    {
        return $this->withEcsOrderManagerCount($ecsOrderManagerCount);
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
     * @deprecated deprecated since version 2.0, Use withEcsOrderLoginCount() instead.
     *
     * @param string $ecsOrderLoginCount
     *
     * @return $this
     */
    public function setEcsOrderLoginCount($ecsOrderLoginCount)
    {
        return $this->withEcsOrderLoginCount($ecsOrderLoginCount);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskSize() instead.
     *
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        return $this->withSystemDiskSize($systemDiskSize);
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
     * @deprecated deprecated since version 2.0, Use withComputeSpotPriceLimit() instead.
     *
     * @param string $computeSpotPriceLimit
     *
     * @return $this
     */
    public function setComputeSpotPriceLimit($computeSpotPriceLimit)
    {
        return $this->withComputeSpotPriceLimit($computeSpotPriceLimit);
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
     * @deprecated deprecated since version 2.0, Use withAutoRenewPeriod() instead.
     *
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function setAutoRenewPeriod($autoRenewPeriod)
    {
        return $this->withAutoRenewPeriod($autoRenewPeriod);
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
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
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
     * @deprecated deprecated since version 2.0, Use withEcsOrderComputeCount() instead.
     *
     * @param string $ecsOrderComputeCount
     *
     * @return $this
     */
    public function setEcsOrderComputeCount($ecsOrderComputeCount)
    {
        return $this->withEcsOrderComputeCount($ecsOrderComputeCount);
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
     * @deprecated deprecated since version 2.0, Use withComputeSpotStrategy() instead.
     *
     * @param string $computeSpotStrategy
     *
     * @return $this
     */
    public function setComputeSpotStrategy($computeSpotStrategy)
    {
        return $this->withComputeSpotStrategy($computeSpotStrategy);
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
     * @deprecated deprecated since version 2.0, Use withPeriodUnit() instead.
     *
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        return $this->withPeriodUnit($periodUnit);
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
     * @deprecated deprecated since version 2.0, Use withAutoRenew() instead.
     *
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        return $this->withAutoRenew($autoRenew);
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
     * @deprecated deprecated since version 2.0, Use withEcsChargeType() instead.
     *
     * @param string $ecsChargeType
     *
     * @return $this
     */
    public function setEcsChargeType($ecsChargeType)
    {
        return $this->withEcsChargeType($ecsChargeType);
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
     * @deprecated deprecated since version 2.0, Use withInputFileUrl() instead.
     *
     * @param string $inputFileUrl
     *
     * @return $this
     */
    public function setInputFileUrl($inputFileUrl)
    {
        return $this->withInputFileUrl($inputFileUrl);
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
     * @deprecated deprecated since version 2.0, Use withHaEnable() instead.
     *
     * @param string $haEnable
     *
     * @return $this
     */
    public function setHaEnable($haEnable)
    {
        return $this->withHaEnable($haEnable);
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
     * @deprecated deprecated since version 2.0, Use withSchedulerType() instead.
     *
     * @param string $schedulerType
     *
     * @return $this
     */
    public function setSchedulerType($schedulerType)
    {
        return $this->withSchedulerType($schedulerType);
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
     * @deprecated deprecated since version 2.0, Use withEcsOrderLoginInstanceType() instead.
     *
     * @param string $ecsOrderLoginInstanceType
     *
     * @return $this
     */
    public function setEcsOrderLoginInstanceType($ecsOrderLoginInstanceType)
    {
        return $this->withEcsOrderLoginInstanceType($ecsOrderLoginInstanceType);
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
