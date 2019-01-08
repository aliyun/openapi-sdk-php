<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLicense
 *
 * @method string getLicenseCode()
 */
class DescribeLicense extends RpcRequest
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
    public $action = 'DescribeLicense';

    /**
     * @var string
     */
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
