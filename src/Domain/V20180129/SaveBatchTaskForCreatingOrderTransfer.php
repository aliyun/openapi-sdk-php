<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api SaveBatchTaskForCreatingOrderTransfer
 *
 * @method string getPromotionNo()
 * @method array getOrderTransferParam()
 * @method string getUserClientIp()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderTransfer extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
