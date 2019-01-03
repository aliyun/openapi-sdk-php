<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of CheckAliyunCSServiceRole
 *
 */
class CheckAliyunCSServiceRole extends RoaRequest
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
    public $action = 'CheckAliyunCSServiceRole';

    /**
     * @var string
     */
    public $pathPattern = '/aliyuncsrole/status';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
