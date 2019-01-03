<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAlarm
 *
 * @method string getMetricType()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getGroupId()
 * @method string getDescription()
 * @method array getAlarmAction()
 * @method string getThreshold()
 * @method string getOwnerId()
 * @method string getName()
 * @method string getEvaluationCount()
 * @method string getMetricName()
 * @method string getComparisonOperator()
 * @method array getDimension()
 * @method string getStatistics()
 */
class CreateAlarm extends RpcRequest
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
    public $action = 'CreateAlarm';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

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
     * @deprecated deprecated since version 2.0, Use getAlarmAction() instead.
     *
     * @return array
     */
    public function getAlarmActions()
    {
        return $this->getAlarmAction();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAlarmAction() instead.
     *
     * @param array $alarmActions
     *
     * @return $this
     */
    public function setAlarmActions(array $alarmActions)
    {
        return $this->withAlarmAction($alarmActions);
    }

    /**
     * @param array $alarmAction
     *
     * @return $this
     */
    public function withAlarmAction(array $alarmAction)
    {
        $this->data['AlarmAction'] = $alarmAction;
        foreach ($alarmAction as $i => $iValue) {
            $this->options['query']['AlarmAction.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withThreshold() instead.
     *
     * @param string $threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        return $this->withThreshold($threshold);
    }

    /**
     * @param string $threshold
     *
     * @return $this
     */
    public function withThreshold($threshold)
    {
        $this->data['Threshold'] = $threshold;
        $this->options['query']['Threshold'] = $threshold;

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
     * @deprecated deprecated since version 2.0, Use withEvaluationCount() instead.
     *
     * @param string $evaluationCount
     *
     * @return $this
     */
    public function setEvaluationCount($evaluationCount)
    {
        return $this->withEvaluationCount($evaluationCount);
    }

    /**
     * @param string $evaluationCount
     *
     * @return $this
     */
    public function withEvaluationCount($evaluationCount)
    {
        $this->data['EvaluationCount'] = $evaluationCount;
        $this->options['query']['EvaluationCount'] = $evaluationCount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMetricName() instead.
     *
     * @param string $metricName
     *
     * @return $this
     */
    public function setMetricName($metricName)
    {
        return $this->withMetricName($metricName);
    }

    /**
     * @param string $metricName
     *
     * @return $this
     */
    public function withMetricName($metricName)
    {
        $this->data['MetricName'] = $metricName;
        $this->options['query']['MetricName'] = $metricName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withComparisonOperator() instead.
     *
     * @param string $comparisonOperator
     *
     * @return $this
     */
    public function setComparisonOperator($comparisonOperator)
    {
        return $this->withComparisonOperator($comparisonOperator);
    }

    /**
     * @param string $comparisonOperator
     *
     * @return $this
     */
    public function withComparisonOperator($comparisonOperator)
    {
        $this->data['ComparisonOperator'] = $comparisonOperator;
        $this->options['query']['ComparisonOperator'] = $comparisonOperator;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDimension() instead.
     *
     * @return array
     */
    public function getDimensions()
    {
        return $this->getDimension();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDimension() instead.
     *
     * @param array $dimensions
     *
     * @return $this
     */
    public function setDimensions(array $dimensions)
    {
        return $this->withDimension($dimensions);
    }

    /**
     * @param array $dimension
     *
     * @return $this
     */
    public function withDimension(array $dimension)
    {
        $this->data['Dimension'] = $dimension;
        foreach ($dimension as $i => $iValue) {
            $this->options['query']['Dimension.' . ($i + 1) . '.DimensionValue'] = $dimension[$i]['DimensionValue'];
            $this->options['query']['Dimension.' . ($i + 1) . '.DimensionKey'] = $dimension[$i]['DimensionKey'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStatistics() instead.
     *
     * @param string $statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        return $this->withStatistics($statistics);
    }

    /**
     * @param string $statistics
     *
     * @return $this
     */
    public function withStatistics($statistics)
    {
        $this->data['Statistics'] = $statistics;
        $this->options['query']['Statistics'] = $statistics;

        return $this;
    }
}
