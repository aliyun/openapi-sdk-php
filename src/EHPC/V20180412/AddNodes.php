<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api AddNodes
 *
 * @method string getAutoRenewPeriod()
 * @method string getPeriod()
 * @method string getImageId()
 * @method string getCount()
 * @method string getClusterId()
 * @method string getComputeSpotStrategy()
 * @method string getJobQueue()
 * @method string getImageOwnerAlias()
 * @method string getPeriodUnit()
 * @method string getAutoRenew()
 * @method string getEcsChargeType()
 * @method string getCreateMode()
 * @method string getSystemDiskSize()
 * @method string getInstanceType()
 * @method string getComputeSpotPriceLimit()
 */
class AddNodes extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
     * @param string $count
     *
     * @return $this
     */
    public function withCount($count)
    {
        $this->data['Count'] = $count;
        $this->options['query']['Count'] = $count;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

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
     * @param string $createMode
     *
     * @return $this
     */
    public function withCreateMode($createMode)
    {
        $this->data['CreateMode'] = $createMode;
        $this->options['query']['CreateMode'] = $createMode;

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
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['InstanceType'] = $instanceType;

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
}
