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
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method array getDomainName()
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
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
class SaveBatchTaskForUpdatingContactInfoByNewContact extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

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
}
