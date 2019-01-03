<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAlarm
 *
 * @method string getPeriod()
 * @method string getWebhook()
 * @method string getDryRun()
 * @method string getContactGroups()
 * @method string getEndTime()
 * @method string getThreshold()
 * @method string getStartTime()
 * @method string getName()
 * @method string getNamespace()
 * @method string getEvaluationCount()
 * @method string getSilenceTime()
 * @method string getMetricName()
 * @method string getNotifyType()
 * @method string getComparisonOperator()
 * @method string getDimensions()
 * @method string getStatistics()
 */
class CreateAlarm extends RpcRequest
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
    public $action = 'CreateAlarm';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withDryRun() instead.
     *
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        return $this->withDryRun($dryRun);
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function withDryRun($dryRun)
    {
        $this->data['DryRun'] = $dryRun;
        $this->options['query']['DryRun'] = $dryRun;

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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

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
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
     * @deprecated deprecated since version 2.0, Use withNotifyType() instead.
     *
     * @param string $notifyType
     *
     * @return $this
     */
    public function setNotifyType($notifyType)
    {
        return $this->withNotifyType($notifyType);
    }

    /**
     * @param string $notifyType
     *
     * @return $this
     */
    public function withNotifyType($notifyType)
    {
        $this->data['NotifyType'] = $notifyType;
        $this->options['query']['NotifyType'] = $notifyType;

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
