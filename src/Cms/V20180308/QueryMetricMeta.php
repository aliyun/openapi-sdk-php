<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMetricMeta
 *
 * @method string getMetric()
 * @method string getPageSize()
 * @method string getProject()
 * @method string getPageNumber()
 * @method string getLabels()
 */
class QueryMetricMeta extends RpcRequest
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
    public $action = 'QueryMetricMeta';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $metric
     *
     * @return $this
     */
    public function withMetric($metric)
    {
        $this->data['Metric'] = $metric;
        $this->options['query']['Metric'] = $metric;

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
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $labels
     *
     * @return $this
     */
    public function withLabels($labels)
    {
        $this->data['Labels'] = $labels;
        $this->options['query']['Labels'] = $labels;

        return $this;
    }
}
