<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class CreateAlarm extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
