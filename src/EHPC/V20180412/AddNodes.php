<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddNodes
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
class AddNodes extends RpcRequest
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
    public $action = 'AddNodes';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

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
     * @deprecated deprecated since version 2.0, Use withCount() instead.
     *
     * @param string $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        return $this->withCount($count);
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
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
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
     * @deprecated deprecated since version 2.0, Use withCreateMode() instead.
     *
     * @param string $createMode
     *
     * @return $this
     */
    public function setCreateMode($createMode)
    {
        return $this->withCreateMode($createMode);
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
     * @deprecated deprecated since version 2.0, Use withInstanceType() instead.
     *
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        return $this->withInstanceType($instanceType);
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
}
