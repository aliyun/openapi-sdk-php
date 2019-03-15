<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveCertificateDetail extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
