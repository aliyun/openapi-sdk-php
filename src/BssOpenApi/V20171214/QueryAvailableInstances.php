<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * Api QueryAvailableInstances
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
class QueryAvailableInstances extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

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
