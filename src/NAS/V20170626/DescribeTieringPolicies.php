<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeTieringPolicies
 *
 */
class DescribeTieringPolicies extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'DescribeTieringPolicies';

    /**
     * @var string
     */
    public $serviceCode = 'nas';
}
