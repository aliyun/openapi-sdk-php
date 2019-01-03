<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveSingleTaskForCreatingOrderRedeem
 *
 * @method string getPromotionNo()
 * @method string getCurrentExpirationDate()
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderRedeem extends RpcRequest
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
    public $action = 'SaveSingleTaskForCreatingOrderRedeem';

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
     * @deprecated deprecated since version 2.0, Use withCurrentExpirationDate() instead.
     *
     * @param string $currentExpirationDate
     *
     * @return $this
     */
    public function setCurrentExpirationDate($currentExpirationDate)
    {
        return $this->withCurrentExpirationDate($currentExpirationDate);
    }

    /**
     * @param string $currentExpirationDate
     *
     * @return $this
     */
    public function withCurrentExpirationDate($currentExpirationDate)
    {
        $this->data['CurrentExpirationDate'] = $currentExpirationDate;
        $this->options['query']['CurrentExpirationDate'] = $currentExpirationDate;

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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
