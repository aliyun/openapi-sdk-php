<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api SaveSingleTaskForCreatingOrderActivate
 *
 * @method string getCountry()
 * @method string getSubscriptionDuration()
 * @method string getPermitPremiumActivation()
 * @method string getCity()
 * @method string getDns2()
 * @method string getDns1()
 * @method string getRegistrantProfileId()
 * @method string getCouponNo()
 * @method string getAliyunDns()
 * @method string getTelExt()
 * @method string getProvince()
 * @method string getPostalCode()
 * @method string getLang()
 * @method string getEmail()
 * @method string getAddress()
 * @method string getTelArea()
 * @method string getDomainName()
 * @method string getRegistrantType()
 * @method string getTelephone()
 * @method string getTrademarkDomainActivation()
 * @method string getUseCoupon()
 * @method string getRegistrantOrganization()
 * @method string getPromotionNo()
 * @method string getUserClientIp()
 * @method string getEnableDomainProxy()
 * @method string getRegistrantName()
 * @method string getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderActivate extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

    /**
     * @param string $country
     *
     * @return $this
     */
    public function withCountry($country)
    {
        $this->data['Country'] = $country;
        $this->options['query']['Country'] = $country;

        return $this;
    }

    /**
     * @param string $subscriptionDuration
     *
     * @return $this
     */
    public function withSubscriptionDuration($subscriptionDuration)
    {
        $this->data['SubscriptionDuration'] = $subscriptionDuration;
        $this->options['query']['SubscriptionDuration'] = $subscriptionDuration;

        return $this;
    }

    /**
     * @param string $permitPremiumActivation
     *
     * @return $this
     */
    public function withPermitPremiumActivation($permitPremiumActivation)
    {
        $this->data['PermitPremiumActivation'] = $permitPremiumActivation;
        $this->options['query']['PermitPremiumActivation'] = $permitPremiumActivation;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function withCity($city)
    {
        $this->data['City'] = $city;
        $this->options['query']['City'] = $city;

        return $this;
    }

    /**
     * @param string $dns2
     *
     * @return $this
     */
    public function withDns2($dns2)
    {
        $this->data['Dns2'] = $dns2;
        $this->options['query']['Dns2'] = $dns2;

        return $this;
    }

    /**
     * @param string $dns1
     *
     * @return $this
     */
    public function withDns1($dns1)
    {
        $this->data['Dns1'] = $dns1;
        $this->options['query']['Dns1'] = $dns1;

        return $this;
    }

    /**
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function withRegistrantProfileId($registrantProfileId)
    {
        $this->data['RegistrantProfileId'] = $registrantProfileId;
        $this->options['query']['RegistrantProfileId'] = $registrantProfileId;

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
     * @param string $aliyunDns
     *
     * @return $this
     */
    public function withAliyunDns($aliyunDns)
    {
        $this->data['AliyunDns'] = $aliyunDns;
        $this->options['query']['AliyunDns'] = $aliyunDns;

        return $this;
    }

    /**
     * @param string $telExt
     *
     * @return $this
     */
    public function withTelExt($telExt)
    {
        $this->data['TelExt'] = $telExt;
        $this->options['query']['TelExt'] = $telExt;

        return $this;
    }

    /**
     * @param string $province
     *
     * @return $this
     */
    public function withProvince($province)
    {
        $this->data['Province'] = $province;
        $this->options['query']['Province'] = $province;

        return $this;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function withPostalCode($postalCode)
    {
        $this->data['PostalCode'] = $postalCode;
        $this->options['query']['PostalCode'] = $postalCode;

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
     * @param string $email
     *
     * @return $this
     */
    public function withEmail($email)
    {
        $this->data['Email'] = $email;
        $this->options['query']['Email'] = $email;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function withAddress($address)
    {
        $this->data['Address'] = $address;
        $this->options['query']['Address'] = $address;

        return $this;
    }

    /**
     * @param string $telArea
     *
     * @return $this
     */
    public function withTelArea($telArea)
    {
        $this->data['TelArea'] = $telArea;
        $this->options['query']['TelArea'] = $telArea;

        return $this;
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
     * @param string $registrantType
     *
     * @return $this
     */
    public function withRegistrantType($registrantType)
    {
        $this->data['RegistrantType'] = $registrantType;
        $this->options['query']['RegistrantType'] = $registrantType;

        return $this;
    }

    /**
     * @param string $telephone
     *
     * @return $this
     */
    public function withTelephone($telephone)
    {
        $this->data['Telephone'] = $telephone;
        $this->options['query']['Telephone'] = $telephone;

        return $this;
    }

    /**
     * @param string $trademarkDomainActivation
     *
     * @return $this
     */
    public function withTrademarkDomainActivation($trademarkDomainActivation)
    {
        $this->data['TrademarkDomainActivation'] = $trademarkDomainActivation;
        $this->options['query']['TrademarkDomainActivation'] = $trademarkDomainActivation;

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
     * @param string $registrantOrganization
     *
     * @return $this
     */
    public function withRegistrantOrganization($registrantOrganization)
    {
        $this->data['RegistrantOrganization'] = $registrantOrganization;
        $this->options['query']['RegistrantOrganization'] = $registrantOrganization;

        return $this;
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
     * @param string $enableDomainProxy
     *
     * @return $this
     */
    public function withEnableDomainProxy($enableDomainProxy)
    {
        $this->data['EnableDomainProxy'] = $enableDomainProxy;
        $this->options['query']['EnableDomainProxy'] = $enableDomainProxy;

        return $this;
    }

    /**
     * @param string $registrantName
     *
     * @return $this
     */
    public function withRegistrantName($registrantName)
    {
        $this->data['RegistrantName'] = $registrantName;
        $this->options['query']['RegistrantName'] = $registrantName;

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
