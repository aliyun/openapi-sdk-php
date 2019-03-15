<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getOrderRenewParam()
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderRenew extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
}
