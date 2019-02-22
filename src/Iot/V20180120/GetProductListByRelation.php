<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetProductListByRelation
 *
 * @method string getCategoryKey()
 * @method string getProductName()
 * @method string getRelated()
 * @method string getCurrentPage()
 * @method string getPageSize()
 */
class GetProductListByRelation extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'GetProductListByRelation';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $categoryKey
     *
     * @return $this
     */
    public function withCategoryKey($categoryKey)
    {
        $this->data['CategoryKey'] = $categoryKey;
        $this->options['query']['CategoryKey'] = $categoryKey;

        return $this;
    }

    /**
     * @param string $productName
     *
     * @return $this
     */
    public function withProductName($productName)
    {
        $this->data['ProductName'] = $productName;
        $this->options['query']['ProductName'] = $productName;

        return $this;
    }

    /**
     * @param string $related
     *
     * @return $this
     */
    public function withRelated($related)
    {
        $this->data['Related'] = $related;
        $this->options['query']['Related'] = $related;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

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
}
