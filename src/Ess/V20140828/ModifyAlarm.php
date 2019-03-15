<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getAlarmAction()
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmTaskId()
 * @method $this withAlarmTaskId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method array getDimension()
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class ModifyAlarm extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
}
