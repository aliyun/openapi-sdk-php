<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveBatchTaskForCreatingOrderTransfer
 *
 * @method string getPromotionNo()
 * @method array getOrderTransferParam()
 * @method string getUserClientIp()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderTransfer extends RpcRequest
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
    public $action = 'SaveBatchTaskForCreatingOrderTransfer';

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
     * @deprecated deprecated since version 2.0, Use getOrderTransferParam() instead.
     *
     * @return array
     */
    public function getOrderTransferParams()
    {
        return $this->getOrderTransferParam();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderTransferParam() instead.
     *
     * @param array $orderTransferParams
     *
     * @return $this
     */
    public function setOrderTransferParams(array $orderTransferParams)
    {
        return $this->withOrderTransferParam($orderTransferParams);
    }

    /**
     * @param array $orderTransferParam
     *
     * @return $this
     */
    public function withOrderTransferParam(array $orderTransferParam)
    {
        $this->data['OrderTransferParam'] = $orderTransferParam;
        foreach ($orderTransferParam as $i => $iValue) {
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.PermitPremiumTransfer'] = $orderTransferParam[$i]['PermitPremiumTransfer'];
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.AuthorizationCode'] = $orderTransferParam[$i]['AuthorizationCode'];
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.DomainName'] = $orderTransferParam[$i]['DomainName'];
            $this->options['query']['OrderTransferParam.' . ($i + 1) . '.RegistrantProfileId'] = $orderTransferParam[$i]['RegistrantProfileId'];
        }

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
