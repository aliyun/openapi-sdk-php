<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getSubject()
 * @method $this withSubject($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getEffectiveInterval()
 * @method $this withEffectiveInterval($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getNoEffectiveInterval()
 * @method $this withNoEffectiveInterval($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDeepDive()
 * @method $this withDeepDive($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class PutMetricAlarm extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'PUT';

    public $serviceCode = 'cms';
}
