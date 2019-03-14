<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api PutMetricAlarm
 *
 * @method string getPeriod()
 * @method string getWebhook()
 * @method string getContactGroups()
 * @method string getLevel()
 * @method string getSubject()
 * @method string getAlertName()
 * @method string getGroupId()
 * @method string getDescription()
 * @method string getResources()
 * @method string getThreshold()
 * @method string getEffectiveInterval()
 * @method string getGroupName()
 * @method string getFilter()
 * @method string getNoEffectiveInterval()
 * @method string getDisplayName()
 * @method string getNamespace()
 * @method string getEvaluationCount()
 * @method string getSilenceTime()
 * @method string getInterval()
 * @method string getMetricName()
 * @method string getDeepDive()
 * @method string getComparisonOperator()
 * @method string getDimensions()
 * @method string getStatistics()
 */
class PutMetricAlarm extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'PUT';

    public $serviceCode = 'cms';

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
     * @param string $webhook
     *
     * @return $this
     */
    public function withWebhook($webhook)
    {
        $this->data['Webhook'] = $webhook;
        $this->options['query']['Webhook'] = $webhook;

        return $this;
    }

    /**
     * @param string $contactGroups
     *
     * @return $this
     */
    public function withContactGroups($contactGroups)
    {
        $this->data['ContactGroups'] = $contactGroups;
        $this->options['query']['ContactGroups'] = $contactGroups;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function withLevel($level)
    {
        $this->data['Level'] = $level;
        $this->options['query']['Level'] = $level;

        return $this;
    }

    /**
     * @param string $subject
     *
     * @return $this
     */
    public function withSubject($subject)
    {
        $this->data['Subject'] = $subject;
        $this->options['query']['Subject'] = $subject;

        return $this;
    }

    /**
     * @param string $alertName
     *
     * @return $this
     */
    public function withAlertName($alertName)
    {
        $this->data['AlertName'] = $alertName;
        $this->options['query']['AlertName'] = $alertName;

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
     * @param string $resources
     *
     * @return $this
     */
    public function withResources($resources)
    {
        $this->data['Resources'] = $resources;
        $this->options['query']['Resources'] = $resources;

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
     * @param string $effectiveInterval
     *
     * @return $this
     */
    public function withEffectiveInterval($effectiveInterval)
    {
        $this->data['EffectiveInterval'] = $effectiveInterval;
        $this->options['query']['EffectiveInterval'] = $effectiveInterval;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }

    /**
     * @param string $filter
     *
     * @return $this
     */
    public function withFilter($filter)
    {
        $this->data['Filter'] = $filter;
        $this->options['query']['Filter'] = $filter;

        return $this;
    }

    /**
     * @param string $noEffectiveInterval
     *
     * @return $this
     */
    public function withNoEffectiveInterval($noEffectiveInterval)
    {
        $this->data['NoEffectiveInterval'] = $noEffectiveInterval;
        $this->options['query']['NoEffectiveInterval'] = $noEffectiveInterval;

        return $this;
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function withDisplayName($displayName)
    {
        $this->data['DisplayName'] = $displayName;
        $this->options['query']['DisplayName'] = $displayName;

        return $this;
    }

    /**
     * @param string $namespace
     *
     * @return $this
     */
    public function withNamespace($namespace)
    {
        $this->data['Namespace'] = $namespace;
        $this->options['query']['Namespace'] = $namespace;

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
     * @param string $silenceTime
     *
     * @return $this
     */
    public function withSilenceTime($silenceTime)
    {
        $this->data['SilenceTime'] = $silenceTime;
        $this->options['query']['SilenceTime'] = $silenceTime;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

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
     * @param string $deepDive
     *
     * @return $this
     */
    public function withDeepDive($deepDive)
    {
        $this->data['DeepDive'] = $deepDive;
        $this->options['query']['DeepDive'] = $deepDive;

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
     * @param string $dimensions
     *
     * @return $this
     */
    public function withDimensions($dimensions)
    {
        $this->data['Dimensions'] = $dimensions;
        $this->options['query']['Dimensions'] = $dimensions;

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
