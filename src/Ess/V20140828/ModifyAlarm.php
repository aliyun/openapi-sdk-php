<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api ModifyAlarm
 *
 * @method string getMetricType()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getGroupId()
 * @method string getDescription()
 * @method array getAlarmAction()
 * @method string getThreshold()
 * @method string getOwnerId()
 * @method string getAlarmTaskId()
 * @method string getName()
 * @method string getEvaluationCount()
 * @method string getMetricName()
 * @method string getComparisonOperator()
 * @method array getDimension()
 * @method string getStatistics()
 */
class ModifyAlarm extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
