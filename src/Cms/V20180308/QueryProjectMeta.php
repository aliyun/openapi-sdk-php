<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api QueryProjectMeta
 *
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getLabels()
 */
class QueryProjectMeta extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
