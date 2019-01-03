<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSubscriptionInstance
 *
 * @method string getPeriod()
 * @method string getClientToken()
 * @method string getRegion()
 * @method string getOwnerId()
 * @method string getPayType()
 * @method string getUsedTime()
 */
class CreateSubscriptionInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dts';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'CreateSubscriptionInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

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
     * @deprecated deprecated since version 2.0, Use withPayType() instead.
     *
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        return $this->withPayType($payType);
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function withPayType($payType)
    {
        $this->data['PayType'] = $payType;
        $this->options['query']['PayType'] = $payType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUsedTime() instead.
     *
     * @param string $usedTime
     *
     * @return $this
     */
    public function setUsedTime($usedTime)
    {
        return $this->withUsedTime($usedTime);
    }

    /**
     * @param string $usedTime
     *
     * @return $this
     */
    public function withUsedTime($usedTime)
    {
        $this->data['UsedTime'] = $usedTime;
        $this->options['query']['UsedTime'] = $usedTime;

        return $this;
    }
}
