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
