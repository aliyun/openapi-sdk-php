<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeCandidateOrganizations extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
