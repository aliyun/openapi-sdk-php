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
}
