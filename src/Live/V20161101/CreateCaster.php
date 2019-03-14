<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api CreateCaster
 *
 * @method string getCasterTemplate()
 * @method string getExpireTime()
 * @method string getNormType()
 * @method string getCasterName()
 * @method string getClientToken()
 * @method string getChargeType()
 * @method string getOwnerId()
 * @method string getPurchaseTime()
 */
class CreateCaster extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param string $casterTemplate
     *
     * @return $this
     */
    public function withCasterTemplate($casterTemplate)
    {
        $this->data['CasterTemplate'] = $casterTemplate;
        $this->options['query']['CasterTemplate'] = $casterTemplate;

        return $this;
    }

    /**
     * @param string $expireTime
     *
     * @return $this
     */
    public function withExpireTime($expireTime)
    {
        $this->data['ExpireTime'] = $expireTime;
        $this->options['query']['ExpireTime'] = $expireTime;

        return $this;
    }

    /**
     * @param string $normType
     *
     * @return $this
     */
    public function withNormType($normType)
    {
        $this->data['NormType'] = $normType;
        $this->options['query']['NormType'] = $normType;

        return $this;
    }

    /**
     * @param string $casterName
     *
     * @return $this
     */
    public function withCasterName($casterName)
    {
        $this->data['CasterName'] = $casterName;
        $this->options['query']['CasterName'] = $casterName;

        return $this;
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
     * @param string $chargeType
     *
     * @return $this
     */
    public function withChargeType($chargeType)
    {
        $this->data['ChargeType'] = $chargeType;
        $this->options['query']['ChargeType'] = $chargeType;

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
     * @param string $purchaseTime
     *
     * @return $this
     */
    public function withPurchaseTime($purchaseTime)
    {
        $this->data['PurchaseTime'] = $purchaseTime;
        $this->options['query']['PurchaseTime'] = $purchaseTime;

        return $this;
    }
}
