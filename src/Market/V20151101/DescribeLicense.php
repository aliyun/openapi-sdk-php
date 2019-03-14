<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * Api DescribeLicense
 *
 * @method string getLicenseCode()
 */
class DescribeLicense extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';

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
