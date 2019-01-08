<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeRegionSharedServices
 *
 * @method string getRegion()
 */
class DescribeRegionSharedServices extends RoaRequest
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
    public $action = 'DescribeRegionSharedServices';

    /**
     * @var string
     */
    public $pathPattern = '/region/[Region]/shared_services';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->pathParameters['Region'] = $region;

        return $this;
    }
}
