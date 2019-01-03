<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveBatchTaskForCreatingOrderRenew
 *
 * @method string getPromotionNo()
 * @method string getUserClientIp()
 * @method array getOrderRenewParam()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderRenew extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'SaveBatchTaskForCreatingOrderRenew';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPromotionNo() instead.
     *
     * @param string $promotionNo
     *
     * @return $this
     */
    public function setPromotionNo($promotionNo)
    {
        return $this->withPromotionNo($promotionNo);
    }

    /**
     * @param string $promotionNo
     *
     * @return $this
     */
    public function withPromotionNo($promotionNo)
    {
        $this->data['PromotionNo'] = $promotionNo;
        $this->options['query']['PromotionNo'] = $promotionNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getOrderRenewParam() instead.
     *
     * @return array
     */
    public function getOrderRenewParams()
    {
        return $this->getOrderRenewParam();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderRenewParam() instead.
     *
     * @param array $orderRenewParams
     *
     * @return $this
     */
    public function setOrderRenewParams(array $orderRenewParams)
    {
        return $this->withOrderRenewParam($orderRenewParams);
    }

    /**
     * @param array $orderRenewParam
     *
     * @return $this
     */
    public function withOrderRenewParam(array $orderRenewParam)
    {
        $this->data['OrderRenewParam'] = $orderRenewParam;
        foreach ($orderRenewParam as $i => $iValue) {
            $this->options['query']['OrderRenewParam.' . ($i + 1) . '.SubscriptionDuration'] = $orderRenewParam[$i]['SubscriptionDuration'];
            $this->options['query']['OrderRenewParam.' . ($i + 1) . '.CurrentExpirationDate'] = $orderRenewParam[$i]['CurrentExpirationDate'];
            $this->options['query']['OrderRenewParam.' . ($i + 1) . '.DomainName'] = $orderRenewParam[$i]['DomainName'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCouponNo() instead.
     *
     * @param string $couponNo
     *
     * @return $this
     */
    public function setCouponNo($couponNo)
    {
        return $this->withCouponNo($couponNo);
    }

    /**
     * @param string $couponNo
     *
     * @return $this
     */
    public function withCouponNo($couponNo)
    {
        $this->data['CouponNo'] = $couponNo;
        $this->options['query']['CouponNo'] = $couponNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUseCoupon() instead.
     *
     * @param string $useCoupon
     *
     * @return $this
     */
    public function setUseCoupon($useCoupon)
    {
        return $this->withUseCoupon($useCoupon);
    }

    /**
     * @param string $useCoupon
     *
     * @return $this
     */
    public function withUseCoupon($useCoupon)
    {
        $this->data['UseCoupon'] = $useCoupon;
        $this->options['query']['UseCoupon'] = $useCoupon;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUsePromotion() instead.
     *
     * @param string $usePromotion
     *
     * @return $this
     */
    public function setUsePromotion($usePromotion)
    {
        return $this->withUsePromotion($usePromotion);
    }

    /**
     * @param string $usePromotion
     *
     * @return $this
     */
    public function withUsePromotion($usePromotion)
    {
        $this->data['UsePromotion'] = $usePromotion;
        $this->options['query']['UsePromotion'] = $usePromotion;

        return $this;
    }
}
