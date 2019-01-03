<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeRegionImages
 *
 */
class DescribeRegionImages extends RoaRequest
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
    public $action = 'DescribeRegionImages';

    /**
     * @var string
     */
    public $pathPattern = '/region/images';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
