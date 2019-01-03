<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeProducts
 *
 * @method array getFilter()
 * @method string getSearchTerm()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class DescribeProducts extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'DescribeProducts';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getFilter() instead.
     *
     * @return array
     */
    public function getFilters()
    {
        return $this->getFilter();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter() instead.
     *
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        return $this->withFilter($filters);
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $filter[$i]['Value'];
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $filter[$i]['Key'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSearchTerm() instead.
     *
     * @param string $searchTerm
     *
     * @return $this
     */
    public function setSearchTerm($searchTerm)
    {
        return $this->withSearchTerm($searchTerm);
    }

    /**
     * @param string $searchTerm
     *
     * @return $this
     */
    public function withSearchTerm($searchTerm)
    {
        $this->data['SearchTerm'] = $searchTerm;
        $this->options['query']['SearchTerm'] = $searchTerm;

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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
}
