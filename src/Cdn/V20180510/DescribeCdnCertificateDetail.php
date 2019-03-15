<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnCertificateDetail extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
