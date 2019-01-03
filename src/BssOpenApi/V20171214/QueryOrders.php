<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryOrders
 *
 * @method string getProductCode()
 * @method string getSubscriptionType()
 * @method string getPageSize()
 * @method string getPaymentStatus()
 * @method string getCreateTimeStart()
 * @method string getPageNum()
 * @method string getOwnerId()
 * @method string getCreateTimeEnd()
 * @method string getProductType()
 * @method string getOrderType()
 */
class QueryOrders extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'QueryOrders';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withProductCode() instead.
     *
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        return $this->withProductCode($productCode);
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function withProductCode($productCode)
    {
        $this->data['ProductCode'] = $productCode;
        $this->options['query']['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSubscriptionType() instead.
     *
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        return $this->withSubscriptionType($subscriptionType);
    }

    /**
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function withSubscriptionType($subscriptionType)
    {
        $this->data['SubscriptionType'] = $subscriptionType;
        $this->options['query']['SubscriptionType'] = $subscriptionType;

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
     * @deprecated deprecated since version 2.0, Use withPaymentStatus() instead.
     *
     * @param string $paymentStatus
     *
     * @return $this
     */
    public function setPaymentStatus($paymentStatus)
    {
        return $this->withPaymentStatus($paymentStatus);
    }

    /**
     * @param string $paymentStatus
     *
     * @return $this
     */
    public function withPaymentStatus($paymentStatus)
    {
        $this->data['PaymentStatus'] = $paymentStatus;
        $this->options['query']['PaymentStatus'] = $paymentStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCreateTimeStart() instead.
     *
     * @param string $createTimeStart
     *
     * @return $this
     */
    public function setCreateTimeStart($createTimeStart)
    {
        return $this->withCreateTimeStart($createTimeStart);
    }

    /**
     * @param string $createTimeStart
     *
     * @return $this
     */
    public function withCreateTimeStart($createTimeStart)
    {
        $this->data['CreateTimeStart'] = $createTimeStart;
        $this->options['query']['CreateTimeStart'] = $createTimeStart;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCreateTimeEnd() instead.
     *
     * @param string $createTimeEnd
     *
     * @return $this
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        return $this->withCreateTimeEnd($createTimeEnd);
    }

    /**
     * @param string $createTimeEnd
     *
     * @return $this
     */
    public function withCreateTimeEnd($createTimeEnd)
    {
        $this->data['CreateTimeEnd'] = $createTimeEnd;
        $this->options['query']['CreateTimeEnd'] = $createTimeEnd;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductType() instead.
     *
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        return $this->withProductType($productType);
    }

    /**
     * @param string $productType
     *
     * @return $this
     */
    public function withProductType($productType)
    {
        $this->data['ProductType'] = $productType;
        $this->options['query']['ProductType'] = $productType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        return $this->withOrderType($orderType);
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['OrderType'] = $orderType;

        return $this;
    }
}
