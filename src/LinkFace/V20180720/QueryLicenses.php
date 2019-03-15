<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Rpc;

/**
 * @method string getLicenseType()
 * @method $this withLicenseType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryLicenses extends Rpc
{
    public $product = 'LinkFace';

    public $version = '2018-07-20';

    public $scheme = 'https';

    public $method = 'POST';
}
