<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ListInstance
 *
 */
class ListInstance extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'Airec';

    /**
     * @var string
     */
    public $version = '2018-10-12';

    /**
     * @var string
     */
    public $action = 'ListInstance';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances';

    /**
     * @var string
     */
    public $serviceCode = 'airec';
}
