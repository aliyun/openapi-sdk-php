<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryAvailableInstances
 *
 * @method string getProductCode()
 * @method string getSubscriptionType()
 * @method string getOwnerId()
 * @method string getPageNum()
 * @method string getEndTimeStart()
 * @method string getProductType()
 * @method string getCreateTimeEnd()
 * @method string getInstanceIDs()
 * @method string getEndTimeEnd()
 * @method string getPageSize()
 * @method string getCreateTimeStart()
 * @method string getRegion()
 * @method string getRenewStatus()
 */
class QueryAvailableInstances extends RpcRequest
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
    public $action = 'QueryAvailableInstances';

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
     * @deprecated deprecated since version 2.0, Use withEndTimeStart() instead.
     *
     * @param string $endTimeStart
     *
     * @return $this
     */
    public function setEndTimeStart($endTimeStart)
    {
        return $this->withEndTimeStart($endTimeStart);
    }

    /**
     * @param string $endTimeStart
     *
     * @return $this
     */
    public function withEndTimeStart($endTimeStart)
    {
        $this->data['EndTimeStart'] = $endTimeStart;
        $this->options['query']['EndTimeStart'] = $endTimeStart;

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
     * @deprecated deprecated since version 2.0, Use withInstanceIDs() instead.
     *
     * @param string $instanceIDs
     *
     * @return $this
     */
    public function setInstanceIDs($instanceIDs)
    {
        return $this->withInstanceIDs($instanceIDs);
    }

    /**
     * @param string $instanceIDs
     *
     * @return $this
     */
    public function withInstanceIDs($instanceIDs)
    {
        $this->data['InstanceIDs'] = $instanceIDs;
        $this->options['query']['InstanceIDs'] = $instanceIDs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTimeEnd() instead.
     *
     * @param string $endTimeEnd
     *
     * @return $this
     */
    public function setEndTimeEnd($endTimeEnd)
    {
        return $this->withEndTimeEnd($endTimeEnd);
    }

    /**
     * @param string $endTimeEnd
     *
     * @return $this
     */
    public function withEndTimeEnd($endTimeEnd)
    {
        $this->data['EndTimeEnd'] = $endTimeEnd;
        $this->options['query']['EndTimeEnd'] = $endTimeEnd;

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
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRenewStatus() instead.
     *
     * @param string $renewStatus
     *
     * @return $this
     */
    public function setRenewStatus($renewStatus)
    {
        return $this->withRenewStatus($renewStatus);
    }

    /**
     * @param string $renewStatus
     *
     * @return $this
     */
    public function withRenewStatus($renewStatus)
    {
        $this->data['RenewStatus'] = $renewStatus;
        $this->options['query']['RenewStatus'] = $renewStatus;

        return $this;
    }
}
