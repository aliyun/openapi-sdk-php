<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAlarms
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
class DescribeAlarms extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'DescribeAlarms';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withIsEnable() instead.
     *
     * @param string $isEnable
     *
     * @return $this
     */
    public function setIsEnable($isEnable)
    {
        return $this->withIsEnable($isEnable);
    }

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
     * @deprecated deprecated since version 2.0, Use withMetricType() instead.
     *
     * @param string $metricType
     *
     * @return $this
     */
    public function setMetricType($metricType)
    {
        return $this->withMetricType($metricType);
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
     * @deprecated deprecated since version 2.0, Use withScalingGroupId() instead.
     *
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        return $this->withScalingGroupId($scalingGroupId);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withState() instead.
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        return $this->withState($state);
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
     * @deprecated deprecated since version 2.0, Use withAlarmTaskId() instead.
     *
     * @param string $alarmTaskId
     *
     * @return $this
     */
    public function setAlarmTaskId($alarmTaskId)
    {
        return $this->withAlarmTaskId($alarmTaskId);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
