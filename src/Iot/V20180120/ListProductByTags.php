<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListProductByTags
 *
 * @method array getProductTag()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class ListProductByTags extends RpcRequest
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
    public $action = 'ListProductByTags';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $productTag
     *
     * @return $this
     */
    public function withProductTag(array $productTag)
    {
        $this->data['ProductTag'] = $productTag;
        foreach ($productTag as $i => $iValue) {
            $this->options['query']['ProductTag.' . ($i + 1) . '.TagValue'] = $productTag[$i]['TagValue'];
            $this->options['query']['ProductTag.' . ($i + 1) . '.TagKey'] = $productTag[$i]['TagKey'];
        }

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
}
