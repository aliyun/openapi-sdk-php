<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUserOperationLog
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
class DescribeUserOperationLog extends RpcRequest
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
    public $action = 'DescribeUserOperationLog';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withOperateUserId() instead.
     *
     * @param string $operateUserId
     *
     * @return $this
     */
    public function setOperateUserId($operateUserId)
    {
        return $this->withOperateUserId($operateUserId);
    }

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
     * @deprecated deprecated since version 2.0, Use withOperateStatus() instead.
     *
     * @param string $operateStatus
     *
     * @return $this
     */
    public function setOperateStatus($operateStatus)
    {
        return $this->withOperateStatus($operateStatus);
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
     * @deprecated deprecated since version 2.0, Use withReverse() instead.
     *
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        return $this->withReverse($reverse);
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
     * @deprecated deprecated since version 2.0, Use withEslBarCode() instead.
     *
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function setEslBarCode($eslBarCode)
    {
        return $this->withEslBarCode($eslBarCode);
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
     * @deprecated deprecated since version 2.0, Use withOperateType() instead.
     *
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        return $this->withOperateType($operateType);
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
