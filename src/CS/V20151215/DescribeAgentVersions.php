<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeAgentVersions
 *
 */
class DescribeAgentVersions extends RoaRequest
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
    public $action = 'DescribeAgentVersions';

    /**
     * @var string
     */
    public $pathPattern = '/agent_version';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
