<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api SaveBatchTaskForCreatingOrderRenew
 *
 * @method string getPromotionNo()
 * @method string getUserClientIp()
 * @method array getOrderRenewParam()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderRenew extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
