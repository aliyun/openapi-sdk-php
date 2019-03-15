<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getRegistrantProfileType()
 * @method $this withRegistrantProfileType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getDefaultRegistrantProfile()
 * @method $this withDefaultRegistrantProfile($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 */
class SaveRegistrantProfile extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';
}
