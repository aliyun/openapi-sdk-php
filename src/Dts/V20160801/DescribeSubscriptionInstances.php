<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api DescribeSubscriptionInstances
 *
 * @method string getClientToken()
 * @method string getPageSize()
 * @method string getSubscriptionInstanceName()
 * @method string getPageNum()
 * @method string getOwnerId()
 */
class DescribeSubscriptionInstances extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @param string $subscriptionInstanceName
     *
     * @return $this
     */
    public function withSubscriptionInstanceName($subscriptionInstanceName)
    {
        $this->data['SubscriptionInstanceName'] = $subscriptionInstanceName;
        $this->options['query']['SubscriptionInstanceName'] = $subscriptionInstanceName;

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
}
