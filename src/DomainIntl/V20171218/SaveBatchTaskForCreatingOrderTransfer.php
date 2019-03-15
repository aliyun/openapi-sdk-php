<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method array getOrderTransferParam()
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
class SaveBatchTaskForCreatingOrderTransfer extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
}
