<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api QueryAhDeviceList
 *
 * @method array getProductKeyList()
 * @method array getCategoryKeyList()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getAppKey()
 * @method array getTagList()
 */
class QueryAhDeviceList extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param array $productKeyList
     *
     * @return $this
     */
    public function withProductKeyList(array $productKeyList)
    {
        $this->data['ProductKeyList'] = $productKeyList;
        foreach ($productKeyList as $i => $iValue) {
            $this->options['query']['ProductKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $categoryKeyList
     *
     * @return $this
     */
    public function withCategoryKeyList(array $categoryKeyList)
    {
        $this->data['CategoryKeyList'] = $categoryKeyList;
        foreach ($categoryKeyList as $i => $iValue) {
            $this->options['query']['CategoryKeyList.' . ($i + 1)] = $iValue;
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

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param array $tagList
     *
     * @return $this
     */
    public function withTagList(array $tagList)
    {
        $this->data['TagList'] = $tagList;
        foreach ($tagList as $i => $iValue) {
            $this->options['query']['TagList.' . ($i + 1) . '.TagName'] = $tagList[$i]['TagName'];
            $this->options['query']['TagList.' . ($i + 1) . '.TagValue'] = $tagList[$i]['TagValue'];
        }

        return $this;
    }
}
