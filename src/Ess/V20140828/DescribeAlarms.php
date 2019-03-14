<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAlarms
 *
 * @method string getIsEnable()
 * @method string getMetricType()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getPageSize()
 * @method string getState()
 * @method string getOwnerId()
 * @method string getAlarmTaskId()
 * @method string getPageNumber()
 */
class DescribeAlarms extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $isEnable
     *
     * @return $this
     */
    public function withIsEnable($isEnable)
    {
        $this->data['IsEnable'] = $isEnable;
        $this->options['query']['IsEnable'] = $isEnable;

        return $this;
    }

    /**
     * @param string $metricType
     *
     * @return $this
     */
    public function withMetricType($metricType)
    {
        $this->data['MetricType'] = $metricType;
        $this->options['query']['MetricType'] = $metricType;

        return $this;
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
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function withState($state)
    {
        $this->data['State'] = $state;
        $this->options['query']['State'] = $state;

        return $this;
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
     * @param string $alarmTaskId
     *
     * @return $this
     */
    public function withAlarmTaskId($alarmTaskId)
    {
        $this->data['AlarmTaskId'] = $alarmTaskId;
        $this->options['query']['AlarmTaskId'] = $alarmTaskId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}
