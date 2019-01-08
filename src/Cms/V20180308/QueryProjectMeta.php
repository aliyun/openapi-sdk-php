<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryProjectMeta
 *
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getLabels()
 */
class QueryProjectMeta extends RpcRequest
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
    public $action = 'QueryProjectMeta';

    /**
     * @var string
     */
    public $method = 'POST';

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
