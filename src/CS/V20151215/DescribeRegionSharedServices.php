<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DescribeRegionSharedServices
 *
 * @method string getRegion()
 */
class DescribeRegionSharedServices extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/region/[Region]/shared_services';

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
