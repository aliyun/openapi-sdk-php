<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ProbeTriggerHook
 *
 */
class ProbeTriggerHook extends RoaRequest
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
    public $action = 'ProbeTriggerHook';

    /**
     * @var string
     */
    public $pathPattern = '/hook/trigger';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
