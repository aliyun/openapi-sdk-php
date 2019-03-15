<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method array getOrderRedeemParam()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderRedeem extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

    /**
     * @param array $orderRedeemParam
     *
     * @return $this
     */
    public function withOrderRedeemParam(array $orderRedeemParam)
    {
        $this->data['OrderRedeemParam'] = $orderRedeemParam;
        foreach ($orderRedeemParam as $i => $iValue) {
            $this->options['query']['OrderRedeemParam.' . ($i + 1) . '.CurrentExpirationDate'] = $orderRedeemParam[$i]['CurrentExpirationDate'];
            $this->options['query']['OrderRedeemParam.' . ($i + 1) . '.DomainName'] = $orderRedeemParam[$i]['DomainName'];
        }

        return $this;
    }
}
