<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveBatchTaskForCreatingOrderActivate
 *
 * @method array getOrderActivateParam()
 * @method string getPromotionNo()
 * @method string getUserClientIp()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderActivate extends RpcRequest
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
    public $action = 'SaveBatchTaskForCreatingOrderActivate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getOrderActivateParam() instead.
     *
     * @return array
     */
    public function getOrderActivateParams()
    {
        return $this->getOrderActivateParam();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderActivateParam() instead.
     *
     * @param array $orderActivateParams
     *
     * @return $this
     */
    public function setOrderActivateParams(array $orderActivateParams)
    {
        return $this->withOrderActivateParam($orderActivateParams);
    }

    /**
     * @param array $orderActivateParam
     *
     * @return $this
     */
    public function withOrderActivateParam(array $orderActivateParam)
    {
        $this->data['OrderActivateParam'] = $orderActivateParam;
        foreach ($orderActivateParam as $i => $iValue) {
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Country'] = $orderActivateParam[$i]['Country'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.SubscriptionDuration'] = $orderActivateParam[$i]['SubscriptionDuration'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PermitPremiumActivation'] = $orderActivateParam[$i]['PermitPremiumActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.City'] = $orderActivateParam[$i]['City'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns2'] = $orderActivateParam[$i]['Dns2'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns1'] = $orderActivateParam[$i]['Dns1'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantProfileId'] = $orderActivateParam[$i]['RegistrantProfileId'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.AliyunDns'] = $orderActivateParam[$i]['AliyunDns'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhCity'] = $orderActivateParam[$i]['ZhCity'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelExt'] = $orderActivateParam[$i]['TelExt'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhRegistrantName'] = $orderActivateParam[$i]['ZhRegistrantName'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Province'] = $orderActivateParam[$i]['Province'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PostalCode'] = $orderActivateParam[$i]['PostalCode'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Email'] = $orderActivateParam[$i]['Email'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhRegistrantOrganization'] = $orderActivateParam[$i]['ZhRegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Address'] = $orderActivateParam[$i]['Address'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelArea'] = $orderActivateParam[$i]['TelArea'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.DomainName'] = $orderActivateParam[$i]['DomainName'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhAddress'] = $orderActivateParam[$i]['ZhAddress'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantType'] = $orderActivateParam[$i]['RegistrantType'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Telephone'] = $orderActivateParam[$i]['Telephone'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TrademarkDomainActivation'] = $orderActivateParam[$i]['TrademarkDomainActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.ZhProvince'] = $orderActivateParam[$i]['ZhProvince'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantOrganization'] = $orderActivateParam[$i]['RegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.EnableDomainProxy'] = $orderActivateParam[$i]['EnableDomainProxy'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantName'] = $orderActivateParam[$i]['RegistrantName'];
        }

        return $this;
    }

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
