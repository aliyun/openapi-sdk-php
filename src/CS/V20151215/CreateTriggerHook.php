<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of CreateTriggerHook
 *
 */
class CreateTriggerHook extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'CreateTriggerHook';

    /**
     * @var string
     */
    public $pathPattern = '/hook/trigger';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
