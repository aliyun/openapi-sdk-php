<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

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
class CreateCluster extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
}
