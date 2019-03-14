<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api VerifyContactField
 *
 * @method string getCountry()
 * @method string getAddress()
 * @method string getTelArea()
 * @method string getCity()
 * @method string getZhAddress()
 * @method string getRegistrantType()
 * @method string getDomainName()
 * @method string getTelephone()
 * @method string getZhCity()
 * @method string getZhProvince()
 * @method string getRegistrantOrganization()
 * @method string getTelExt()
 * @method string getProvince()
 * @method string getZhRegistrantName()
 * @method string getPostalCode()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getEmail()
 * @method string getRegistrantName()
 * @method string getZhRegistrantOrganization()
 */
class VerifyContactField extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
}
