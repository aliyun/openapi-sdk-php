<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeProductRates
 *
 * @method string getCode()
 * @method string getPageSize()
 * @method string getPageIndex()
 */
class DescribeProductRates extends RpcRequest
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
    public $action = 'DescribeProductRates';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCode() instead.
     *
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        return $this->withCode($code);
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function withCode($code)
    {
        $this->data['Code'] = $code;
        $this->options['query']['Code'] = $code;

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
     * @deprecated deprecated since version 2.0, Use withPageIndex() instead.
     *
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        return $this->withPageIndex($pageIndex);
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function withPageIndex($pageIndex)
    {
        $this->data['PageIndex'] = $pageIndex;
        $this->options['query']['PageIndex'] = $pageIndex;

        return $this;
    }
}
