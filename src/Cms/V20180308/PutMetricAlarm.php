<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PutMetricAlarm
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
class PutMetricAlarm extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'PutMetricAlarm';

    /**
     * @var string
     */
    public $method = 'PUT';

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
     * @deprecated deprecated since version 2.0, Use withWebhook() instead.
     *
     * @param string $webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        return $this->withWebhook($webhook);
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
     * @deprecated deprecated since version 2.0, Use withContactGroups() instead.
     *
     * @param string $contactGroups
     *
     * @return $this
     */
    public function setContactGroups($contactGroups)
    {
        return $this->withContactGroups($contactGroups);
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
     * @deprecated deprecated since version 2.0, Use withLevel() instead.
     *
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        return $this->withLevel($level);
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
     * @deprecated deprecated since version 2.0, Use withSubject() instead.
     *
     * @param string $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        return $this->withSubject($subject);
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
     * @deprecated deprecated since version 2.0, Use withAlertName() instead.
     *
     * @param string $alertName
     *
     * @return $this
     */
    public function setAlertName($alertName)
    {
        return $this->withAlertName($alertName);
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
     * @deprecated deprecated since version 2.0, Use withResources() instead.
     *
     * @param string $resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        return $this->withResources($resources);
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
     * @deprecated deprecated since version 2.0, Use withEffectiveInterval() instead.
     *
     * @param string $effectiveInterval
     *
     * @return $this
     */
    public function setEffectiveInterval($effectiveInterval)
    {
        return $this->withEffectiveInterval($effectiveInterval);
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
     * @deprecated deprecated since version 2.0, Use withGroupName() instead.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        return $this->withGroupName($groupName);
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
     * @deprecated deprecated since version 2.0, Use withFilter() instead.
     *
     * @param string $filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        return $this->withFilter($filter);
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
     * @deprecated deprecated since version 2.0, Use withNoEffectiveInterval() instead.
     *
     * @param string $noEffectiveInterval
     *
     * @return $this
     */
    public function setNoEffectiveInterval($noEffectiveInterval)
    {
        return $this->withNoEffectiveInterval($noEffectiveInterval);
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
     * @deprecated deprecated since version 2.0, Use withDisplayName() instead.
     *
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        return $this->withDisplayName($displayName);
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
     * @deprecated deprecated since version 2.0, Use withNamespace() instead.
     *
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        return $this->withNamespace($namespace);
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
     * @deprecated deprecated since version 2.0, Use withSilenceTime() instead.
     *
     * @param string $silenceTime
     *
     * @return $this
     */
    public function setSilenceTime($silenceTime)
    {
        return $this->withSilenceTime($silenceTime);
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
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
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
     * @deprecated deprecated since version 2.0, Use withDeepDive() instead.
     *
     * @param string $deepDive
     *
     * @return $this
     */
    public function setDeepDive($deepDive)
    {
        return $this->withDeepDive($deepDive);
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
     * @deprecated deprecated since version 2.0, Use withDimensions() instead.
     *
     * @param string $dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        return $this->withDimensions($dimensions);
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
