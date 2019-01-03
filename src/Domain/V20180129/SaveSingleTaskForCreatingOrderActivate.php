<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveSingleTaskForCreatingOrderActivate
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
 * @method string getZhCity()
 * @method string getTelExt()
 * @method string getZhRegistrantName()
 * @method string getProvince()
 * @method string getPostalCode()
 * @method string getLang()
 * @method string getEmail()
 * @method string getZhRegistrantOrganization()
 * @method string getAddress()
 * @method string getTelArea()
 * @method string getDomainName()
 * @method string getZhAddress()
 * @method string getRegistrantType()
 * @method string getTelephone()
 * @method string getTrademarkDomainActivation()
 * @method string getUseCoupon()
 * @method string getZhProvince()
 * @method string getRegistrantOrganization()
 * @method string getPromotionNo()
 * @method string getEnableDomainProxy()
 * @method string getUserClientIp()
 * @method string getRegistrantName()
 * @method string getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderActivate extends RpcRequest
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
    public $action = 'SaveSingleTaskForCreatingOrderActivate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCountry() instead.
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        return $this->withCountry($country);
    }

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
     * @deprecated deprecated since version 2.0, Use withSubscriptionDuration() instead.
     *
     * @param string $subscriptionDuration
     *
     * @return $this
     */
    public function setSubscriptionDuration($subscriptionDuration)
    {
        return $this->withSubscriptionDuration($subscriptionDuration);
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
     * @deprecated deprecated since version 2.0, Use withPermitPremiumActivation() instead.
     *
     * @param string $permitPremiumActivation
     *
     * @return $this
     */
    public function setPermitPremiumActivation($permitPremiumActivation)
    {
        return $this->withPermitPremiumActivation($permitPremiumActivation);
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
     * @deprecated deprecated since version 2.0, Use withCity() instead.
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        return $this->withCity($city);
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
     * @deprecated deprecated since version 2.0, Use withDns2() instead.
     *
     * @param string $dns2
     *
     * @return $this
     */
    public function setDns2($dns2)
    {
        return $this->withDns2($dns2);
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
     * @deprecated deprecated since version 2.0, Use withDns1() instead.
     *
     * @param string $dns1
     *
     * @return $this
     */
    public function setDns1($dns1)
    {
        return $this->withDns1($dns1);
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
     * @deprecated deprecated since version 2.0, Use withRegistrantProfileId() instead.
     *
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function setRegistrantProfileId($registrantProfileId)
    {
        return $this->withRegistrantProfileId($registrantProfileId);
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
     * @deprecated deprecated since version 2.0, Use withAliyunDns() instead.
     *
     * @param string $aliyunDns
     *
     * @return $this
     */
    public function setAliyunDns($aliyunDns)
    {
        return $this->withAliyunDns($aliyunDns);
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
     * @deprecated deprecated since version 2.0, Use withZhCity() instead.
     *
     * @param string $zhCity
     *
     * @return $this
     */
    public function setZhCity($zhCity)
    {
        return $this->withZhCity($zhCity);
    }

    /**
     * @param string $zhCity
     *
     * @return $this
     */
    public function withZhCity($zhCity)
    {
        $this->data['ZhCity'] = $zhCity;
        $this->options['query']['ZhCity'] = $zhCity;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTelExt() instead.
     *
     * @param string $telExt
     *
     * @return $this
     */
    public function setTelExt($telExt)
    {
        return $this->withTelExt($telExt);
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
     * @deprecated deprecated since version 2.0, Use withZhRegistrantName() instead.
     *
     * @param string $zhRegistrantName
     *
     * @return $this
     */
    public function setZhRegistrantName($zhRegistrantName)
    {
        return $this->withZhRegistrantName($zhRegistrantName);
    }

    /**
     * @param string $zhRegistrantName
     *
     * @return $this
     */
    public function withZhRegistrantName($zhRegistrantName)
    {
        $this->data['ZhRegistrantName'] = $zhRegistrantName;
        $this->options['query']['ZhRegistrantName'] = $zhRegistrantName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProvince() instead.
     *
     * @param string $province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        return $this->withProvince($province);
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
     * @deprecated deprecated since version 2.0, Use withPostalCode() instead.
     *
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        return $this->withPostalCode($postalCode);
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
     * @deprecated deprecated since version 2.0, Use withEmail() instead.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->withEmail($email);
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
     * @deprecated deprecated since version 2.0, Use withZhRegistrantOrganization() instead.
     *
     * @param string $zhRegistrantOrganization
     *
     * @return $this
     */
    public function setZhRegistrantOrganization($zhRegistrantOrganization)
    {
        return $this->withZhRegistrantOrganization($zhRegistrantOrganization);
    }

    /**
     * @param string $zhRegistrantOrganization
     *
     * @return $this
     */
    public function withZhRegistrantOrganization($zhRegistrantOrganization)
    {
        $this->data['ZhRegistrantOrganization'] = $zhRegistrantOrganization;
        $this->options['query']['ZhRegistrantOrganization'] = $zhRegistrantOrganization;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAddress() instead.
     *
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        return $this->withAddress($address);
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
     * @deprecated deprecated since version 2.0, Use withTelArea() instead.
     *
     * @param string $telArea
     *
     * @return $this
     */
    public function setTelArea($telArea)
    {
        return $this->withTelArea($telArea);
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
     * @deprecated deprecated since version 2.0, Use withZhAddress() instead.
     *
     * @param string $zhAddress
     *
     * @return $this
     */
    public function setZhAddress($zhAddress)
    {
        return $this->withZhAddress($zhAddress);
    }

    /**
     * @param string $zhAddress
     *
     * @return $this
     */
    public function withZhAddress($zhAddress)
    {
        $this->data['ZhAddress'] = $zhAddress;
        $this->options['query']['ZhAddress'] = $zhAddress;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegistrantType() instead.
     *
     * @param string $registrantType
     *
     * @return $this
     */
    public function setRegistrantType($registrantType)
    {
        return $this->withRegistrantType($registrantType);
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
     * @deprecated deprecated since version 2.0, Use withTelephone() instead.
     *
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        return $this->withTelephone($telephone);
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
     * @deprecated deprecated since version 2.0, Use withTrademarkDomainActivation() instead.
     *
     * @param string $trademarkDomainActivation
     *
     * @return $this
     */
    public function setTrademarkDomainActivation($trademarkDomainActivation)
    {
        return $this->withTrademarkDomainActivation($trademarkDomainActivation);
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
     * @deprecated deprecated since version 2.0, Use withZhProvince() instead.
     *
     * @param string $zhProvince
     *
     * @return $this
     */
    public function setZhProvince($zhProvince)
    {
        return $this->withZhProvince($zhProvince);
    }

    /**
     * @param string $zhProvince
     *
     * @return $this
     */
    public function withZhProvince($zhProvince)
    {
        $this->data['ZhProvince'] = $zhProvince;
        $this->options['query']['ZhProvince'] = $zhProvince;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegistrantOrganization() instead.
     *
     * @param string $registrantOrganization
     *
     * @return $this
     */
    public function setRegistrantOrganization($registrantOrganization)
    {
        return $this->withRegistrantOrganization($registrantOrganization);
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
     * @deprecated deprecated since version 2.0, Use withEnableDomainProxy() instead.
     *
     * @param string $enableDomainProxy
     *
     * @return $this
     */
    public function setEnableDomainProxy($enableDomainProxy)
    {
        return $this->withEnableDomainProxy($enableDomainProxy);
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
     * @deprecated deprecated since version 2.0, Use withRegistrantName() instead.
     *
     * @param string $registrantName
     *
     * @return $this
     */
    public function setRegistrantName($registrantName)
    {
        return $this->withRegistrantName($registrantName);
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
