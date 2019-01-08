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
