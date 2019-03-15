<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method array getOrderActivateParam()
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
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
class SaveBatchTaskForCreatingOrderActivate extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Address'] = $orderActivateParam[$i]['Address'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PermitPremiumActivation'] = $orderActivateParam[$i]['PermitPremiumActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelArea'] = $orderActivateParam[$i]['TelArea'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.City'] = $orderActivateParam[$i]['City'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns2'] = $orderActivateParam[$i]['Dns2'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Dns1'] = $orderActivateParam[$i]['Dns1'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.DomainName'] = $orderActivateParam[$i]['DomainName'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantProfileId'] = $orderActivateParam[$i]['RegistrantProfileId'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantType'] = $orderActivateParam[$i]['RegistrantType'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Telephone'] = $orderActivateParam[$i]['Telephone'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TrademarkDomainActivation'] = $orderActivateParam[$i]['TrademarkDomainActivation'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.AliyunDns'] = $orderActivateParam[$i]['AliyunDns'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantOrganization'] = $orderActivateParam[$i]['RegistrantOrganization'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.TelExt'] = $orderActivateParam[$i]['TelExt'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Province'] = $orderActivateParam[$i]['Province'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.PostalCode'] = $orderActivateParam[$i]['PostalCode'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.EnableDomainProxy'] = $orderActivateParam[$i]['EnableDomainProxy'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.Email'] = $orderActivateParam[$i]['Email'];
            $this->options['query']['OrderActivateParam.' . ($i + 1) . '.RegistrantName'] = $orderActivateParam[$i]['RegistrantName'];
        }

        return $this;
    }
}
