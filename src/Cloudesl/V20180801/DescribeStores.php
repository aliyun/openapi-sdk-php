<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeStores
 *
 * @method string getToDate()
 * @method string getPageSize()
 * @method string getStoreName()
 * @method string getGroups()
 * @method string getStoreId()
 * @method string getBrand()
 * @method string getPageNumber()
 * @method string getFromDate()
 */
class DescribeStores extends RpcRequest
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
    public $action = 'DescribeStores';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withToDate() instead.
     *
     * @param string $toDate
     *
     * @return $this
     */
    public function setToDate($toDate)
    {
        return $this->withToDate($toDate);
    }

    /**
     * @param string $toDate
     *
     * @return $this
     */
    public function withToDate($toDate)
    {
        $this->data['ToDate'] = $toDate;
        $this->options['query']['ToDate'] = $toDate;

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
     * @deprecated deprecated since version 2.0, Use withStoreName() instead.
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        return $this->withStoreName($storeName);
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroups() instead.
     *
     * @param string $groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        return $this->withGroups($groups);
    }

    /**
     * @param string $groups
     *
     * @return $this
     */
    public function withGroups($groups)
    {
        $this->data['Groups'] = $groups;
        $this->options['query']['Groups'] = $groups;

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
     * @deprecated deprecated since version 2.0, Use withBrand() instead.
     *
     * @param string $brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        return $this->withBrand($brand);
    }

    /**
     * @param string $brand
     *
     * @return $this
     */
    public function withBrand($brand)
    {
        $this->data['Brand'] = $brand;
        $this->options['query']['Brand'] = $brand;

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
     * @deprecated deprecated since version 2.0, Use withFromDate() instead.
     *
     * @param string $fromDate
     *
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        return $this->withFromDate($fromDate);
    }

    /**
     * @param string $fromDate
     *
     * @return $this
     */
    public function withFromDate($fromDate)
    {
        $this->data['FromDate'] = $fromDate;
        $this->options['query']['FromDate'] = $fromDate;

        return $this;
    }
}
