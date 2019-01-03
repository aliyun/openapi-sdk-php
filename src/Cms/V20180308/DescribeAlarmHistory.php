<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAlarmHistory
 *
 * @method string getAlertName()
 * @method string getGroupId()
 * @method string getEndTime()
 * @method string getRuleName()
 * @method string getStartTime()
 * @method string getAscending()
 * @method string getOnlyCount()
 * @method string getNamespace()
 * @method string getPageSize()
 * @method string getState()
 * @method string getPage()
 * @method string getMetricName()
 * @method string getStatus()
 */
class DescribeAlarmHistory extends RpcRequest
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
    public $action = 'DescribeAlarmHistory';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withRuleName() instead.
     *
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        return $this->withRuleName($ruleName);
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function withRuleName($ruleName)
    {
        $this->data['RuleName'] = $ruleName;
        $this->options['query']['RuleName'] = $ruleName;

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
     * @deprecated deprecated since version 2.0, Use withAscending() instead.
     *
     * @param string $ascending
     *
     * @return $this
     */
    public function setAscending($ascending)
    {
        return $this->withAscending($ascending);
    }

    /**
     * @param string $ascending
     *
     * @return $this
     */
    public function withAscending($ascending)
    {
        $this->data['Ascending'] = $ascending;
        $this->options['query']['Ascending'] = $ascending;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOnlyCount() instead.
     *
     * @param string $onlyCount
     *
     * @return $this
     */
    public function setOnlyCount($onlyCount)
    {
        return $this->withOnlyCount($onlyCount);
    }

    /**
     * @param string $onlyCount
     *
     * @return $this
     */
    public function withOnlyCount($onlyCount)
    {
        $this->data['OnlyCount'] = $onlyCount;
        $this->options['query']['OnlyCount'] = $onlyCount;

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
     * @deprecated deprecated since version 2.0, Use withPage() instead.
     *
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        return $this->withPage($page);
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function withPage($page)
    {
        $this->data['Page'] = $page;
        $this->options['query']['Page'] = $page;

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
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
