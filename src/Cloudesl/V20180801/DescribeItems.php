<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeItems
 *
 * @method string getItemId()
 * @method string getBePromotion()
 * @method string getShelfCode()
 * @method string getItemTitle()
 * @method string getPageSize()
 * @method string getStoreId()
 * @method string getSkuId()
 * @method string getPageNumber()
 * @method string getItemBarCode()
 */
class DescribeItems extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'DescribeItems';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withItemId() instead.
     *
     * @param string $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        return $this->withItemId($itemId);
    }

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function withItemId($itemId)
    {
        $this->data['ItemId'] = $itemId;
        $this->options['query']['ItemId'] = $itemId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBePromotion() instead.
     *
     * @param string $bePromotion
     *
     * @return $this
     */
    public function setBePromotion($bePromotion)
    {
        return $this->withBePromotion($bePromotion);
    }

    /**
     * @param string $bePromotion
     *
     * @return $this
     */
    public function withBePromotion($bePromotion)
    {
        $this->data['BePromotion'] = $bePromotion;
        $this->options['query']['BePromotion'] = $bePromotion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withShelfCode() instead.
     *
     * @param string $shelfCode
     *
     * @return $this
     */
    public function setShelfCode($shelfCode)
    {
        return $this->withShelfCode($shelfCode);
    }

    /**
     * @param string $shelfCode
     *
     * @return $this
     */
    public function withShelfCode($shelfCode)
    {
        $this->data['ShelfCode'] = $shelfCode;
        $this->options['query']['ShelfCode'] = $shelfCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withItemTitle() instead.
     *
     * @param string $itemTitle
     *
     * @return $this
     */
    public function setItemTitle($itemTitle)
    {
        return $this->withItemTitle($itemTitle);
    }

    /**
     * @param string $itemTitle
     *
     * @return $this
     */
    public function withItemTitle($itemTitle)
    {
        $this->data['ItemTitle'] = $itemTitle;
        $this->options['query']['ItemTitle'] = $itemTitle;

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
     * @deprecated deprecated since version 2.0, Use withStoreId() instead.
     *
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        return $this->withStoreId($storeId);
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function withStoreId($storeId)
    {
        $this->data['StoreId'] = $storeId;
        $this->options['query']['StoreId'] = $storeId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSkuId() instead.
     *
     * @param string $skuId
     *
     * @return $this
     */
    public function setSkuId($skuId)
    {
        return $this->withSkuId($skuId);
    }

    /**
     * @param string $skuId
     *
     * @return $this
     */
    public function withSkuId($skuId)
    {
        $this->data['SkuId'] = $skuId;
        $this->options['query']['SkuId'] = $skuId;

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

    /**
     * @deprecated deprecated since version 2.0, Use withItemBarCode() instead.
     *
     * @param string $itemBarCode
     *
     * @return $this
     */
    public function setItemBarCode($itemBarCode)
    {
        return $this->withItemBarCode($itemBarCode);
    }

    /**
     * @param string $itemBarCode
     *
     * @return $this
     */
    public function withItemBarCode($itemBarCode)
    {
        $this->data['ItemBarCode'] = $itemBarCode;
        $this->options['query']['ItemBarCode'] = $itemBarCode;

        return $this;
    }
}
