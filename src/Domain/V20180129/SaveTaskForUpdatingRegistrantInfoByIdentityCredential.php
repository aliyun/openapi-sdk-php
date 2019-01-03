<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveTaskForUpdatingRegistrantInfoByIdentityCredential
 *
 * @method string getCountry()
 * @method string getIdentityCredentialType()
 * @method string getAddress()
 * @method string getTelArea()
 * @method string getCity()
 * @method string getZhAddress()
 * @method string getRegistrantType()
 * @method array getDomainName()
 * @method string getIdentityCredential()
 * @method string getTelephone()
 * @method string getTransferOutProhibited()
 * @method string getZhCity()
 * @method string getZhProvince()
 * @method string getRegistrantOrganization()
 * @method string getTelExt()
 * @method string getProvince()
 * @method string getZhRegistrantName()
 * @method string getPostalCode()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getIdentityCredentialNo()
 * @method string getEmail()
 * @method string getRegistrantName()
 * @method string getZhRegistrantOrganization()
 */
class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends RpcRequest
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
    public $action = 'SaveTaskForUpdatingRegistrantInfoByIdentityCredential';

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
     * @deprecated deprecated since version 2.0, Use withIdentityCredentialType() instead.
     *
     * @param string $identityCredentialType
     *
     * @return $this
     */
    public function setIdentityCredentialType($identityCredentialType)
    {
        return $this->withIdentityCredentialType($identityCredentialType);
    }

    /**
     * @param string $identityCredentialType
     *
     * @return $this
     */
    public function withIdentityCredentialType($identityCredentialType)
    {
        $this->data['IdentityCredentialType'] = $identityCredentialType;
        $this->options['query']['IdentityCredentialType'] = $identityCredentialType;

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
     * @deprecated deprecated since version 2.0, Use getDomainName() instead.
     *
     * @return array
     */
    public function getDomainNames()
    {
        return $this->getDomainName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param array $domainNames
     *
     * @return $this
     */
    public function setDomainNames(array $domainNames)
    {
        return $this->withDomainName($domainNames);
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIdentityCredential() instead.
     *
     * @param string $identityCredential
     *
     * @return $this
     */
    public function setIdentityCredential($identityCredential)
    {
        return $this->withIdentityCredential($identityCredential);
    }

    /**
     * @param string $identityCredential
     *
     * @return $this
     */
    public function withIdentityCredential($identityCredential)
    {
        $this->data['IdentityCredential'] = $identityCredential;
        $this->options['query']['IdentityCredential'] = $identityCredential;

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
     * @deprecated deprecated since version 2.0, Use withTransferOutProhibited() instead.
     *
     * @param string $transferOutProhibited
     *
     * @return $this
     */
    public function setTransferOutProhibited($transferOutProhibited)
    {
        return $this->withTransferOutProhibited($transferOutProhibited);
    }

    /**
     * @param string $transferOutProhibited
     *
     * @return $this
     */
    public function withTransferOutProhibited($transferOutProhibited)
    {
        $this->data['TransferOutProhibited'] = $transferOutProhibited;
        $this->options['query']['TransferOutProhibited'] = $transferOutProhibited;

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
     * @deprecated deprecated since version 2.0, Use withIdentityCredentialNo() instead.
     *
     * @param string $identityCredentialNo
     *
     * @return $this
     */
    public function setIdentityCredentialNo($identityCredentialNo)
    {
        return $this->withIdentityCredentialNo($identityCredentialNo);
    }

    /**
     * @param string $identityCredentialNo
     *
     * @return $this
     */
    public function withIdentityCredentialNo($identityCredentialNo)
    {
        $this->data['IdentityCredentialNo'] = $identityCredentialNo;
        $this->options['query']['IdentityCredentialNo'] = $identityCredentialNo;

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
}
