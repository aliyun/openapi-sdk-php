<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Rpc;

/**
 * Api AddIdentityCertifiedForBidUser
 *
 * @method string getBidType()
 * @method string getLicenseNumber()
 * @method string getLicenseType()
 * @method string getPhone()
 * @method string getName()
 * @method string getPK()
 * @method string getIsEnterprise()
 */
class AddIdentityCertifiedForBidUser extends Rpc
{
    public $product = 'Crm';

    public $version = '2015-04-08';

    public $method = 'POST';

    public $serviceCode = 'crm';

    /**
     * @param string $bidType
     *
     * @return $this
     */
    public function withBidType($bidType)
    {
        $this->data['BidType'] = $bidType;
        $this->options['query']['BidType'] = $bidType;

        return $this;
    }

    /**
     * @param string $licenseNumber
     *
     * @return $this
     */
    public function withLicenseNumber($licenseNumber)
    {
        $this->data['LicenseNumber'] = $licenseNumber;
        $this->options['query']['LicenseNumber'] = $licenseNumber;

        return $this;
    }

    /**
     * @param string $licenseType
     *
     * @return $this
     */
    public function withLicenseType($licenseType)
    {
        $this->data['LicenseType'] = $licenseType;
        $this->options['query']['LicenseType'] = $licenseType;

        return $this;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function withPhone($phone)
    {
        $this->data['Phone'] = $phone;
        $this->options['query']['Phone'] = $phone;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $pK
     *
     * @return $this
     */
    public function withPK($pK)
    {
        $this->data['PK'] = $pK;
        $this->options['query']['PK'] = $pK;

        return $this;
    }

    /**
     * @param string $isEnterprise
     *
     * @return $this
     */
    public function withIsEnterprise($isEnterprise)
    {
        $this->data['IsEnterprise'] = $isEnterprise;
        $this->options['query']['IsEnterprise'] = $isEnterprise;

        return $this;
    }
}
