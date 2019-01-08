<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAlarms
 *
 * @method string getEnableState()
 * @method string getNames()
 * @method string getDisplayName()
 * @method string getGroupId()
 * @method string getNamespace()
 * @method string getPageSize()
 * @method string getAlertState()
 * @method string getNameKeyword()
 * @method string getGroupBy()
 * @method string getPage()
 * @method string getMetricName()
 */
class DescribeAlarms extends RpcRequest
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
    public $action = 'DescribeAlarms';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $enableState
     *
     * @return $this
     */
    public function withEnableState($enableState)
    {
        $this->data['EnableState'] = $enableState;
        $this->options['query']['EnableState'] = $enableState;

        return $this;
    }

    /**
     * @param string $names
     *
     * @return $this
     */
    public function withNames($names)
    {
        $this->data['Names'] = $names;
        $this->options['query']['Names'] = $names;

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
     * @param string $alertState
     *
     * @return $this
     */
    public function withAlertState($alertState)
    {
        $this->data['AlertState'] = $alertState;
        $this->options['query']['AlertState'] = $alertState;

        return $this;
    }

    /**
     * @param string $nameKeyword
     *
     * @return $this
     */
    public function withNameKeyword($nameKeyword)
    {
        $this->data['NameKeyword'] = $nameKeyword;
        $this->options['query']['NameKeyword'] = $nameKeyword;

        return $this;
    }

    /**
     * @param string $groupBy
     *
     * @return $this
     */
    public function withGroupBy($groupBy)
    {
        $this->data['GroupBy'] = $groupBy;
        $this->options['query']['GroupBy'] = $groupBy;

        return $this;
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
}
