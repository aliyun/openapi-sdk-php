<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * Api ActivateLicense
 *
 * @method string getIdentification()
 * @method string getLicenseCode()
 */
class ActivateLicense extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';

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
