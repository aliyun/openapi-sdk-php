<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddIdentityCertifiedForBidUser
 *
 * @method string getBidType()
 * @method string getLicenseNumber()
 * @method string getLicenseType()
 * @method string getPhone()
 * @method string getName()
 * @method string getPK()
 * @method string getIsEnterprise()
 */
class AddIdentityCertifiedForBidUser extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Crm';

    /**
     * @var string
     */
    public $version = '2015-04-08';

    /**
     * @var string
     */
    public $action = 'AddIdentityCertifiedForBidUser';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withBidType() instead.
     *
     * @param string $bidType
     *
     * @return $this
     */
    public function setBidType($bidType)
    {
        return $this->withBidType($bidType);
    }

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
     * @deprecated deprecated since version 2.0, Use withLicenseNumber() instead.
     *
     * @param string $licenseNumber
     *
     * @return $this
     */
    public function setLicenseNumber($licenseNumber)
    {
        return $this->withLicenseNumber($licenseNumber);
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
     * @deprecated deprecated since version 2.0, Use withLicenseType() instead.
     *
     * @param string $licenseType
     *
     * @return $this
     */
    public function setLicenseType($licenseType)
    {
        return $this->withLicenseType($licenseType);
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
     * @deprecated deprecated since version 2.0, Use withPhone() instead.
     *
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        return $this->withPhone($phone);
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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withPK() instead.
     *
     * @param string $pK
     *
     * @return $this
     */
    public function setPK($pK)
    {
        return $this->withPK($pK);
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
     * @deprecated deprecated since version 2.0, Use withIsEnterprise() instead.
     *
     * @param string $isEnterprise
     *
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        return $this->withIsEnterprise($isEnterprise);
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
