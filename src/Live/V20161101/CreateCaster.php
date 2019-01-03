<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCaster
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
class CreateCaster extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'CreateCaster';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withCasterTemplate() instead.
     *
     * @param string $casterTemplate
     *
     * @return $this
     */
    public function setCasterTemplate($casterTemplate)
    {
        return $this->withCasterTemplate($casterTemplate);
    }

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
     * @deprecated deprecated since version 2.0, Use withExpireTime() instead.
     *
     * @param string $expireTime
     *
     * @return $this
     */
    public function setExpireTime($expireTime)
    {
        return $this->withExpireTime($expireTime);
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
     * @deprecated deprecated since version 2.0, Use withNormType() instead.
     *
     * @param string $normType
     *
     * @return $this
     */
    public function setNormType($normType)
    {
        return $this->withNormType($normType);
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
     * @deprecated deprecated since version 2.0, Use withCasterName() instead.
     *
     * @param string $casterName
     *
     * @return $this
     */
    public function setCasterName($casterName)
    {
        return $this->withCasterName($casterName);
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
     * @deprecated deprecated since version 2.0, Use withChargeType() instead.
     *
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        return $this->withChargeType($chargeType);
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
     * @deprecated deprecated since version 2.0, Use withPurchaseTime() instead.
     *
     * @param string $purchaseTime
     *
     * @return $this
     */
    public function setPurchaseTime($purchaseTime)
    {
        return $this->withPurchaseTime($purchaseTime);
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
