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
     * @deprecated deprecated since version 2.0, Use withQueryTotalCount() instead.
     *
     * @param string $queryTotalCount
     *
     * @return $this
     */
    public function setQueryTotalCount($queryTotalCount)
    {
        return $this->withQueryTotalCount($queryTotalCount);
    }

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
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
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
