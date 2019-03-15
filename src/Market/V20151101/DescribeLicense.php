<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * @method string getLicenseCode()
 * @method $this withLicenseCode($value)
 */
class DescribeLicense extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';
}
