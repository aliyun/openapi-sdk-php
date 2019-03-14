<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * Api DescribeUserOperationLog
 *
 * @method string getOperateUserId()
 * @method string getItemTitle()
 * @method string getOperateStatus()
 * @method string getStoreId()
 * @method string getReverse()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getItemId()
 * @method string getToDate()
 * @method string getEslBarCode()
 * @method string getPageSize()
 * @method string getOperateType()
 * @method string getItemBarCode()
 */
class DescribeUserOperationLog extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';

    /**
     * @param string $operateUserId
     *
     * @return $this
     */
    public function withOperateUserId($operateUserId)
    {
        $this->data['OperateUserId'] = $operateUserId;
        $this->options['query']['OperateUserId'] = $operateUserId;

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
     * @param string $operateStatus
     *
     * @return $this
     */
    public function withOperateStatus($operateStatus)
    {
        $this->data['OperateStatus'] = $operateStatus;
        $this->options['query']['OperateStatus'] = $operateStatus;

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
     * @param string $reverse
     *
     * @return $this
     */
    public function withReverse($reverse)
    {
        $this->data['Reverse'] = $reverse;
        $this->options['query']['Reverse'] = $reverse;

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
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function withEslBarCode($eslBarCode)
    {
        $this->data['EslBarCode'] = $eslBarCode;
        $this->options['query']['EslBarCode'] = $eslBarCode;

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
     * @param string $operateType
     *
     * @return $this
     */
    public function withOperateType($operateType)
    {
        $this->data['OperateType'] = $operateType;
        $this->options['query']['OperateType'] = $operateType;

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
