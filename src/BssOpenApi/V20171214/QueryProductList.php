<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryProductList
 *
 * @method string getQueryTotalCount()
 * @method string getPageSize()
 * @method string getPageNum()
 */
class QueryProductList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'QueryProductList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $queryTotalCount
     *
     * @return $this
     */
    public function withQueryTotalCount($queryTotalCount)
    {
        $this->data['QueryTotalCount'] = $queryTotalCount;
        $this->options['query']['QueryTotalCount'] = $queryTotalCount;

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
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }
}
