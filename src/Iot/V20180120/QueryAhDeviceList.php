<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryAhDeviceList
 *
 * @method array getProductKeyList()
 * @method array getCategoryKeyList()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getAppKey()
 * @method array getTagList()
 */
class QueryAhDeviceList extends RpcRequest
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
    public $action = 'QueryAhDeviceList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getProductKeyList() instead.
     *
     * @return array
     */
    public function getProductKeyLists()
    {
        return $this->getProductKeyList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductKeyList() instead.
     *
     * @param array $productKeyLists
     *
     * @return $this
     */
    public function setProductKeyLists(array $productKeyLists)
    {
        return $this->withProductKeyList($productKeyLists);
    }

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
     * @deprecated deprecated since version 2.0, Use getCategoryKeyList() instead.
     *
     * @return array
     */
    public function getCategoryKeyLists()
    {
        return $this->getCategoryKeyList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCategoryKeyList() instead.
     *
     * @param array $categoryKeyLists
     *
     * @return $this
     */
    public function setCategoryKeyLists(array $categoryKeyLists)
    {
        return $this->withCategoryKeyList($categoryKeyLists);
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
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
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
     * @deprecated deprecated since version 2.0, Use withAppKey() instead.
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        return $this->withAppKey($appKey);
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
     * @deprecated deprecated since version 2.0, Use getTagList() instead.
     *
     * @return array
     */
    public function getTagLists()
    {
        return $this->getTagList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagList() instead.
     *
     * @param array $tagLists
     *
     * @return $this
     */
    public function setTagLists(array $tagLists)
    {
        return $this->withTagList($tagLists);
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
