<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ActivateLicense
 *
 * @method string getIdentification()
 * @method string getLicenseCode()
 */
class ActivateLicense extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'ActivateLicense';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withIdentification() instead.
     *
     * @param string $identification
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        return $this->withIdentification($identification);
    }

    /**
     * @param string $identification
     *
     * @return $this
     */
    public function withIdentification($identification)
    {
        $this->data['Identification'] = $identification;
        $this->options['query']['Identification'] = $identification;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLicenseCode() instead.
     *
     * @param string $licenseCode
     *
     * @return $this
     */
    public function setLicenseCode($licenseCode)
    {
        return $this->withLicenseCode($licenseCode);
    }

    /**
     * @param string $licenseCode
     *
     * @return $this
     */
    public function withLicenseCode($licenseCode)
    {
        $this->data['LicenseCode'] = $licenseCode;
        $this->options['query']['LicenseCode'] = $licenseCode;

        return $this;
    }
}
